{extends file="main.tpl"}

{block name = header}

    <div>
		
			<div style='display: inline-block;'>
			<header id="header">
			<h1>{$page_header}</h1>
			</header>
			</div>

			<div style='display: grid; float: right' >

                <a  href="{$config->action_url}">Powrót do kalkulatora</a>            
				<a  href="{$config->action_url}logout">Wyloguj</a>
                
			</div>
		
	</div>

{/block}