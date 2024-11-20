<?php

use Smarty\Smarty;


require_once dirname(__FILE__).'/core/Config.class.php';
$config = new Config();
include dirname(__FILE__).'/config.php';

function &getConf(){ global $config; return $config;}


require_once getConf()->root_path.'/core/Messages.class.php';
$msgs = new core\Messages;

function &getMessages(){ global $msgs; return $msgs;}

$smarty = null;

function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		//stwórz Smarty i przypisz konfigurację i messages
		include_once getConf()->root_path.'/libs/Smarty/libs/Smarty.class.php';
		$smarty = new Smarty();	
		//przypisz konfigurację i messages
		$smarty->assign('config',getConf());
		$smarty->assign('messages',getMessages());
		//zdefiniuj lokalizację widoków (aby nie podawać ścieżek przy ich załączaniu)
		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app/views',
			'two' => getConf()->root_path.'/app/views/templates'
		));
	}
	return $smarty;
}

require_once 'core/ClassLoader.class.php'; //załaduj i stwórz loader klas
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

require_once 'core/Router.class.php'; //załaduj i stwórz router
$router = new core\Router();
function &getRouter(): core\Router {
    global $router; return $router;
}

require_once getConf()->root_path.'/core/functions.php';
session_start(); //uruchom lub kontynuuj sesję
$config->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array(); //wczytaj role

$router->setAction( getFromRequest('action') );

