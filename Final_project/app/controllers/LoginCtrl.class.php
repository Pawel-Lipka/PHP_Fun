<?php

namespace app\controllers;

use app\forms\LoginForm;
use core\App;
use core\Validator;
use core\RoleUtils;
use core\Utils;
use core\Message;

class LoginCtrl{

    private $form;
    private $v;

    public function __construct(){

        $this->form = new LoginForm();
        $this->v = new Validator();
    }

    // get and validate login params
    public function get_params(){

        $this->form->login = $this->v->validateFromRequest("login",[
            'required'=>true,
            'required_message' => 'Login jest wymagany',
            'max_length' => 20,
            'validator_message' => 'Max 20 znaków',
        ]);
       
        $this->form->password = $this->v->validateFromRequest("pass",[
            'required'=>true,
            'required_message' => 'Hasło jest wymagane',
            'max_length' => 20,
            'validator_message' => 'Max 20 znaków',
        ]);
        
    }

    public function is_password_correct(){
    
        $password = App::getDB()->select('user','password',['login' => $this->form->login]);

        if ($password['0'] == $this->form->password){
            return true;
        }

        Utils::addErrorMessage("Błędne Hasło");
        return false;
    }

    public function is_user_in_db(){
        
        $user = App::getDB()->select('user','login',['login' => $this->form->login]);
        
        if( ! isset($user['0'])){

            Utils::addErrorMessage("Błędny Login");
            return false;
        }

        return true;
    }

    public function action_login(){

        $this -> get_params();
       
        // if login credentials are correct grant role from DB
        if (App::getMessages()->isEmpty() and $this -> is_user_in_db() and $this -> is_password_correct()){

            $role = App::getDB()->get("role",[
                "[>]user_role" => ["id_role" => "id_role"],
                "[>]user" => ["user_role.id_user" => "id_user"]
            ], "role_name",["login" => $this->form->login]);

            RoleUtils::addRole($role);

            App::getRouter()->redirectTo('generate_view');
            
        }
    
    $this->action_generate_login_view();
    
    }

    public function action_logout(){

        session_destroy();
        App::getRouter()->redirectTo('generate_login_view');
            
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