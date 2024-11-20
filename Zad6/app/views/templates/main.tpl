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
		   
            {block name = forms} {/block}
            {block name = results} {/block}
		    
		</div>
		
        {* Footer *}
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
		
        {* Scripts *}
		<script src="{$config->app_url}/assets/js/main.js"></script>

	</body>
</html>