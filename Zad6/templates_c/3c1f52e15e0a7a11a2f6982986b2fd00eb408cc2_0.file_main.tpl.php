<?php
/* Smarty version 5.4.1, created on 2024-11-17 19:07:58
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673a30fe3cf815_32869987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c1f52e15e0a7a11a2f6982986b2fd00eb408cc2' => 
    array (
      0 => 'main.tpl',
      1 => 1731866865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673a30fe3cf815_32869987 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad6\\app\\views\\templates';
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_973633105673a30fe3c4da6_65362587', 'header');
?>

        
        		<div>
		   
            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_604691969673a30fe3c73e0_70135023', 'forms');
?>

            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_156954755673a30fe3ca200_64317205', 'results');
?>

		    
		</div>
		
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
		
        		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('config')->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'header'} */
class Block_973633105673a30fe3c4da6_65362587 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad6\\app\\views\\templates';
?>
 <?php
}
}
/* {/block 'header'} */
/* {block 'forms'} */
class Block_604691969673a30fe3c73e0_70135023 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad6\\app\\views\\templates';
?>
 <?php
}
}
/* {/block 'forms'} */
/* {block 'results'} */
class Block_156954755673a30fe3ca200_64317205 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad6\\app\\views\\templates';
?>
 <?php
}
}
/* {/block 'results'} */
}
