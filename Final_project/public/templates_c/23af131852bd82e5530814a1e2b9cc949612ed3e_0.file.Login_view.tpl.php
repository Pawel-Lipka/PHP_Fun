<?php
/* Smarty version 4.3.4, created on 2024-12-07 14:41:41
  from 'D:\Programy\XAMPP\htdocs\final\app\views\Login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67545095d9d1c5_30221750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23af131852bd82e5530814a1e2b9cc949612ed3e' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\final\\app\\views\\Login_view.tpl',
      1 => 1733578898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67545095d9d1c5_30221750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93736257867545095d89130_92994285', 'nav');
?>

    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75965416967545095d96952_53739501', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'nav'} */
class Block_93736257867545095d89130_92994285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_93736257867545095d89130_92994285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <nav id="nav">
    <ul class="links">
        <li class="active"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_login_view'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['button1']->value;?>
</a></li>
        <
    </ul>
</nav>

<?php
}
}
/* {/block 'nav'} */
/* {block 'main'} */
class Block_75965416967545095d96952_53739501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_75965416967545095d96952_53739501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div id="main">

    <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_view'),$_smarty_tpl ) );?>
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
