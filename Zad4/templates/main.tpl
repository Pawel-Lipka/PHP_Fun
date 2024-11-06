<!DOCTYPE HTML>

<html>
	<head>
		<title>{$page_title}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$config->app_url}/assets/css/main.css" />
	</head>

	<body class="is-preload">
        
        {* Header *}
        {block name = header} {/block}
        
        {* Form and results side by side *}
		<div>
		    <div style='display: inline-block; vertical-align: top'>
                {block name = calculator_form} {/block}
		    </div>
		
		    <div style='display: inline-block; vertical-align: base-line; margin-left: 3em'>
                {block name = results} {/block}
		    </div>
		</div>
		
        {* Footer *}
        {block name = footer} {/block}           
		
        {* Scripts *}
		<script src="{$config->app_url}/assets/js/main.js"></script>

	</body>
</html>