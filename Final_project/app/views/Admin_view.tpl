{extends file="Main.tpl"}

{block name = nav}

    <nav id="nav">
    <ul class="links">
        <li class="active"><a href="{url action='generate_admin_view'}">{$button3} </a></li>
        <li><a href="{url action='logout'}">{$button2}</a></li>
    </ul>
</nav>

{/block}
    
{block name = main}

    <div id="main">

    <form method="post" action="{url action = 'add_user'}">

        <div class="fields" style="flex-direction: row; justify-content: center">
        
            <section >
                <div class="field">
                    <label for="name">Imię</label>
                    <input type="text" name="name" id="name" value="{$form->name}"/>
                </div>
            </section>

            <section >
                <div class="field">
                    <label for="surename">Nazwisko</label>
                    <input type="text" name="surename" id="surename" value="{$form->surename}"/>
                </div>
            </section>

            <section >
                <div class="field">
                    <label for="position">Stanowisko</label>
                    <input type="text" name="position" id="position" value="{$form->position}"/>
                </div>
            </section>

            <section >
                <div class="field">
                    <label for="phonenumber">Numer Telefonu</label>
                    <input type="text" name="phonenumber" id="phonenumber" value="{$form->phonenumber}"/>
                </div>
            </section>
        </div>

        <div class="fields" style="flex-direction: row; justify-content: center">

            <section >
                <div class="field">
                    <label for="login">Login</label>
                    <input type="text" name="login" id="login" value="{$form->login}"/>
                </div>
            </section>

            <section >
            <div class="field">
                <label for="password">Hasło</label>
                <input type="password" name="password" id="password" value="{$form->password}"/>
            </div>
            </section>

            <section >
            <div class="field">
                <label for="password1">Powtórz Hasło</label>
                <input type="password" name="password1" id="password1" value="{$form->password1}"/>
            </div>
            </section>

            <section>
            <div class="field">
                <label for="role">rola</label>
                <select name="role" id="role">
                {foreach $roles as $role}
                    <option value={$role["id_role"]}>{$role["role_name"]}</option>
                {/foreach}
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

    {if ! $messages->isEmpty()}
    <section>
    {foreach $messages->getMessages() as $msg}
        <ul>
        <li>{$msg->text}</li>
        </ul>
    {/foreach}
    </section>
    {/if}

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
            {foreach $users as $user}
                <tr>
                    <td>{$user@iteration}</td>
                    <td>{$user["name"]}</td>
                    <td>{$user["surename"]}</td>
                    <td>{$user["position"]}</td>
                    <td>{$user["phone_number"]}</td>
                    <td>{$user["login"]}</td>
                    <td>{$user["role_name"]}</td>
                    <td>
                        <form method="post" action="{url action = 'remove_user'}" margin = 0>
                        
                        <div class="fields" style="flex-direction: row; justify-content: center;">
                            
                            <section>
                                <div class = "field">
                                    <input type="submit" name = 'btnRmv' value="Usuń"/>
                                </div>
                            </section>
                        </div>
                        
                        <input type="hidden" name="id" value={$user["id_user"]}>
                       
                        </form>
                    </td>
                    

                </tr>
            {/foreach}
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

{/block}