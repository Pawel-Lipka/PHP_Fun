<?php
/* Smarty version 5.4.1, created on 2024-10-29 18:36:14
  from 'file:D:\Programy\XAMPP\htdocs\Zad3\app\../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67211d0e621767_14531401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4afb850c682abed71e241268d8da55bc2035767f' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\app\\../templates/main.tpl',
      1 => 1730223348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67211d0e621767_14531401 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title><?php echo $_smarty_tpl->getValue('page_title');?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/main.css" />
	</head>

	<body class="is-preload">
        
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_47741845167211d0e61b346_53890341', 'header');
?>

        
        		<div>
		    <div style='display: inline-block; vertical-align: top'>
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_111286464867211d0e61f617_56839585', 'calculator_form');
?>

		    </div>
		
		    <div style='display: inline-block; vertical-align: base-line; margin-left: 3em'>
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_52787893367211d0e6200b4_12311079', 'results');
?>

		    </div>
		</div>
		
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_185536847367211d0e620ad9_29316973', 'footer');
?>
           
		
        		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'header'} */
class Block_47741845167211d0e61b346_53890341 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\templates';
?>
 <?php
}
}
/* {/block 'header'} */
/* {block 'calculator_form'} */
class Block_111286464867211d0e61f617_56839585 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\templates';
?>
 <?php
}
}
/* {/block 'calculator_form'} */
/* {block 'results'} */
class Block_52787893367211d0e6200b4_12311079 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\templates';
?>
 <?php
}
}
/* {/block 'results'} */
/* {block 'footer'} */
class Block_185536847367211d0e620ad9_29316973 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\templates';
?>
 <?php
}
}
/* {/block 'footer'} */
}
