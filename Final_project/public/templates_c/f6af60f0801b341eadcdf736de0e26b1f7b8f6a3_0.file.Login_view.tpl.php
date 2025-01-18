<?php
/* Smarty version 4.3.4, created on 2025-01-17 18:19:36
  from 'D:\Programy\XAMPP\htdocs\Final_project\app\views\Login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_678a9128c3fca6_89012803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6af60f0801b341eadcdf736de0e26b1f7b8f6a3' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Final_project\\app\\views\\Login_view.tpl',
      1 => 1737134334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678a9128c3fca6_89012803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_719832760678a9128b798f8_35959046', 'nav');
?>

    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1599444103678a9128bb80a5_92330918', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'nav'} */
class Block_719832760678a9128b798f8_35959046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_719832760678a9128b798f8_35959046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <nav id="nav">
    <ul class="links">
        <li class="active"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_login_view'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['button1']->value;?>
</a></li>
    </ul>
</nav>

<?php
}
}
/* {/block 'nav'} */
/* {block 'main'} */
class Block_1599444103678a9128bb80a5_92330918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1599444103678a9128bb80a5_92330918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div id="main">
    
   
   
    <?php if (!$_smarty_tpl->tpl_vars['messages']->value->isEmpty()) {?>
        <section>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <ul>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
            </ul>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </section>
    <?php }?>
   
    <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'login'),$_smarty_tpl ) );?>
">

        <div class="fields" style="justify-content: center">
            <section >
                <div class="field" >

                    <div>
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
                    

                        <label for="Password">Password</label>
                        <input type="password" name="pass" id="pass" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
"/>
                    </div>

                </div>
            </section>
        </div>
        
        <div style="text-align: center;"> 
            <input type="submit" value="Zaloguj" />
        </div>
        
    </form>
</div>

<?php
}
}
/* {/block 'main'} */
}
