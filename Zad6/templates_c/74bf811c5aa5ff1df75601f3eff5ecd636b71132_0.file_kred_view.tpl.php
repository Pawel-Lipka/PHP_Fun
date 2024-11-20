<?php
/* Smarty version 5.4.1, created on 2024-11-20 22:05:40
  from 'file:kred_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673e4f24bfc451_27848291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74bf811c5aa5ff1df75601f3eff5ecd636b71132' => 
    array (
      0 => 'kred_view.tpl',
      1 => 1732136672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673e4f24bfc451_27848291 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad6\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1172500807673e4f2461be00_48964748', 'header');
?>




<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1062786705673e4f2489fb78_99512282', 'forms');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1743047706673e4f248a9082_54728870', 'results');
?>



<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'header'} */
class Block_1172500807673e4f2461be00_48964748 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad6\\app\\views';
?>

	
	<div>
		
			<div style='display: inline-block;'>
			<header id="header">
			<h1><?php echo $_smarty_tpl->getValue('page_header');?>
</h1>
			<p><?php echo $_smarty_tpl->getValue('header_desc');?>
</p>
			</header>
			</div>

			<div style='display: grid; float: right' >

				<?php if ($_smarty_tpl->getValue('show_secret_buttons')) {?>
					<a  href="<?php echo $_smarty_tpl->getValue('config')->action_url;?>
generate_view_admin">Tajna strona admina  </a>
				<?php }?>

				<a  href="<?php echo $_smarty_tpl->getValue('config')->action_url;?>
logout">  Wyloguj</a>
			
			</div>
		
		
	</div>
	
<?php
}
}
/* {/block 'header'} */
/* {block 'forms'} */
class Block_1062786705673e4f2489fb78_99512282 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad6\\app\\views';
?>

	
<div style='display: inline-block; vertical-align: top'>
	<form id="signup-form"  method="post" action="<?php echo $_smarty_tpl->getValue('config')->action_url;?>
calculate">
		<fieldset>
		
			<input id="id_credit" type="text" name="credit" placeholder="Wartość" value= "<?php echo $_smarty_tpl->getValue('form')->credit;?>
" />
			<br>
			<input id="id_percent" type="text" name="percent" placeholder="Procent %" value= "<?php echo $_smarty_tpl->getValue('form')->percent;?>
" />
			<br>
			<input id="id_months" type="text" name="months" placeholder="Miesiące" value= "<?php echo $_smarty_tpl->getValue('form')->months;?>
" />
			<br>
			<input type="submit" value="Oblicz"/>
		
		</fieldset>
	</form>
</div>	
<?php
}
}
/* {/block 'forms'} */
/* {block 'results'} */
class Block_1743047706673e4f248a9082_54728870 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad6\\app\\views';
?>

<div style='display: inline-block; vertical-align: base-line; margin-left: 3em'>	
		<?php if (!$_smarty_tpl->getValue('messages')->is_empty()) {?>

		<?php if ($_smarty_tpl->getValue('messages')->is_error()) {?>
			<h4 style="color: red"><ol>

			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages')->get_errors(), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>

				<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>

			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

			</ol><h4>
		

		<?php } else { ?>
			<h4 style="color: rgb(69, 159, 9)"><ol>

			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages')->get_infos(), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>

				<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>

			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

			</ol><h4>
		<?php }?>
			
	<?php }?>

		<?php if ((null !== ($_smarty_tpl->getValue('results')->monthly ?? null))) {?>
	

		<h4>
			Miesięczna rata wyniesie: <?php echo sprintf("%.2f",$_smarty_tpl->getValue('results')->monthly);?>
 <br />
			Całkowita kwota do spłaty wyniesie: <?php echo sprintf("%.2f",$_smarty_tpl->getValue('results')->total);?>

		</h4>

	<?php }?>
</div>	
<?php
}
}
/* {/block 'results'} */
}
