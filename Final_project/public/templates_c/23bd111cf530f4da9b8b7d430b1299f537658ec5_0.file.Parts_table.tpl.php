<?php
/* Smarty version 4.3.4, created on 2025-03-21 20:29:57
  from 'D:\Programy\XAMPP\htdocs\Final_project\app\views\Parts_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67ddbe359a92b2_48881962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23bd111cf530f4da9b8b7d430b1299f537658ec5' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Final_project\\app\\views\\Parts_table.tpl',
      1 => 1742585359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ddbe359a92b2_48881962 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['search_name']->value))) {?>

    <div id = "clear_search_btn" style= "text-align: center">
        <a href= <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'clear_search'),$_smarty_tpl ) );?>
 class="button small" style="flex-direction: row; justify-content: center" >wyczyść wyszukiwanie</a>
    </div>
    <br>
<?php }?>

<table  class = "alt">
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
$_smarty_tpl->tpl_vars['part'] = $__foreach_part_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>

          <!-- Scroll bar -->
            
          <div class="pagination" style="display:flex; justify-content: center">

          <?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
          <a onclick="ajaxReloadElement('Parts_table', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_part_table','p1'=>$_smarty_tpl->tpl_vars['previous_page']->value),$_smarty_tpl ) );?>
' ,interval=0)" class="previous">Prev</a>
          <?php }?>

          <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['pages_qty']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages_qty']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
              
              <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['current_page']->value) {?>
                  <a onclick = "ajaxReloadElement('Parts_table', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_part_table','p1'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl ) );?>
')" class="page active"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
              <?php } else { ?>    
                  <a onclick = "ajaxReloadElement('Parts_table', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_part_table','p1'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl ) );?>
')" class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
              <?php }?>
                        <?php }
}
?>

          <?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['pages_qty']->value) {?>
              <a onclick = "ajaxReloadElement('Parts_table', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_part_table','p1'=>$_smarty_tpl->tpl_vars['next_page']->value),$_smarty_tpl ) );?>
')" class="next">Next</a>
          <?php }?>
      </div><?php }
}
