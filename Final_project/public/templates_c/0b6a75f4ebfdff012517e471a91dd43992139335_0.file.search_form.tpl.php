<?php
/* Smarty version 4.3.4, created on 2025-03-21 19:39:27
  from 'D:\Programy\XAMPP\htdocs\Final_project\app\views\search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67ddb25f7095c7_56634084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b6a75f4ebfdff012517e471a91dd43992139335' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Final_project\\app\\views\\search_form.tpl',
      1 => 1742582349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ddb25f7095c7_56634084 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id = "search_form" method="post" onsubmit="ajaxPostForm('search_form','<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_part_table'),$_smarty_tpl ) );?>
','Parts_table');ajaxReloadElement('search_form','<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'show_search_form'),$_smarty_tpl ) );?>
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
