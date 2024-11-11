<?php 

use app\controllers\KredContr;

require_once 'init.php';

switch ($action){
    default: 
            $ctrl = new KredContr();
            $ctrl->generate_View();
    break;

    case "calcCompute" :
        $ctrl = new KredContr();
        $ctrl->calculate();
    break;
}
