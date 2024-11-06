<?php 
require_once dirname(__FILE__).'/../config.php';
require_once $config->root_path.'/app/KredContr.class.php';

$ctrl = new KredContr();
$ctrl->calculate();
