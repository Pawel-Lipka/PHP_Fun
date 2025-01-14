<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('generate_view'); #default action
App::getRouter()->setLoginRoute('generate_login_view'); #action to forward if no permissions

Utils::addRoute('generate_login_view', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('generate_view', 'PartsCtrl',['admin', 'storeKeeper', 'technician']);
Utils::addRoute('part_action', 'PartsCtrl',['admin','storeKeeper']);
Utils::addRoute('add_part', 'PartsCtrl',['admin','technician']);
Utils::addRoute('generate_admin_view','AdminCtrl',['admin']);
Utils::addRoute('add_user','AdminCtrl',['admin']);