{extends file="Main.tpl"}



{block name = nav}

    <nav id="nav">
        <ul class="links">
            <li class="active"><a href="{url action='generate_view'}">{$button1}</a></li>
            <li><a href="{url action='generate_login_view'}">{$button2}</a></li>

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

{/block}