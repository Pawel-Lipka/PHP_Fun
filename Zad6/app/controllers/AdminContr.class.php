<?php

namespace app\controllers;

class AdminContr{

public function action_generate_view_admin(){
        
        
        getSmarty()->assign('page_title','Kalkulator - stefa admina');
        getSmarty()->assign('page_header','Tajna strona admina');
      
        getSmarty()->display('admin_view.tpl');

    }
}