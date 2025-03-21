<?php
/* Smarty version 4.3.4, created on 2025-03-21 19:23:38
  from 'D:\Programy\XAMPP\htdocs\Final_project\app\views\clear_btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67ddaeaa69a016_54806927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cee37bdc1b4352779079d04006a867c787b92592' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Final_project\\app\\views\\clear_btn.tpl',
      1 => 1742581381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ddaeaa69a016_54806927 (Smarty_Internal_Template $_smarty_tpl) {
?><form id = "search_form" method="post" onsubmit="ajaxPostForm('search_form','<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_part_table'),$_smarty_tpl ) );?>
','Parts_table');ajaxReloadElement('search_form','<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'show_clear_btn'),$_smarty_tpl ) );?>
');return false;">
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

    <div id = "clear_search_btn" style= "text-align: center">
        <a href= <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'clear_search'),$_smarty_tpl ) );?>
 class="button small" style="flex-direction: row; justify-content: center" >wyczyść wyszukiwanie</a>
    </div>
<?php }?>
</form><?php }
}
