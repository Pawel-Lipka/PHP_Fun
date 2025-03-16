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

    
    
        <form method="post" action="{url action = 'generate_view'}">
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
            {foreach $spare_parts as $part}
                <tr>
                    <td>{$part@iteration}</td>
                    <td>{$part["sp_code"]}</td>
                    <td>{$part["sp_description"]}</td>
                    <td>{$part["quantity"]}</td>

                    
                    <td>
                        <form method="post" action="{url action = 'part_action'}" margin = 0>
                        
                        <div class="fields" style="flex-direction: row; justify-content: center;">
                            <section>
                                <div class = "field" >
                                    <input type="text" name="qty" id="qty" placeholder="ilość" size="5"/>
                                </div>
                            </section>

                            <section>
                                <div class = "field">

                                {if \core\RoleUtils::inRole('manager') || \core\RoleUtils::inRole('storekeeper')}
                                    <input type="submit" name = 'btnAdd' value="Przyjmij"/>
                                {/if}

                                {if \core\RoleUtils::inRole('manager') || \core\RoleUtils::inRole('technician')}
                                    <input type="submit" name = 'btnRmv' value="Pobierz"/>
                                {/if}

                                </div>
                            </section>
                        </div>
                        
                        <input type="hidden" name="code" value={$part["sp_code"]}>
                        <input type="hidden" name="desc" value={$part["sp_description"]}>
                       
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

                    {if $current_page > 1}
                    <a href={url action='generate_view' p1 = ($previous_page)} class="previous">Prev</a>
                    {/if}

                    {for $page = 1 to $pages_qty}
                        
                        {if $page == $current_page}
                            <a href={url action='generate_view' p1 = $page} class="page active">{$page}</a>
                        {else}    
                            <a href={url action='generate_view' p1 = $page} class="page">{$page}</a>
                        {/if}
                        {* <span class="extra">&hellip;</span> *}
                    {/for}

                    {if $current_page < $pages_qty}
                        <a href={url action='generate_view' p1 = ($next_page)} class="next">Next</a>
                    {/if}
                </div>
            </footer>

    </div>

{/block}