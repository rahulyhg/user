<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Checkout</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="main.css">
  <script src="main.js"></script>
</head>

<body> 
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" onClick="openNav()">
          <span class="glyphicon glyphicon-menu-hamburger"></span>
        </a>
        <a class="navbar-brand" href="./menu_1.php">
          <span class="glyphicon glyphicon-home"></span>
        </a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="#">
            <img src="square1.png" alt="logo" style="width:30px;height:30px;">SQUARE ONE</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#">
            <span class="glyphicon glyphicon-user"></span> Hi, User</a>
        </li>
        <li>
          <a href="logout.php">
            <span class="glyphicon glyphicon-log-out"></span> Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
	<h2> Square One</h2><br>
    <a href="#">Checkout</a>
    <a href="cart.php">Cart</a>
  </div>
  <img src="square-one - copy.png" style="float:left; margin-left:470px; width:8%; height:8%;"/>
<h1 style="margin-right:470px">Square One</h1>
<p id="logo1" style="margin-right:470px">EAT.MEET.GREET</p>
<hr>
 <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
          <section class="register-form">
             <form method="post" role="register">
               <p class="heading">Checkout Information</p>
                 <div class="row">
                   <div class="col-xs-6 col-md-6">
                     <input type="text" name="firstname" placeholder="Varun" required class="first_name form-control input-lg" autofocus>
                   </div>
                   <div class="col-xs-6 col-md-6">
                       <input type="text" name="lastname" placeholder="Goyal" required class="last_name form-control input-lg" autofocus>
                   </div>
                 </div>
                 <input type="email" name="email" placeholder="Email" class="form-control input-lg email"required/>
				 <input type="text" placeholder="Contact Number" class="form-control input-lg cno" name="cno">
                 <button type="submit" name="submit1" class="btn btn-lg btn-primary btn-block">Register</button>
             </form>
         </section>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4"></div>
      </div>
    </div>
<?php
			if(isset($_POST["submit1"]))
			{
				$link=mysqli_connect("localhost","varun","varun12");
				mysqli_select_db($link,"squareone");
				mysqli_query($link,"insert into checkout_address values('','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[cno]')");

				$res=mysqli_query($link,"select id from checkout_address order by id desc limit 1");
				while($row=mysqli_fetch_array($res))
				{
					$_SESSION["order_id"]=$row["id"];
				}
				?>
			<script type="text/javascript">
				alert("click ok to transferring to you in paypal");
				setTimeout(function(){
					window.location="paypal.php";
				},4000);
			</script>
			<?php
			}
			?>
</body>
</html>