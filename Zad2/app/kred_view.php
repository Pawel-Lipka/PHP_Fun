<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <title>Kalkulator kredytowy</title>
    </head>

    <body>

        <div style="width:90%; margin: 2em auto;">

            <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
       
        

        <?php if ( $_SESSION['role'] == 'admin'){ ?>

            <a href="<?php print(_APP_ROOT); ?>/app/tajna_strona_admina.php" class="pure-button pure-button-active">Strona Admina</a>
       
       <?php } ?>
       </div>
        
        <div style = "width:90%; margin: 2em auto;">

            <form action="<?php print(_APP_URL);?>/app/kred_contr.php" method="post" class="pure-form pure-form-stacked">

                <legend>Kalkulator</legend>
                <fieldset>

                    <label for="id_credit">Kwota pożyczki</label>
                    <input id="id_credit" type="text" name="credit" value= "<?php if (isset($credit)) print($credit); ?>" />
                    
                    <label for="id_percent">Oprocentowanie %</label>
                    <input id="id_percent" type="text" name="percent" value="<?php if (isset($percent)) print($percent); ?> "/> 
                    
                    <label for="id_months">Liczba miesięcy</label>
                    <input id="id_months" type="text" name="months" value="<?php if (isset($months)) print($months); ?>"/>
                    
                    <input type="submit" value="Oblicz" class="pure-button pure-button-primary" />

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

    <?php 
    // if no errors show results
    if (isset($result)){ ?>
        <div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
        <?php echo 'Miesięczna rata wyniesie: '.$result; ?>
        <br />
        <?php echo 'Całkowita kwota do spłaty wyniesie:'. $total_result ?>
        </div>
        <?php } ?>
  
    </body>
</html>