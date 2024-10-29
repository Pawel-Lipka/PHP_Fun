{extends file="../templates/main.tpl"}

{* Header and one line description *}
{block name = header}

	<header id="header">
		<h1>{$page_header}</h1>
		<p>{$header_desc}</p>
	</header>

{/block}

{* Form with three text fields *}
{block name = calculator_form}
	
	<form id="signup-form"  method="post" action="{$app_url}/app/kred_contr.php">
		<fieldset>
		
			<input id="id_credit" type="text" name="credit" placeholder="Wartość" value= "{$credit}" />
			<br>
			<input id="id_percent" type="text" name="percent" placeholder="Procent %" value= "{$percent}" />
			<br>
			<input id="id_months" type="text" name="months" placeholder="Miesiące" value= "{$months}" />
			<br>
			<input type="submit" value="Oblicz"/>
		
		</fieldset>
	</form>
	
{/block}

{* Results based at user input. If inupts are incorrect showing red messages. *}
{block name = results}
	
	{* print error messages if any *}
	{if count($messages) > 0}

		<h4 style="color: red"><ol>

		{foreach $messages as $msg }

			<li>{$msg}</li>

		{/foreach}

		</ol><h4>
	
	{/if}

	{* print results messages if any *}
	{if isset($result) }

		<h4>
			Miesięczna rata wyniesie: {$result} <br />
			Całkowita kwota do spłaty wyniesie: {$total_result}
		</h4>

	{/if}	
{/block}

{* standard footer *}
{block name = footer}
	<footer id="footer">
		<ul class="icons">
			<li><a href="https://github.com/Pawel-Lipka" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
			<li><a href="https://www.linkedin.com/in/pawel-lipka/" class="icon brands fa-linkedin"><span class="label">LinkedIn</span></a></li>
			<li><a href="mailto:lipkap1@gmail.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
		</ul>
		<ul class="copyright">
			<li>&copy; Paweł Lipka</li><li>Credits: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</footer>
{/block}