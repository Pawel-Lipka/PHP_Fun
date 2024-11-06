<?php
/* Smarty version 5.4.1, created on 2024-11-06 19:50:04
  from 'file:D:\Programy\XAMPP\htdocs\Zad4\app\../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672bba5cd2e817_03305796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1150cbe11c3ef3fed1da360b42828f68b98e63d' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\app\\../templates/main.tpl',
      1 => 1730919002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672bba5cd2e817_03305796 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title><?php echo $_smarty_tpl->getValue('page_title');?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('config')->app_url;?>
/assets/css/main.css" />
	</head>

	<body class="is-preload">
        
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_428957321672bba5cd282d4_63724906', 'header');
?>

        
        		<div>
		    <div style='display: inline-block; vertical-align: top'>
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_843648029672bba5cd2c368_47364447', 'calculator_form');
?>

		    </div>
		
		    <div style='display: inline-block; vertical-align: base-line; margin-left: 3em'>
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1059943594672bba5cd2cce5_75970087', 'results');
?>

		    </div>
		</div>
		
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1155922957672bba5cd2d5f6_95892846', 'footer');
?>
           
		
        		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('config')->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'header'} */
class Block_428957321672bba5cd282d4_63724906 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\templates';
?>
 <?php
}
}
/* {/block 'header'} */
/* {block 'calculator_form'} */
class Block_843648029672bba5cd2c368_47364447 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\templates';
?>
 <?php
}
}
/* {/block 'calculator_form'} */
/* {block 'results'} */
class Block_1059943594672bba5cd2cce5_75970087 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\templates';
?>
 <?php
}
}
/* {/block 'results'} */
/* {block 'footer'} */
class Block_1155922957672bba5cd2d5f6_95892846 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\templates';
?>
 <?php
}
}
/* {/block 'footer'} */
}
