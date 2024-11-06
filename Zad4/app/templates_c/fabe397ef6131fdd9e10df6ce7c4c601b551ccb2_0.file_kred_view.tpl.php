<?php
/* Smarty version 5.4.1, created on 2024-10-29 18:49:01
  from 'file:D:\Programy\XAMPP\htdocs\Zad3/app/kred_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6721200d3471f2_79771256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fabe397ef6131fdd9e10df6ce7c4c601b551ccb2' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Zad3/app/kred_view.tpl',
      1 => 1730223510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6721200d3471f2_79771256 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14865292806721200d31c1b9_15499525', 'header');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_17533782696721200d3284c8_14906267', 'calculator_form');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6800366346721200d32fef7_21284852', 'results');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6436494156721200d346805_94425432', 'footer');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'header'} */
class Block_14865292806721200d31c1b9_15499525 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\app';
?>


	<header id="header">
		<h1><?php echo $_smarty_tpl->getValue('page_header');?>
</h1>
		<p><?php echo $_smarty_tpl->getValue('header_desc');?>
</p>
	</header>

<?php
}
}
/* {/block 'header'} */
/* {block 'calculator_form'} */
class Block_17533782696721200d3284c8_14906267 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\app';
?>

	
	<form id="signup-form"  method="post" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/kred_contr.php">
		<fieldset>
		
			<input id="id_credit" type="text" name="credit" placeholder="Wartość" value= "<?php echo $_smarty_tpl->getValue('credit');?>
" />
			<br>
			<input id="id_percent" type="text" name="percent" placeholder="Procent %" value= "<?php echo $_smarty_tpl->getValue('percent');?>
" />
			<br>
			<input id="id_months" type="text" name="months" placeholder="Miesiące" value= "<?php echo $_smarty_tpl->getValue('months');?>
" />
			<br>
			<input type="submit" value="Oblicz"/>
		
		</fieldset>
	</form>
	
<?php
}
}
/* {/block 'calculator_form'} */
/* {block 'results'} */
class Block_6800366346721200d32fef7_21284852 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\app';
?>

	
		<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>

		<h4 style="color: red"><ol>

		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
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
	
	<?php }?>

		<?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>

		<h4>
			Miesięczna rata wyniesie: <?php echo $_smarty_tpl->getValue('result');?>
 <br />
			Całkowita kwota do spłaty wyniesie: <?php echo $_smarty_tpl->getValue('total_result');?>

		</h4>

	<?php }?>	
<?php
}
}
/* {/block 'results'} */
/* {block 'footer'} */
class Block_6436494156721200d346805_94425432 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\app';
?>

	<footer id="footer">
		<ul class="icons">
			<li><a href="https://github.com/Pawel-Lipka" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
			<li><a href="https://www.linkedin.com/in/pawel-lipka/" class="icon brands fa-linkedin"><span class="label">LinkedIn</span></a></li>
			<li><a href="mailto:lipkap1@gmail.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
		</ul>
		<ul class="copyright">
			<li>&copy; Paweł Lipka</li><li>Credits: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</footer>
<?php
}
}
/* {/block 'footer'} */
}
