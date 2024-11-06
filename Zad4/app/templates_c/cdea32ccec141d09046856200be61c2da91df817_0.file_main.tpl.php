<?php
/* Smarty version 5.4.1, created on 2024-11-06 19:50:08
  from 'file:D:\Programy\XAMPP\htdocs\Zad4\app\../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672bba609fb5e8_86147493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdea32ccec141d09046856200be61c2da91df817' => 
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
function content_672bba609fb5e8_86147493 (\Smarty\Template $_smarty_tpl) {
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2089668937672bba609f7a76_39349089', 'header');
?>

        
        		<div>
		    <div style='display: inline-block; vertical-align: top'>
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_585788760672bba609f9130_23050115', 'calculator_form');
?>

		    </div>
		
		    <div style='display: inline-block; vertical-align: base-line; margin-left: 3em'>
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_557484754672bba609f9be3_14790012', 'results');
?>

		    </div>
		</div>
		
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1650732658672bba609fa630_10320018', 'footer');
?>
           
		
        		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('config')->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'header'} */
class Block_2089668937672bba609f7a76_39349089 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\templates';
?>
 <?php
}
}
/* {/block 'header'} */
/* {block 'calculator_form'} */
class Block_585788760672bba609f9130_23050115 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\templates';
?>
 <?php
}
}
/* {/block 'calculator_form'} */
/* {block 'results'} */
class Block_557484754672bba609f9be3_14790012 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\templates';
?>
 <?php
}
}
/* {/block 'results'} */
/* {block 'footer'} */
class Block_1650732658672bba609fa630_10320018 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad4\\templates';
?>
 <?php
}
}
/* {/block 'footer'} */
}
