<?php
/* Smarty version 4.3.4, created on 2025-01-17 17:49:50
  from 'D:\Programy\XAMPP\htdocs\Final_project\app\views\Admin_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_678a8a2e035305_89131558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8175464e623d0e33880fa26f26823e55c7829097' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\Final_project\\app\\views\\Admin_view.tpl',
      1 => 1737132586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678a8a2e035305_89131558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1940963695678a8a2de70e46_78204411', 'nav');
?>

    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_901653731678a8a2de9d742_04527076', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'nav'} */
class Block_1940963695678a8a2de70e46_78204411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_1940963695678a8a2de70e46_78204411',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <nav id="nav">
    <ul class="links">
        <li class="active"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'generate_admin_view'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['button3']->value;?>
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
class Block_901653731678a8a2de9d742_04527076 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_901653731678a8a2de9d742_04527076',
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
                <label for="password1">Powtórz Hasło</label>
                <input type="password" name="password1" id="password1" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password1;?>
"/>
            </div>
            </section>

            <section>
            <div class="field">
                <label for="role">rola</label>
                <select name="role" id="role">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
?>
                    <option value=<?php echo $_smarty_tpl->tpl_vars['role']->value["id_role"];?>
><?php echo $_smarty_tpl->tpl_vars['role']->value["role_name"];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>

            </div>
            </section>
        </div>
        <section>
        <div style="text-align: center;"> 
            <input type="submit" value="Dodaj użytkownika" />
        </div>
       </section>
    </form>

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
$__foreach_user_2_saved = $_smarty_tpl->tpl_vars['user'];
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
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value["role_name"];?>
</td>
                    <td>
                        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'remove_user'),$_smarty_tpl ) );?>
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
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_2_saved;
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
