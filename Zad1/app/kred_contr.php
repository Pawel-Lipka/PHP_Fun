<?php 
require_once dirname(__FILE__).'/../config.php';


$credit = $_REQUEST ['credit'];
$percent = $_REQUEST['percent'];
$months = $_REQUEST ['months'];


//fields have to be initialized
if ( ! (isset($credit) && isset($percent) && isset($months))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

//fields have to be numeric
if (! (is_numeric($credit) && is_numeric($percent) && is_numeric($months))) {
	$messages [] = 'Błędne wywołanie aplikacji. Parametry nie są liczbami';
}

// if no error yet
if (empty( $messages )){

    //credit and months have to be positive
    if ( $credit < 0 || $months < 0) {
        $messages [] = 'Błędne wywołanie aplikacji. Parametry nie mogą być ujemne';
    }

    // percents have to be in range 0 - 100
    if ( $percent < 0 || $percent > 100) {
        $messages [] = 'Błędne wywołanie aplikacji. Procent musi być z zakresu 0 - 100 %';
    }
}

// if no errors 
if (empty( $messages)){

    $credit = round(floatval($credit),2);
    $percent = round(floatval($percent),2);
    $months = intval($months);
    $installment = $credit / $months; //rata
    $result = round($installment * ($percent/100) + $installment,2);
    $total_result = round($result * $months,2);
}

include 'kred_view.php';