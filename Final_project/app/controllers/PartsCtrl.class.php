<?php

namespace app\controllers;

use app\forms\PartForm;
use core\App;
use core\Utils;
use core\ParamUtils;

class PartsCtrl{

    private $form;
    private $parts;

    public function __construct(){

        $this->form = new partForm();
        
    }

    //return true if value is in table column
    function is_in_db($table,$column,$value){
        return App::getDB()->has($table,[$column => $value]);
    }

    function action_part_action(){
        if(isset($_POST['btnAdd'])) {$this->action_add_part();}
        else $this->action_remove_part();
    }

    function action_add_part(){

    
        $code = ParamUtils::getFromRequest('code',true,'Brak kodu');
        $desc = ParamUtils::getFromRequest('desc',true,'brak opisu');
        $qty = ParamUtils::getFromRequest('qty',true,'brak ilosc');
        
        //If part is in DB increase quantity and update description. Else add new record to DB
        if($this->is_in_db('spare_parts','sp_code',$code)){

                App::getDB()->update('spare_parts', [
                    "sp_description" => $desc,
                    "quantity[+]"=> $qty],
                    ["sp_code[=]" => $code]);

                Utils::addInfoMessage("Część już jest w bazie, zwiękoszono ilość");
            }

        else{

                App::getDB()->insert('spare_parts', [
                    "sp_code" => $code,
                    "sp_description" => $desc,
                    "quantity"=> $qty]);
                
                Utils::addInfoMessage("Dodano nową część");
            }
            
            $this->action_generate_view();

        }

    function action_remove_part(){

        $code = ParamUtils::getFromRequest('code',true,'Brak kodu');
        $qty_to_remove = ParamUtils::getFromRequest('qty',true,'brak ilosc');

        $qty_in_db = App::getDB()->get('spare_parts','quantity',['sp_code[=]' => $code]);
        

        if ($qty_to_remove >= $qty_in_db){

            App::getDB()->delete('spare_parts',["sp_code" => $code]);
        }
        
        else{
            App::getDB()->update('spare_parts',
                ['quantity[-]' => $qty_to_remove],
                ['sp_code[=]' => $code]);
        }

        $this->action_generate_view();
    }

    function action_generate_view(){

        $this->parts = App::getDB()->select('spare_parts','*');

        App::getSmarty()->assign('page_title',"Części zamienne");
        //Logo
        App::getSmarty()->assign('logo',"Części zamienne");
        App::getSmarty()->assign('logo_action',"generate_view");
        //nav bar
        App::getSmarty()->assign('button1',"Części");
        App::getSmarty()->assign('button2',"Wyloguj");

        //spare parts from DB
        App::getSmarty()->assign('spare_parts',$this->parts);

        App::getSmarty()->assign('form',$this->form);


        App::getSmarty()->display("Parts_view.tpl");
    }
}