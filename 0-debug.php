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

	<!-- DEV
	<link href="tmp/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.min.css">
	 DEV -->

	<link rel="stylesheet/less" type="text/css" href="src/style.less">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js" type="text/javascript"></script>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet" integrity="sha256-75xVS8o85bn5eLYm_4w6RBwEaK8lmb206bazL2dD8Fg=" crossorigin="anonymous">

<script>
/*
	moment = function(dt)
	{
		this.dt = dt;
		this.format = function( f ) { return this.dt.toString(); };

		return this;
	}
*/
</script>

	<title>7 Key Numbers - Goal Seek Calculator</title>
</head>
<body>

<?php
	$query = $_SERVER['PHP_SELF'];
	$path = pathinfo( $query );
	$p = $path['dirname'] . $path['basename'];

	$c = intval($_GET["c"]);


	// settings for plugin. Normally, they are set in the plugin's body.
	$calcseven_settings = array('title' => 'aasdf');
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
					<li><a href="<?php print($p . "?c=1") ?>"><i class="glyphicon glyphicon-ok"></i> Calc 1</a></li>
					<li><a href="<?php print($p . "?c=2") ?>"><i class="glyphicon glyphicon-ok"></i> Calc 2</a></li>
					<li><a href="<?php print($p . "?c=3") ?>">(not) Calc 3</a></li>
					<li><a href="<?php print($p . "?c=4") ?>"><i class="glyphicon glyphicon-ok"></i> Calc 4</a></li>
					<li><a href="<?php print($p . "?c=5") ?>"><i class="glyphicon glyphicon-ok"></i> Calc 5</a></li>
					<li><a href="<?php print($p . "?c=6") ?>"><i class="glyphicon glyphicon-ok"></i> Calc 6</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>
</div>


<!--
	<script src="tmp/knockout-3.3.0.js"></script>
	<script src="tmp/jquery.min.js" type="text/javascript"></script>
	<script src="tmp/bootstrap.min.js" ></script>
-->


	<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script src="http://momentjs.com/downloads/moment.min.js" type="text/javascript"></script>
	<script src="/src/knockout-date-bindings.js"></script>

	<main class="container">
<?php
	if ($c > 0 && $c < 7)
	{
		include ('src/calcseven-calc' . $c . '.php');
	}
?>

	</main>

	<script type="text/javascript">
		CalcSeven = window;
	</script>
	<script type="text/javascript" src="src/calcseven-calc6.js"></script>
	<script type="text/javascript" src="src/calcseven-calc4.js"></script>
	<script type="text/javascript" src="src/calcseven-calc3.js"></script>
	<script type="text/javascript" src="src/calcseven-calc1.js"></script>
	<script type="text/javascript" src="src/roundcut.js"></script>
</body>
</html>
