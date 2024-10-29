<?php
/* Smarty version 5.4.1, created on 2024-10-29 18:36:10
  from 'file:D:\Programy\XAMPP\htdocs\Zad3\app\../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67211d0a17ca93_19170662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '190a1c5c8d0c2346703b8f89e2600f08731f43dd' => 
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
function content_67211d0a17ca93_19170662 (\Smarty\Template $_smarty_tpl) {
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13203063367211d0a177915_49756314', 'header');
?>

        
        		<div>
		    <div style='display: inline-block; vertical-align: top'>
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_200579673467211d0a178ae9_67625670', 'calculator_form');
?>

		    </div>
		
		    <div style='display: inline-block; vertical-align: base-line; margin-left: 3em'>
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_112334048267211d0a17a4b7_13602797', 'results');
?>

		    </div>
		</div>
		
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_33006742767211d0a17b6e8_80428650', 'footer');
?>
           
		
        		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'header'} */
class Block_13203063367211d0a177915_49756314 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\templates';
?>
 <?php
}
}
/* {/block 'header'} */
/* {block 'calculator_form'} */
class Block_200579673467211d0a178ae9_67625670 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\templates';
?>
 <?php
}
}
/* {/block 'calculator_form'} */
/* {block 'results'} */
class Block_112334048267211d0a17a4b7_13602797 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\templates';
?>
 <?php
}
}
/* {/block 'results'} */
/* {block 'footer'} */
class Block_33006742767211d0a17b6e8_80428650 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad3\\templates';
?>
 <?php
}
}
/* {/block 'footer'} */
}
