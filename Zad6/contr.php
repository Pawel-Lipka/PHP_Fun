<?php 


require_once 'init.php';

getRouter()->setDefaultRoute('generate_view');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('generate_view','KredContr',['user','admin']);
getRouter()->addRoute('calculate','KredContr',['user','admin']);
getRouter()->addRoute('login','LoginContr');
getRouter()->addRoute('logout','LoginContr',['user','admin']);
getRouter()->addRoute('generate_view_admin','AdminContr',['admin']);

getRouter()->go();
