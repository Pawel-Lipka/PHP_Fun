<?php

namespace app\controllers;

use app\forms\PartForm;
use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use core\Validator;

class PartsCtrl{

    private $form;
    private $parts;
    private $parts_quantity;
    private $page_quantity;
    private $records_per_table = 10;
    private $page_selected;
    private $search_name;

    public function __construct(){

        $this->form = new partForm();

    }

    //return true if value is in table column
    function is_in_db($table,$column,$value){
        return App::getDB()->has($table,[$column => $value]);
    }

    // chceck if page number is correct
    function validate_page(){
        
        $v = new Validator();
        
        $number = $v->validateFromCleanURL(1,[
            'escape'=> false, 
            'int'=> true,
            'max_length' => 20,
            "min" => 1,
            "max" => 9999]);

        if( ! $v->isLastOK() || $v->isLastEmpty()) return 1;
        else return $number;        

    }

    function validate_part(){
        $v = new Validator();

       $this->form->code = $v->validateFromRequest('code',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Kod jest wymagany',
            'min_length' => 3,
            'max_length' => 15,
            'validator_message' => 'Kod powinien mieścić się pomiędzy 3 i 15 znakami']);

        $this->form->desc = $v->validateFromRequest('desc',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Opis jest wymagany',
            'min_length' => 3,
            'max_length' => 30,
            'validator_message' => 'Opis powinien mieścić się pomiędzy 3 i 30 znakami']);
    
        $this->form->qty = $v->validateFromRequest('qty',[
            'trim' => true,
            'required' => true,
            'required_message' => 'ilosc jest wymagana',
            'min_length' => 1,
            'max_length' => 6,
            'int' => true,
            'validator_message' => 'Liczba powinna mieścić się pomiędzy 1 i 6 znakami',
             ]);
        
        if (! App::getMessages()->isError()){
                return true;
        }
    
        return false;
    }

    function action_part_action(){
        if(isset($_POST['btnAdd'])) {$this->action_add_part();}
        else $this->action_remove_part();

    }

    function action_add_part(){
        
        if ($this->validate_part()){

        //If part is in DB increase quantity and update description. Else add new record to DB
        if($this->is_in_db('spare_parts','sp_code',$this->form->code)){

                App::getDB()->update('spare_parts', [
                    "quantity[+]"=> $this->form->qty],
                    ["sp_code[=]" => $this->form->code]);

                Utils::addInfoMessage("Zwiękoszono ilość");
            }

        else{

                App::getDB()->insert('spare_parts', [
                    "sp_code" => $this->form->code,
                    "sp_description" => $this->form->desc,
                    "quantity"=> $this->form->qty]);
                
                Utils::addInfoMessage("Dodano nową część");
            }
        }
            $this->action_generate_view();

        }
    
    function action_clear_search(){

        SessionUtils::remove("searched_name");
        
        $this->page_selected = 1;
        $this->action_change_page();
    }

    function action_remove_part(){

        $code = ParamUtils::getFromRequest('code',true,'Brak kodu');
        $qty_to_remove = ParamUtils::getFromRequest('qty',true,'brak ilosc');

        $qty_in_db = App::getDB()->get('spare_parts','quantity',['sp_code[=]' => $code]);
        
        if($qty_to_remove < 1){
            Utils::addErrorMessage("Pobranie musi być dodatnie");
        }

        else if ($qty_to_remove >= $qty_in_db){

            App::getDB()->delete('spare_parts',["sp_code" => $code]);
            Utils::addInfoMessage("Pobrano wszystkie części o kodzie $code");
        }
        
        else{
            App::getDB()->update('spare_parts',
                ['quantity[-]' => $qty_to_remove],
                ['sp_code[=]' => $code]);
            Utils::addInfoMessage("Pobrano $qty_to_remove części o kodzie $code");
        }

        $this->action_generate_view();
        
    }

    // get spare parts from DB. Depending on the form - by code, name or all
    function get_from_db(){

        $search_code = ParamUtils::getFromRequest("search_code");  
        $this->search_name = ParamUtils::getFromRequest("search_name") ? ParamUtils::getFromRequest("search_name") : SessionUtils::load("searched_name");
        $offset = ($this -> page_selected - 1) * $this->records_per_table;

        if( ! (is_null($search_code)) && ! empty($search_code)){
            
            $this -> parts_quantity = App::getDB()->count('spare_parts',["sp_code" => $search_code]);
            $this->parts = App::getDB()->select('spare_parts','*',["sp_code" => $search_code,"LIMIT" =>[$offset, $this->records_per_table]]);      
        }

        else if(! is_null($this->search_name) && ! empty($this->search_name)){

            SessionUtils::store("searched_name",$this->search_name);
            $this -> parts_quantity = App::getDB()->count('spare_parts',["sp_description[~]" => $this->search_name]);
            $this->parts = App::getDB()->select('spare_parts','*',["sp_description[~]" => $this->search_name,"LIMIT" =>[$offset, $this->records_per_table]]);     
        }

        else{

            $this -> parts_quantity = App::getDB()->count('spare_parts','*');
            $this->parts = App::getDB()->select('spare_parts','*',["LIMIT"=>[$offset,$this->records_per_table]]);  
        }

        $this -> page_quantity = ceil($this->parts_quantity / $this->records_per_table);
    }
    
    function action_change_page(){

        $this -> page_selected = $this -> validate_page();
        $this -> get_from_db();

        // set page to 1 if the page number provided by the user is out of range
        if ($this->page_selected > $this -> page_quantity) {$this->page_selected = 1;}

        $this -> action_generate_view();
    }

   

    function action_generate_part_table(){

        $this -> page_selected = $this -> validate_page();
        $this-> get_from_db();
        if ($this->page_selected > $this -> page_quantity) {$this->page_selected = 1;}

        App::getSmarty()->assign('spare_parts',$this->parts);
        App::getSmarty()->assign('parts_qty',$this->parts_quantity);
        App::getSmarty()->assign('pages_qty', $this->page_quantity);

        App::getSmarty()->assign('current_page', $this->page_selected);
        App::getSmarty()->assign('previous_page', $this->page_selected - 1);
        App::getSmarty()->assign('next_page', $this->page_selected + 1);
        App::getSmarty()->assign('search_name', $this->search_name);

        App::getSmarty()->display("Parts_table.tpl");
    }

    function action_generate_view(){

        
        $this -> page_selected = $this -> validate_page();
        $this-> get_from_db();
        if ($this->page_selected > $this -> page_quantity) {$this->page_selected = 1;}


        App::getSmarty()->assign('page_title',"Części zamienne");
        //Logo
        App::getSmarty()->assign('logo',"Części zamienne");
        App::getSmarty()->assign('logo_action',"generate_view");
        //Top nav bar
        App::getSmarty()->assign('button1',"Części");
        App::getSmarty()->assign('button2',"Wyloguj");
        App::getSmarty()->assign('button3',"Administracja");

        //spare parts from DB
        App::getSmarty()->assign('spare_parts',$this->parts);
        App::getSmarty()->assign('parts_qty',$this->parts_quantity);
        App::getSmarty()->assign('pages_qty', $this->page_quantity);

        //Table nav bar
        App::getSmarty()->assign('current_page', $this->page_selected);
        App::getSmarty()->assign('previous_page', $this->page_selected - 1);
        App::getSmarty()->assign('next_page', $this->page_selected + 1);
        App::getSmarty()->assign('search_name', $this->search_name);

        App::getSmarty()->assign('form',$this->form);

        App::getSmarty()->assign('messages', App::getMessages());
        App::getSmarty()->display("Parts_view.tpl");
    }
}