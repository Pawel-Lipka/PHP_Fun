<?php

require_once dirname(__FILE__).'/../config.php';
//ochrona widoku
include $config->root_path.'/app/security/check.php';
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Chroniona strona</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print($config->app_root); ?>/app/kred_contr.php" class="pure-button">Powrót do kalkulatora</a>
	<a href="<?php print($config->app_root); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
	<p> <h5><b>To jest bardzo tajna strona administracyjna<b></h5></p>
</div>	

</body>
</html>
