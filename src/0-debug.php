<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="alternate" hreflang="x" />

	<meta name="description" content="Calculator" />
	<meta name="author" content="Koryukov Maksim <maxkoryukov@yandex.ru>" />
	<meta name="keywords" content="Calculator" />

	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet" integrity="sha256-75xVS8o85bn5eLYm_4w6RBwEaK8lmb206bazL2dD8Fg=" crossorigin="anonymous">

	<!-- DEV 
	<link rel="stylesheet" type="text/css" href="style.min.css">
	 DEV -->
	<link rel="stylesheet/less" type="text/css" href="style.less">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js" type="text/javascript"></script>



	<title>7 Key Numbers - Goal Seek Calculator</title>
</head>
<body>

<?php
	$query = $_SERVER['PHP_SELF'];
	$path = pathinfo( $query );
	$p = $path['dirname'] . $path['basename'];

	$c = intval($_GET["c"]);
?>


<div class="container">
	<!-- Static navbar -->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">CFO On-Call</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php print($p . "?c=1") ?>">(proc) Calc 1</a></li>
					<li><a href="<?php print($p . "?c=2") ?>"><i class="glyphicon glyphicon-ok"></i> Calc 2</a></li>
					<li><a href="<?php print($p . "?c=3") ?>">(not) Calc 3</a></li>
					<li><a href="<?php print($p . "?c=4") ?>">(proc) Calc 4</a></li>
					<li><a href="<?php print($p . "?c=5") ?>"><i class="glyphicon glyphicon-ok"></i> Calc 5</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>
</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script src="http://momentjs.com/downloads/moment.min.js" type="text/javascript"></script>

	<main class="container">
<?php
	if ($c > 0 && $c < 6)
	{
		include ('calcseven-calc' . $c . '.php');
	}
?>
	</main>
</body>
</html>