<?php

namespace app\controllers;

use app\forms\PartForm;
use core\App;

class PartsCtrl{

    private $form;

    public function __construct(){

        $this->form = new partForm();
    }

    function action_add_part(){
        echo "TODO";
    }

    function action_generate_view(){

        App::getSmarty()->assign('page_title',"Części zamienne");
        //Logo
        App::getSmarty()->assign('logo',"Części zamienne");
        App::getSmarty()->assign('logo_action',"generate_view");
        //nav bar
        App::getSmarty()->assign('button1',"Części");
        App::getSmarty()->assign('button2',"Wyloguj");

        App::getSmarty()->assign('form',$this->form);


        App::getSmarty()->display("Parts_view.tpl");
    }
}