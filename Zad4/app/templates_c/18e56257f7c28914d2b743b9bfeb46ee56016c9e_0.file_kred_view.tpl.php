<?php
/* Smarty version 5.4.1, created on 2024-11-07 20:48:31
  from 'file:D:\Programy\XAMPP\htdocs\Zad4/app/KredCalc/kred_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672d198f51ea51_82751147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18e56257f7c28914d2b743b9bfeb46ee56016c9e' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Zad4/app/KredCalc/kred_view.tpl',
      1 => 1731008772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672d198f51ea51_82751147 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\app\\KredCalc';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1046435776672d198f4ed6f1_33483959', 'header');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1425026784672d198f4f1f01_64245551', 'calculator_form');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1755894373672d198f4f41f1_55549452', 'results');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_781806914672d198f51de81_94925448', 'footer');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'header'} */
class Block_1046435776672d198f4ed6f1_33483959 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\app\\KredCalc';
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
class Block_1425026784672d198f4f1f01_64245551 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\app\\KredCalc';
?>

	
	<form id="signup-form"  method="post" action="<?php echo $_smarty_tpl->getValue('config')->action_url;?>
calcCompute">
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
	
<?php
}
}
/* {/block 'calculator_form'} */
/* {block 'results'} */
class Block_1755894373672d198f4f41f1_55549452 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\app\\KredCalc';
?>

	
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
<?php
}
}
/* {/block 'results'} */
/* {block 'footer'} */
class Block_781806914672d198f51de81_94925448 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\app\\KredCalc';
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