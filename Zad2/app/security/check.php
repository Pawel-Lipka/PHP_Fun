<?php
session_start();

//pobranie roli
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

//jeśli brak parametru (niezalogowanie) to idź na stronę logowania
if ( empty($role) ){
	include _ROOT_PATH.'/app/security/login_controler.php';
	//zatrzymaj dalsze przetwarzanie skryptów
	exit(); 
}