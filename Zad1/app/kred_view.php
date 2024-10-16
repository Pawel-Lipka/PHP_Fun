<?php require_once dirname(__FILE__) .'/../config.php';?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<html>
    <head>
        <meta charset="utf-8" />
        <title>Kalkulator kredytowy</title>
    </head>
<body>
    <form action="<?php print(_APP_URL);?>/app/kred_contr.php" method="post"> 
        <label for="id_credit">Kwota pożyczki</label>
        <input id="id_credit" type="text" name="credit" value= "<?php if (isset($credit)) print($credit); ?>" />
        <br />
        <label for="id_percent">Oprocentowanie</label>
        <input id="id_percent" type="text" name="percent" value="<?php if (isset($percent)) print($percent); ?>" /> %
        <br />
        <label for="id_months">Liczba miesięcy</label>
        <input id="id_months" type="text" name="months" value="<?php if (isset($months)) print($months); ?>"/>
        <br />
        <input type="submit" value="Oblicz" />
    </form>	

<?php
//show errors if exist
if (isset($messages)) {
	
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