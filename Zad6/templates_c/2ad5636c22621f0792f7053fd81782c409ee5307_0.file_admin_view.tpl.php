<?php
/* Smarty version 5.4.1, created on 2024-11-20 22:06:10
  from 'file:admin_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673e4f428a1540_26260383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ad5636c22621f0792f7053fd81782c409ee5307' => 
    array (
      0 => 'admin_view.tpl',
      1 => 1732136733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673e4f428a1540_26260383 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad6\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1678594058673e4f42898964_07864014', 'header');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'header'} */
class Block_1678594058673e4f42898964_07864014 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Programy\\XAMPP\\htdocs\\Zad6\\app\\views';
?>


    <div>
		
			<div style='display: inline-block;'>
			<header id="header">
			<h1><?php echo $_smarty_tpl->getValue('page_header');?>
</h1>
			</header>
			</div>

			<div style='display: grid; float: right' >

                <a  href="<?php echo $_smarty_tpl->getValue('config')->action_url;?>
">Powrót do kalkulatora</a>            
				<a  href="<?php echo $_smarty_tpl->getValue('config')->action_url;?>
logout">Wyloguj</a>
                
			</div>
		
	</div>

<?php
}
}
/* {/block 'header'} */
}
