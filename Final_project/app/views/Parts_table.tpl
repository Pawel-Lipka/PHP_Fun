{if isset($search_name)}

    <div id = "clear_search_btn" style= "text-align: center">
        <a href= {url action='clear_search'} class="button small" style="flex-direction: row; justify-content: center" >wyczyść wyszukiwanie</a>
    </div>
    <br>
{/if}

<table  class = "alt">
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

          <!-- Scroll bar -->
            
          <div class="pagination" style="display:flex; justify-content: center">

          {if $current_page > 1}
          <a onclick="ajaxReloadElement('Parts_table', '{url action='generate_part_table' p1 = $previous_page}' ,interval=0)" class="previous">Prev</a>
          {/if}

          {for $page = 1 to $pages_qty}
              
              {if $page == $current_page}
                  <a onclick = "ajaxReloadElement('Parts_table', '{url action='generate_part_table' p1 = $page}')" class="page active">{$page}</a>
              {else}    
                  <a onclick = "ajaxReloadElement('Parts_table', '{url action='generate_part_table' p1 = $page}')" class="page">{$page}</a>
              {/if}
              {* <span class="extra">&hellip;</span> *}
          {/for}

          {if $current_page < $pages_qty}
              <a onclick = "ajaxReloadElement('Parts_table', '{url action='generate_part_table' p1 = $next_page}')" class="next">Next</a>
          {/if}
      </div>