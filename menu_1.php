<?php
session_start();
if($_SESSION["user"]=="")
{
?>
<script type="text/javascript">
window.location="login.php";
</script>
<?php
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
	<div class="bg-img">
		<div class="banner code-banner">
			<div class="container">
				<div class="header">
					<div class="logo">
						<h1><a href="index.html">Square One</a></h1>
					</div>
					<div class="top-nav">
						<nav class="navbar navbar-default">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
								</button>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li><a class="active" href="menu_1.html">Menu</a></li>
									<li><a href="cart.php">Cart</a></li>
									<li><a href="contact.html">Contact</a></li>
									<div class="clearfix"> </div>
								</ul>	
							</div>	
						</nav>		
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
        <div class="row-md-4 row-sm-4 row-lg-4 row-xl-4"></div>
		<div class="row-md-4 row-sm-4 row-lg-4 row-xl-4">
	<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
<ul type="square">
	<img src="square-one - copy.png"  height="100px" width="100px">
		<li><h1><a href="bf.php">Chitkara's Menu</a></h1></li>
</ul>
</div>
<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
<ul type="square">
	<img src="havmor/havmor.png" height="100px" width="100px">
			<li><h1><a href="havmor/shakes.php">Havmor</a></h1></li>
</ul>
</div>
<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
<ul type="square">
<img src="burgrill/burgrill.png"  height="100px" width="100px">
			<li><h1><a href="burgrill/beverage.php">Burgrill</a></h1></li>
</ul>
</div>
<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
<ul type="square">
<img src="panditji/chaat.jpg" height="100px" width="100px">
			<li><h1><a href="panditji/pandit.php">Pandit ji</a></h1></li>
</ul>
</div>
<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
<ul type="square">
<img src="tq/tq1.png"  height="100px" width="100px">
			<li><h1><a href="tq/bigeat.php">Tea Quotient</a></h1></li>
</ul>
</div>
</div>
<div class="row-md-4 row-sm-4 row-lg-4 row-xl-4"></div>
</body>
</html>