<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('change_page'); #default action
App::getRouter()->setLoginRoute('generate_login_view'); #action to forward if no permissions

Utils::addRoute('generate_login_view', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('change_page', 'PartsCtrl',['storekeeper', 'technician','manager']);
Utils::addRoute('part_action', 'PartsCtrl',['technician','storekeeper','manager']);
Utils::addRoute('add_part', 'PartsCtrl',['storekeeper','manager']);
Utils::addRoute('generate_admin_view','AdminCtrl',['admin']);
Utils::addRoute('add_user','AdminCtrl',['admin']);
Utils::addRoute('remove_user','AdminCtrl',['admin']);

Utils::addRoute('generate_part_table','PartsCtrl',['storekeeper', 'technician','manager']);


Utils::addRoute('clear_search', 'PartsCtrl',['storekeeper', 'technician','manager']);