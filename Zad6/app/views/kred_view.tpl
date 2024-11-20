{extends file="main.tpl"}

{* Header and one line description *}
{block name = header}
	
	<div>
		
			<div style='display: inline-block;'>
			<header id="header">
			<h1>{$page_header}</h1>
			<p>{$header_desc}</p>
			</header>
			</div>

			<div style='display: grid; float: right' >

				{if $show_secret_buttons}
					<a  href="{$config->action_url}generate_view_admin">Tajna strona admina  </a>
				{/if}

				<a  href="{$config->action_url}logout">  Wyloguj</a>
			
			</div>
		
		
	</div>
	
{/block}



{* Form with three text fields *}
{block name = forms}
	
<div style='display: inline-block; vertical-align: top'>
	<form id="signup-form"  method="post" action="{$config->action_url}calculate">
		<fieldset>
		
			<input id="id_credit" type="text" name="credit" placeholder="Wartość" value= "{$form->credit}" />
			<br>
			<input id="id_percent" type="text" name="percent" placeholder="Procent %" value= "{$form->percent}" />
			<br>
			<input id="id_months" type="text" name="months" placeholder="Miesiące" value= "{$form->months}" />
			<br>
			<input type="submit" value="Oblicz"/>
		
		</fieldset>
	</form>
</div>	
{/block}

{* Results based at user input. If inupts are incorrect showing red messages. *}
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

	{* print results messages if any *}
	{if isset($results->monthly) }
	

		<h4>
			Miesięczna rata wyniesie: {$results->monthly|string_format:"%.2f"} <br />
			Całkowita kwota do spłaty wyniesie: {$results->total|string_format:"%.2f"}
		</h4>

	{/if}
</div>	
{/block}


