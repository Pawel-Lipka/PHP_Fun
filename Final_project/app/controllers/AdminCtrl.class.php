<?php

namespace app\controllers;

use app\forms\NewUserForm;
use core\App;

class AdminCtrl{

    private $form;
    private $users;


    public function __construct(){

        $this->form = new NewUserForm();
        
    }

    function action_add_user(){

    }

    function action_generate_admin_view(){

        $this->users = App::getDB()->select('user','*');

        App::getSmarty()->assign('page_title',"Administracja");
        //Logo
        App::getSmarty()->assign('logo',"Administracja");
        App::getSmarty()->assign('logo_action',"generate_admin_view");
        //nav bar
        App::getSmarty()->assign('button1',"Części");
        App::getSmarty()->assign('button2',"Wyloguj");
        App::getSmarty()->assign('button3',"Administracja");

        //users from DB
        App::getSmarty()->assign('users',$this->users);

        App::getSmarty()->assign('form',$this->form);


        App::getSmarty()->display("Admin_view.tpl");
    }
}