<?php

namespace app\controllers;

use app\forms\LoginForm;
use core\App;
use core\ParamUtils;


class LoginCtrl{

    private $form;

    public function __construct(){

        $this->form = new LoginForm();
    }


    public function action_generate_login_view(){

        App::getSmarty()->assign('page_title',"Logowanie");
        //Logo
        App::getSmarty()->assign('logo',"Logowanie");
        App::getSmarty()->assign('logo_action',"generate_login_view");
        //Nav Bar
        App::getSmarty()->assign('button1',"Zaloguj");

        App::getSmarty()->assign('form',$this->form);

        App::getSmarty()->display("Login_view.tpl");
    }
}