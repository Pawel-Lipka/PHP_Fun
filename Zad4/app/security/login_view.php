<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <title>Kalkulator kredytowy</title>
    </head>

    <body>
        <div style = "width:90%; margin: 2em auto;">

            <form action="<?php print(_APP_URL);?>/app/security/login_controler.php" method="post" class="pure-form pure-form-stacked">

                <legend>Zaloguj</legend>
                <fieldset>

                    <label for="id_login">Login</label>
                    <input id="id_login" type="text" name="login" value= "<?php if (isset($login)) print($login); ?>" />
                    
                    <label for="id_pass">Hasło</label>
                    <input id="id_pass" type="text" name="pass" value= "<?php if (isset($pass)) print($pass); ?>"/> 
                    
                    <input type="submit" value="Zaloguj" class="pure-button pure-button-primary" />

                </fieldset>
            </form>	
        </div>

    <?php
    //show errors if exist
    if (count($messages) > 0) {
        
            echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
            foreach ( $messages as $msg ) {
                echo '<li>'.$msg.'</li>';
            }
            echo '</ol>';
    }
    ?>
