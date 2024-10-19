<?php 

require_once dirname(__FILE__).'/../../config.php';

function get_login_params(&$form){

    $form['login'] = isset($_REQUEST ['login']) ? $_REQUEST ['login'] : null ;
    $form['pass'] = isset($_REQUEST ['pass']) ? $_REQUEST['pass'] : null;
}

function check_login_params(&$form,&$messages){
    
    //fields have to be initialized
    if (  ! ( isset($form['login']) && isset($form['pass']) ) ) {
        return false;
    }

    //login have to be filled
    if (empty($form['login'])) {
        $messages [] = 'Brak loginu';
    }

    //password have to be filled
    if (empty($form['pass'])) {
        $messages [] = 'Brak hasła';
    }

    if (count ( $messages ) > 0) return false;

    if ($form['login'] == "admin" && $form['pass'] == "admin") {
		session_start();
		$_SESSION['role'] = 'admin';
		return true;
	}
	if ($form['login'] == "user" && $form['pass'] == "user") {
		session_start();
		$_SESSION['role'] = 'user';
		return true;
	}
	
	$messages [] = 'Niepoprawny login lub hasło';
	return false; 

}

$form = array();
$messages = array();

get_login_params($form);

if (check_login_params($form,$messages)){
    header("Location: "._APP_URL);
}

else include _ROOT_PATH.'/app/security/login_view.php';


