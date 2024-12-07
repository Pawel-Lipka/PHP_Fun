<?php
/* Smarty version 4.3.4, created on 2024-12-07 14:42:59
  from 'D:\Programy\XAMPP\htdocs\final\app\views\Parts_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_675450e379b474_60008117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfc5816a4bdcfc6d1edd6c1ba70c32c4b3b0e79d' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\final\\app\\views\\Parts_view.tpl',
      1 => 1733578975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675450e379b474_60008117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210856528675450e3778144_83480117', 'nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1430465841675450e3790f40_99312823', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'nav'} */
class Block_210856528675450e3778144_83480117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_210856528675450e3778144_83480117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <nav id="nav">
        <ul class="links">
            <li class="active"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_view'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['button1']->value;?>
</a></li>
            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_login_view'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['button2']->value;?>
</a></li>

        </ul>
    </nav>

<?php
}
}
/* {/block 'nav'} */
/* {block 'main'} */
class Block_1430465841675450e3790f40_99312823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1430465841675450e3790f40_99312823',
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
                <tr>
                    <td>1</td>
                    <td>Honda</td>
                    <td>Accc</td>
                    <td>2009</td>
                    <td><button>Opcja</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Toyota</td>
                    <td>Camry</td>
                    <td>2012</td>
                    <td><button>Opcja</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Hyundai</td>
                    <td>Elantra</td>
                    <td>2010</td>
                    <td><button>Opcja</button></td>
                </tr>
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
