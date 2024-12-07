{extends file="Main.tpl"}

{block name = nav}

    <nav id="nav">
    <ul class="links">
        <li class="active"><a href="{url action='generate_login_view'}">{$button1}</a></li>
        <
    </ul>
</nav>

{/block}
    
{block name = main}

    <div id="main">

    <form method="post" action="{url action = 'generate_view'}">

        <div class="fields" style="justify-content: center">
            <section >
                <div class="field" >

                    <div>
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login" value="{$form->login}"/>
                    

                        <label for="Password">Password</label>
                        <input type="password" name="pass" id="pass" value="{$form->password}"/>
                    </div>

                </div>
            </section>
        </div>
        
        <div style="text-align: center;"> 
            <input type="submit" value="Zaloguj" />
        </div>
        
    </form>
</div>

{/block}