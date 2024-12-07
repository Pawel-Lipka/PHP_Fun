<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('generate_login_view'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('generate_login_view', 'LoginCtrl');
Utils::addRoute('generate_view', 'PartsCtrl');
Utils::addRoute('add_part', 'PartsCtrl');
//Utils::addRoute('action_name', 'controller_class_name');