<?php

namespace app\controllers;

use app\forms\NewUserForm;
use core\App;
use core\ParamUtils;
use core\Validator;
use core\Utils;


class AdminCtrl{

    private $form;
    private $users;
    private $roles;

    //private $name, $surename, $position, $phonenumber, $login, $password, $password1, $role;


    public function __construct(){

        $this->form = new NewUserForm();
        
        
    }

    function validate_user(){

        $v = new Validator();

        $this->form->name = $v->validateFromRequest('name',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Imię jest wymagane',
            'min_length' => 3,
            'max_length' => 30,
            'validator_message' => 'Imię powinno mieścić się pomiędzy 3 i 30 znakami']);

        $this->form->surename = $v->validateFromRequest('surename',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Nazwisko jest wymagane',
            'min_length' => 3,
            'max_length' => 30,
            'validator_message' => 'Nazwisko powinno mieścić się pomiędzy 3 i 30 znakami']);

        $this->form->position = $v->validateFromRequest('position',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Stanowisko jest wymagane',
            'min_length' => 3,
            'max_length' => 30,
            'validator_message' => 'Stanowisko powinno mieścić się pomiędzy 3 i 30 znakami']);
        
        $this->form->phonenumber = $v->validateFromRequest('phonenumber',[
            'trim' => true,
            'int' => true,
            'min_length' => 9,
            'max_length' => 9,
            'validator_message' => 'Numer telefonu powinien składać się z 9 cyfr']);
        
        $this->form->login = $v->validateFromRequest('login',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'min_length' => 3,
            'max_length' => 10,
            'validator_message' => 'Login powinien mieścić się pomiędzy 3 i 10 znakami']);

        $this->form->password = $v->validateFromRequest('password',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
            'min_length' => 3,
            'max_length' => 10,
            'validator_message' => 'Hasło powininno mieścić się pomiędzy 3 i 10 znakami']);

        $this->form->password1 = $v->validateFromRequest('password1',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Potwierdzenie hasła jest wymagane',
            'min_length' => 3,
            'max_length' => 10,
            'validator_message' => 'Hasło powininno mieścić się pomiędzy 3 i 10 znakami']);
    

        if ($this->form->password != $this->form->password1){
            Utils::addErrorMessage("Hasła nie są takie same");
        }

        if (! App::getMessages()->isError()){
            return true;
        }

        return false;
    }

    function action_add_user(){

        if($this->validate_user()){
            App::getDB()->insert('user',[
                'name' => $this->form->name,
                'surename' => $this->form->surename,
                'position' => $this->form->position,
                'phone_number' => $this->form->phonenumber,
                'login' => $this->form->login,
                'password' => $this->form->password,
            ]);

           $new_user_id = App::getDB()->id();
           $id_role = ParamUtils::getFromRequest("role");
           
            App::getDB()->insert('user_role',['id_user' => $new_user_id,'id_role' => $id_role]);
        }

        $this->action_generate_admin_view();

    }

    function action_remove_user(){

        $user = ParamUtils::getFromRequest('id');
        App::getDB()->delete('user_role',['id_user' => $user]);
        App::getDB()->delete('user',['id_user' => $user]);

        $this->action_generate_admin_view();
    }

    function action_generate_admin_view(){

        // get users from db
        $this->users = App::getDB()->select('user',[
            "[>]user_role" => ["id_user" => "id_user"],
            "[>]role" => ["user_role.id_role" => "id_role"]],
        ['user.id_user', 'name', 'surename','position', 'phone_number','login', 'role_name' ],[
            'role_name[!]' => 'admin'
        ]);

        $this->roles = App::getDB()->select('role',['id_role','role_name'],[
            'role_name[!]' => 'admin']);

        App::getSmarty()->assign('page_title',"Administracja");
        //Logo
        App::getSmarty()->assign('logo',"Administracja");
        App::getSmarty()->assign('logo_action',"generate_admin_view");
        //nav bar
       
        App::getSmarty()->assign('button2',"Wyloguj");
        App::getSmarty()->assign('button3',"Administracja");

        //users and roles from DB
        App::getSmarty()->assign('users',$this->users);
        App::getSmarty()->assign('roles',$this->roles);

        App::getSmarty()->assign('form',$this->form);
        App::getSmarty()->assign('messages', App::getMessages());

        App::getSmarty()->display("Admin_view.tpl");
    }
}