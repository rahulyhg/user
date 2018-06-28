 <?php
 session_start();
  $link=mysqli_connect("localhost","varun","varun12");
  mysqli_select_db($link,"squareone");
  ?>
  <script type="text/javascript">
  </script>
<!Doctype html>
<html>
  <head>
    <title>Login page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
  </head>
  <?php
  if(isset($_POST["go"]))
  {
  	$res=mysqli_query($link,"select * from table_register where email='$_POST[email]' && pass='$_POST[pwd]'");
	while($row=mysqli_fetch_array($res))
	{
	$_SESSION["user"]=$row["email"];
		?>
		<script type="text/javascript">
			window.location="menu_1.php";
			</script>
			<?php
	}
	}
	?>
  <body background="images/bg2.jpg"style="background-color:#cccccc; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
   <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4">
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4">
          <section class="login-form">
             <form method="post" role="login">
               <h1 class="heading"> Square One</h1>
                 <input type="email" name="email" required placeholder="Email" class="form-control input-lg email"  />
                 <input type="password" name="pwd" required class="form-control input-lg" id="password" placeholder="Password" pattern="[A-Za-z0-9]+" />
                 <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
                 <div class="create_account">
                   <a href="register.html" target="_self">Create account</a>
                 </div>
             </form>
         </section>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4">
        </div>
      </div>
    </div>
  </body>
</html>
