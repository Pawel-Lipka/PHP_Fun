<?php
/* Smarty version 4.3.4, created on 2025-03-15 17:24:51
  from 'D:\Programy\XAMPP\htdocs\Final_project\app\views\templates\Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d5a9d3ee8d13_44476270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f807160358a8fdc278c94e808d0c1df1fb5f270' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Final_project\\app\\views\\templates\\Main.tpl',
      1 => 1742055881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d5a9d3ee8d13_44476270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="http://localhost/Final_project/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="http://localhost/Final_project/assets/css/noscript.css" /></noscript>
	</head>

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">
            
			<header id="header">
			<a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['logo_action']->value;
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>$_prefixVariable1),$_smarty_tpl ) );?>
" class="logo"><?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
</a>
			</header>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150963229967d5a9d3ee4f60_00646545', 'nav');
?>

					
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62876337167d5a9d3ee6ab1_99505248', 'main');
?>


				<!-- Footer -->
					<footer id="footer">
						
						<section class="split contact">
						
							<section class="alt">
								<h3>Support:</h3>
								<p>Jan Kowalski<br />
								<a href="#">Phone: (000) 000-0000</a><br />
								<a href="#">Email: info@untitled.tld</a></p>
							</section>

						</section>

					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="../assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'nav'} */
class Block_150963229967d5a9d3ee4f60_00646545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_150963229967d5a9d3ee4f60_00646545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'nav'} */
/* {block 'main'} */
class Block_62876337167d5a9d3ee6ab1_99505248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_62876337167d5a9d3ee6ab1_99505248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
