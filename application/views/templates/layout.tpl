<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>{block name=title}{$title|default:"Последние новости"}{/block}</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">


{block name=body}body goes here{/block}

{block name=footer}
<hr>
<div class="footer">
	<p>&copy 2016</p>
</div>
{/block}

</div> <!-- .container -->

<script src="/assets/js/jquery.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>