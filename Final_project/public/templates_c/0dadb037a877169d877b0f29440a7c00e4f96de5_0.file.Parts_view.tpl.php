<?php
/* Smarty version 4.3.4, created on 2025-03-17 21:29:40
  from 'D:\Programy\XAMPP\htdocs\Final_project\app\views\Parts_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d886343ac4a7_36716175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dadb037a877169d877b0f29440a7c00e4f96de5' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Final_project\\app\\views\\Parts_view.tpl',
      1 => 1742243374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d886343ac4a7_36716175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88116554167d8863435d3e4_22159163', 'nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209121232367d8863436e175_85372067', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'nav'} */
class Block_88116554167d8863435d3e4_22159163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_88116554167d8863435d3e4_22159163',
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
class Block_209121232367d8863436e175_85372067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_209121232367d8863436e175_85372067',
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

    
    
        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_view'),$_smarty_tpl ) );?>
">
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
            <?php if ((isset($_smarty_tpl->tpl_vars['search_name']->value))) {?>
            <div style= "text-align: center">
                <a href= <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'clear_search'),$_smarty_tpl ) );?>
 class="button small" style="flex-direction: row; justify-content: center" >wyczyść wyszukiwanie</a>
            </div>
            <?php }?>

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
$__foreach_part_1_saved = $_smarty_tpl->tpl_vars['part'];
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

                                <?php if (\core\RoleUtils::inRole('manager') || \core\RoleUtils::inRole('storekeeper')) {?>
                                    <input type="submit" name = 'btnAdd' value="Przyjmij"/>
                                <?php }?>

                                <?php if (\core\RoleUtils::inRole('manager') || \core\RoleUtils::inRole('technician')) {?>
                                    <input type="submit" name = 'btnRmv' value="Pobierz"/>
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
$_smarty_tpl->tpl_vars['part'] = $__foreach_part_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        </section>	

        <!-- Scroll bar -->
            <footer>
                <div class="pagination">

                    <?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
                    <a href=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'change_page','p1'=>($_smarty_tpl->tpl_vars['previous_page']->value)),$_smarty_tpl ) );?>
 class="previous">Prev</a>
                    <?php }?>

                    <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['pages_qty']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages_qty']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['current_page']->value) {?>
                            <a href=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'change_page','p1'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl ) );?>
 class="page active"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
                        <?php } else { ?>    
                            <a href=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'change_page','p1'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl ) );?>
 class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
                        <?php }?>
                                            <?php }
}
?>

                    <?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['pages_qty']->value) {?>
                        <a href=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'change_page','p1'=>($_smarty_tpl->tpl_vars['next_page']->value)),$_smarty_tpl ) );?>
 class="next">Next</a>
                    <?php }?>
                </div>
            </footer>

    </div>

<?php
}
}
/* {/block 'main'} */
}
