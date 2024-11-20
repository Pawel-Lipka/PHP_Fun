<?php
/* Smarty version 5.4.1, created on 2024-11-17 18:57:51
  from 'file:login_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673a2e9fbfb233_03696726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '658792dc4f7371c146d3ffdc23077e9aaa598dcc' => 
    array (
      0 => 'login_view.tpl',
      1 => 1731866251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673a2e9fbfb233_03696726 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad6\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_676036930673a2e9fbcdf30_83029394', 'header');
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1410386434673a2e9fbd64f2_54737234', 'forms');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1877584881673a2e9fbdab61_23825424', 'results');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'header'} */
class Block_676036930673a2e9fbcdf30_83029394 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad6\\app\\views';
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
/* {block 'forms'} */
class Block_1410386434673a2e9fbd64f2_54737234 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad6\\app\\views';
?>

	
<div style='display: inline-block; vertical-align: top'>
	<form id="login-form"  method="post" action="<?php echo $_smarty_tpl->getValue('config')->action_url;?>
login">
		<fieldset>
		
			<input id="login" type="text" name="login" placeholder="Login" value= "<?php echo $_smarty_tpl->getValue('form')->login;?>
" />
			<br>
			<input id="pass" type="password" name="pass" placeholder="Hasło" value= "" />
			<br>
			<input type="submit" value="Zaloguj"/>
		
		</fieldset>
	</form>
</div>	
<?php
}
}
/* {/block 'forms'} */
/* {block 'results'} */
class Block_1877584881673a2e9fbdab61_23825424 extends \Smarty\Runtime\Block
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
</div>	
<?php
}
}
/* {/block 'results'} */
}
