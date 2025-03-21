{extends file="Main.tpl"}



{block name = nav}

    <nav id="nav">
        <ul class="links">
            <li class="active"><a href="{url action='generate_view'}">{$button1}</a></li>
            <li><a href="{url action='logout'}">{$button2}</a></li>
            {if \core\RoleUtils::inRole('admin')}
            <li><a href="{url action='generate_admin_view'}">{$button3}</a></li>
            {/if}

        </ul>
    </nav>

{/block}

{block name = main}

    
    <div id="main">
        {if ! \core\RoleUtils::inRole('technician') }
            <form method="post" action="{url action = 'add_part'}">

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
        {/if}

        {if ! $messages->isEmpty()}
            <section>
                {foreach $messages->getMessages() as $msg}
                    <ul>
                        <li>{$msg->text}</li>
                    </ul>
                {/foreach}
            </section>
        {/if}
 
    <form id = "search_form" method="post" onsubmit="ajaxPostForm('search_form','{url action = 'generate_part_table'}','Parts_table');return false;">
    
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

</form> 


        
        <section id = "Parts_table">		
            {include file="Parts_table.tpl"}    
        </section>	
    </div>

{/block}