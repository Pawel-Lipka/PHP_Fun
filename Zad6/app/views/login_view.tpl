{extends file="main.tpl"}

{block name = header}

	<header id="header">
	<h1>{$page_header}</h1>
	<p>{$header_desc}</p>
	</header>

{/block}


{* Form with two text fields *}
{block name = forms}
	
<div style='display: inline-block; vertical-align: top'>
	<form id="login-form"  method="post" action="{$config->action_url}login">
		<fieldset>
		
			<input id="login" type="text" name="login" placeholder="Login" value= "{$form->login}" />
			<br>
			<input id="pass" type="password" name="pass" placeholder="Hasło" value= "" />
			<br>
			<input type="submit" value="Zaloguj"/>
		
		</fieldset>
	</form>
</div>	
{/block}

{block name = results}
<div style='display: inline-block; vertical-align: base-line; margin-left: 3em'>	
	{* print error messages if any *}
	{if ! $messages->is_empty() }

		{if $messages->is_error()}
			<h4 style="color: red"><ol>

			{foreach $messages->get_errors() as $msg }

				<li>{$msg}</li>

			{/foreach}

			</ol><h4>
		
		{else}
			<h4 style="color: rgb(69, 159, 9)"><ol>

			{foreach $messages->get_infos() as $msg }

				<li>{$msg}</li>

			{/foreach}

			</ol><h4>
		{/if}
			
	{/if}
</div>	
{/block}
