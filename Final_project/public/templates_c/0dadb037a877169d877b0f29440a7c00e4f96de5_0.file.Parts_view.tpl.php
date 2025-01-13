<?php
/* Smarty version 4.3.4, created on 2025-01-13 22:24:36
  from 'D:\Programy\XAMPP\htdocs\Final_project\app\views\Parts_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_678584940f3442_90377403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dadb037a877169d877b0f29440a7c00e4f96de5' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Final_project\\app\\views\\Parts_view.tpl',
      1 => 1736803442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678584940f3442_90377403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1240647079678584940c0946_89070840', 'nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_371563445678584940cddf6_65841658', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'nav'} */
class Block_1240647079678584940c0946_89070840 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_1240647079678584940c0946_89070840',
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

        </ul>
    </nav>

<?php
}
}
/* {/block 'nav'} */
/* {block 'main'} */
class Block_371563445678584940cddf6_65841658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_371563445678584940cddf6_65841658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    

    <div id="main">

    <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'add_part'),$_smarty_tpl ) );?>
">

        <div class="fields" style="flex-direction: row; justify-content: center">
            <section >
                <div class="field">
                    <label for="code">Kod</label>
                    <input type="text" name="code" id="code" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->code;?>
"/>
                </div>
            </section>

            <section >
                <div class="field">
                    <label for="desc">Nazwa</label>
                    <input type="text" name="desc" id="desc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->desc;?>
"/>
                </div>
            </section>

            <section >
                <div class="field">
                    <label for="qty">Ilość</label>
                    <input type="text" name="qty" id="qty" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->qty;?>
"/>
                </div>
            </section>
            
        </div>
        
        <div style="text-align: center;"> 
            <input type="submit" value="Dodaj część" />
        </div>
        
    </form>

    <section>		
        <table class = "alt">
            <thead>
                    <tr>
                    <th>#</th>
                    <th>Kod</th>
                    <th>Nazwa</th>
                    <th>Ilość</th>
                    <th>Opcje</th>
                </tr>
            </thead>
               
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spare_parts']->value, 'part');
$_smarty_tpl->tpl_vars['part']->iteration = 0;
$_smarty_tpl->tpl_vars['part']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['part']->value) {
$_smarty_tpl->tpl_vars['part']->do_else = false;
$_smarty_tpl->tpl_vars['part']->iteration++;
$__foreach_part_0_saved = $_smarty_tpl->tpl_vars['part'];
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['part']->iteration;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['part']->value["sp_code"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['part']->value["sp_description"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['part']->value["quantity"];?>
</td>

                    
                    <td>
                        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'part_action'),$_smarty_tpl ) );?>
" margin = 0>
                        
                        <div class="fields" style="flex-direction: row; justify-content: center;">
                            <section>
                                <div class = "field" >
                                <input type="text" name="qty" id="qty" placeholder="ilość" size="5"/>
                                </div>
                            </section>

                            <section>
                                <div class = "field">

                                <?php if (\core\RoleUtils::inRole('admin') || \core\RoleUtils::inRole('storeKeeper')) {?>
                                    <input type="submit" name = 'btnAdd' value="Dodaj"/>
                                <?php }?>

                                <?php if (\core\RoleUtils::inRole('admin') || \core\RoleUtils::inRole('technician')) {?>
                                    <input type="submit" name = 'btnRmv' value="Usuń"/>
                                <?php }?>

                                </div>
                            </section>
                        </div>
                        
                        <input type="hidden" name="code" value=<?php echo $_smarty_tpl->tpl_vars['part']->value["sp_code"];?>
>
                        <input type="hidden" name="desc" value=<?php echo $_smarty_tpl->tpl_vars['part']->value["sp_description"];?>
>
                       
                        </form>
                    </td>
                    

                </tr>
            <?php
$_smarty_tpl->tpl_vars['part'] = $__foreach_part_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </section>	

        <!-- Scroll bar -->
            <footer>
                <div class="pagination">
                    <!--<a href="#" class="previous">Prev</a>-->
                    <a href="#" class="page active">1</a>
                    <a href="#" class="page">2</a>
                    <a href="#" class="page">3</a>
                    <span class="extra">&hellip;</span>
                    <a href="#" class="page">8</a>
                    <a href="#" class="page">9</a>
                    <a href="#" class="page">10</a>
                    <a href="#" class="next">Next</a>
                </div>
            </footer>

    </div>

<?php
}
}
/* {/block 'main'} */
}
