<?php
/* Smarty version 5.4.1, created on 2024-11-10 14:59:10
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6730bc2e43cd15_89977658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8642de00e26b2ee3149f32a5d611a1fa2e61632e' => 
    array (
      0 => 'main.tpl',
      1 => 1730919002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6730bc2e43cd15_89977658 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad5\\app\\views\\templates';
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_15065983956730bc2e439119_61132933', 'header');
?>

        
        		<div>
		    <div style='display: inline-block; vertical-align: top'>
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14979624636730bc2e43a1c8_12895248', 'calculator_form');
?>

		    </div>
		
		    <div style='display: inline-block; vertical-align: base-line; margin-left: 3em'>
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_20144363236730bc2e43ae34_22586716', 'results');
?>

		    </div>
		</div>
		
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14372805676730bc2e43ba77_30360094', 'footer');
?>
           
		
        		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('config')->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'header'} */
class Block_15065983956730bc2e439119_61132933 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad5\\app\\views\\templates';
?>
 <?php
}
}
/* {/block 'header'} */
/* {block 'calculator_form'} */
class Block_14979624636730bc2e43a1c8_12895248 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad5\\app\\views\\templates';
?>
 <?php
}
}
/* {/block 'calculator_form'} */
/* {block 'results'} */
class Block_20144363236730bc2e43ae34_22586716 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad5\\app\\views\\templates';
?>
 <?php
}
}
/* {/block 'results'} */
/* {block 'footer'} */
class Block_14372805676730bc2e43ba77_30360094 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad5\\app\\views\\templates';
?>
 <?php
}
}
/* {/block 'footer'} */
}
