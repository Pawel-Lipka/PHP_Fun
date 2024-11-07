<?php 
require_once dirname(__FILE__).'/../config.php';
//

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";

switch ($action){
    default: 
            require_once $config->root_path.'/app//KredCalc/KredContr.class.php';
            $ctrl = new KredContr();
            $ctrl->generate_View();
    break;

    case "calcCompute" :
        require_once $config->root_path.'/app//KredCalc/KredContr.class.php';
        $ctrl = new KredContr();
        $ctrl->calculate();
    break;
}

//$ctrl = new KredContr();
//$ctrl->calculate();
