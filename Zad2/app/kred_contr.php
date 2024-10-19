<?php 
require_once dirname(__FILE__).'/../config.php';

// stop if user not log in
include _ROOT_PATH.'/app/security/check.php';

function get_params(&$credit, &$percent, &$months){

    $credit = isset($_REQUEST ['credit']) ? $_REQUEST ['credit'] : null ;
    $percent = isset($_REQUEST ['percent']) ? $_REQUEST['percent'] : null;
    $months = isset($_REQUEST ['months']) ? $_REQUEST ['months'] : null;
}

function check_params(&$credit, &$percent, &$months, &$messages){
    
    //fields have to be initialized
    if (  is_null($credit) || is_null($percent) || is_null($months)) {
        return false;
    }

    //fields have to be numeric
    if (! (is_numeric($credit) && is_numeric($percent) && is_numeric($months))) {
        $messages [] = 'Błędne wywołanie aplikacji. Parametry nie są liczbami';
    }

    // if no error yet
    if (empty( $messages )){

        //credit and months have to be higher then 0
        if ( $credit < 1 || $months < 1) {
            $messages [] = 'Błędne wywołanie aplikacji. Parametry muszą być większe od 0';
        }

        // percents have to be in range 0 - 100
        if ( $percent < 0 || $percent > 100) {
            $messages [] = 'Błędne wywołanie aplikacji. Procent musi być z zakresu 0 - 100 %';
        }
    }

    if(count($messages) > 0) return false;
    else return true;
}

function calculate(&$credit, &$percent, &$months, &$result, &$total_result){

    $credit = round(floatval($credit),2);
    $percent = round(floatval($percent),2);
    $months = intval($months);
    $installment = $credit / $months; //rata
    $result = round($installment * ($percent/100) + $installment,2);
    $total_result = round($result * $months,2);
}

$credit = null;
$percent = null;
$months = null;
$result = null;
$total_result = null;
$messages = array();


get_params($credit, $percent, $months);
if ( check_params($credit, $percent, $months, $messages) ){
    calculate($credit, $percent, $months, $result, $total_result);
}
include 'kred_view.php';