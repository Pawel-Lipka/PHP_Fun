<?php
/* Smarty version 4.3.4, created on 2025-03-21 19:57:40
  from 'D:\Programy\XAMPP\htdocs\Final_project\app\views\Parts_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67ddb6a44f66a2_74758761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dadb037a877169d877b0f29440a7c00e4f96de5' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Final_project\\app\\views\\Parts_view.tpl',
      1 => 1742583437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Parts_table.tpl' => 1,
  ),
),false)) {
function content_67ddb6a44f66a2_74758761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213135104667ddb6a44ca396_59720814', 'nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112704931667ddb6a44e0686_95608925', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'nav'} */
class Block_213135104667ddb6a44ca396_59720814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_213135104667ddb6a44ca396_59720814',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <nav id="nav">
        <ul class="links">
            <li class="active"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_view'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['button1']->value;?>
</a></li>
            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'logout'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['button2']->value;?>
</a></li>
            <?php if (\core\RoleUtils::inRole('admin')) {?>
            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_admin_view'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['button3']->value;?>
</a></li>
            <?php }?>

        </ul>
    </nav>

<?php
}
}
/* {/block 'nav'} */
/* {block 'main'} */
class Block_112704931667ddb6a44e0686_95608925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_112704931667ddb6a44e0686_95608925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    
    <div id="main">
        <?php if (!\core\RoleUtils::inRole('technician')) {?>
            <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'add_part'),$_smarty_tpl ) );?>
">

                <div class="fields" style="flex-direction: row; justify-content: center">
                    <section >
                        <div class="field">
                            <label for="code">Kod</label>
                            <input type="text" name="code" id="code" />
                        </div>
                    </section>

                    <section >
                        <div class="field">
                            <label for="desc">Nazwa</label>
                            <input type="text" name="desc" id="desc" />
                        </div>
                    </section>

                    <section >
                        <div class="field">
                            <label for="qty">Ilość</label>
                            <input type="text" name="qty" id="qty" />
                        </div>
                    </section>
                    
                </div>
                
                <div style="text-align: center;"> 
                    <input type="submit" value="Dodaj część" />
                </div>
                
            </form>
        <?php }?>

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
 
    <form id = "search_form" method="post" onsubmit="ajaxPostForm('search_form','<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_part_table'),$_smarty_tpl ) );?>
','Parts_table');return false;">
    
    <div class="fields" style="flex-direction: row; justify-content: center">   
    
    <section >
        <div class="field">
            <input type="text" name="search_code" id="search_code" placeholder="Kod"/>
        </div>
    </section>

    <section >
        <div class="field">
            <input type="text" name="search_name" id="search_name" placeholder="Nazwa"/>
        </div>
    </section>
    
    <section>
        <div class="field">
            <input type="submit" name="search" value="Szukaj" />
        </div class="field">
    </section>
    
</div>

</form> 


        
        <section id = "Parts_table">		
            <?php $_smarty_tpl->_subTemplateRender("file:Parts_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
        </section>	
    </div>

<?php
}
}
/* {/block 'main'} */
}
