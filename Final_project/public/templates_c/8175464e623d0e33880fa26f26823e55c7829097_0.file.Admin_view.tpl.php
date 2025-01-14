<?php
/* Smarty version 4.3.4, created on 2025-01-14 20:01:29
  from 'D:\Programy\XAMPP\htdocs\Final_project\app\views\Admin_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6786b489071ec1_48425116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8175464e623d0e33880fa26f26823e55c7829097' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Final_project\\app\\views\\Admin_view.tpl',
      1 => 1736881279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6786b489071ec1_48425116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_527782486786b488f16529_20638184', 'nav');
?>

    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14303754456786b488f30630_90814078', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'nav'} */
class Block_527782486786b488f16529_20638184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_527782486786b488f16529_20638184',
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
        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_admin_view'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['button3']->value;?>
</a></li>
    </ul>
</nav>

<?php
}
}
/* {/block 'nav'} */
/* {block 'main'} */
class Block_14303754456786b488f30630_90814078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_14303754456786b488f30630_90814078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div id="main">

    <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'add_user'),$_smarty_tpl ) );?>
">

        <div class="fields" style="flex-direction: row; justify-content: center">
        
            <section >
                <div class="field">
                    <label for="name">Imię</label>
                    <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
"/>
                </div>
            </section>

            <section >
                <div class="field">
                    <label for="surename">Nazwisko</label>
                    <input type="text" name="surename" id="surename" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surename;?>
"/>
                </div>
            </section>

            <section >
                <div class="field">
                    <label for="position">Stanowisko</label>
                    <input type="text" name="position" id="position" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->position;?>
"/>
                </div>
            </section>

            <section >
                <div class="field">
                    <label for="phonenumber">Numer Telefonu</label>
                    <input type="text" name="phonenumber" id="phonenumber" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phonenumber;?>
"/>
                </div>
            </section>
        </div>
        <div class="fields" style="flex-direction: row; justify-content: center">
            <section >
            <div class="field">
                <label for="login">Login</label>
                <input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
            </div>
        </section>

        <section >
        <div class="field">
            <label for="password">Hasło</label>
            <input type="password" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
"/>
        </div>
        </section>

        <section >
        <div class="field">
            <label for="password2">Powtórz Hasło</label>
            <input type="password" name="password2" id="password2" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password2;?>
"/>
        </div>
        </section>

        <section >
        <div class="field">
            <label for="role">rola</label>
            <input type="text" name="role" id="role" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->role;?>
"/>
        </div>
        </section>
         
        </div>
        
        <div style="text-align: center;"> 
            <input type="submit" value="Dodaj użytkownika" />
        </div>
        
    </form>

    <section>		
        <table class = "alt">
            <thead>
                    <tr>
                    <th>#</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Stanowisko</th>
                    <th>Numer Telefonu</th>
                    <th>Login</th>
                    <th>Rola</th>
                </tr>
            </thead>
               
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->iteration = 0;
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
$_smarty_tpl->tpl_vars['user']->iteration++;
$__foreach_user_0_saved = $_smarty_tpl->tpl_vars['user'];
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->iteration;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value["name"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value["surename"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value["position"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value["phone_number"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value["login"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value["login"];?>
</td>
                    <td>
                        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'part_action'),$_smarty_tpl ) );?>
" margin = 0>
                        
                        <div class="fields" style="flex-direction: row; justify-content: center;">
                            

                            <section>
                                <div class = "field">
                                    <input type="submit" name = 'btnRmv' value="Usuń"/>
                                

                                </div>
                            </section>
                        </div>
                        
                        <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['user']->value["id_user"];?>
>
                       
                        </form>
                    </td>
                    

                </tr>
            <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved;
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
