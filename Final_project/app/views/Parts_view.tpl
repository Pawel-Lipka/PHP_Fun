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

    <form method="post" action="{url action = 'add_part'}">

        <div class="fields" style="flex-direction: row; justify-content: center">
            <section >
                <div class="field">
                    <label for="code">Kod</label>
                    <input type="text" name="code" id="code" value="{$form->code}"/>
                </div>
            </section>

            <section >
                <div class="field">
                    <label for="desc">Nazwa</label>
                    <input type="text" name="desc" id="desc" value="{$form->desc}"/>
                </div>
            </section>

            <section >
                <div class="field">
                    <label for="qty">Ilość</label>
                    <input type="text" name="qty" id="qty" value="{$form->qty}"/>
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

                                {if \core\RoleUtils::inRole('admin') || \core\RoleUtils::inRole('storeKeeper')}
                                    <input type="submit" name = 'btnAdd' value="Dodaj"/>
                                {/if}

                                {if \core\RoleUtils::inRole('admin') || \core\RoleUtils::inRole('technician')}
                                    <input type="submit" name = 'btnRmv' value="Usuń"/>
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