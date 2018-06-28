<?php
session_start();

if (isset($_COOKIE['item']))  //this is for chec cookies are available or nor
{
    foreach ($_COOKIE['item'] as $name1 => $value)
    {

        if (isset($_POST["delete$name1"]))
        {

            setcookie("item[$name1]", "", time()-1800);
            ?>
            <script type="text/javascript">
                window.location.href = window.location.href;
            </script>
            <?php
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cart</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    <a href="#">Cart</a>
    <a href="menu_1.html">Menu</a>
  </div>
  <img src="square-one - copy.png" style="float:left; margin-left:470px; width:8%; height:8%;"/>
<h1 style="margin-right:470px">Square One</h1>
<p id="logo1" style="margin-right:470px">EAT.MEET.GREET</p>
<hr>
<div class="table-responsive cart_info">
				<table class="table table-condensed" border="1">
					<?php
					$d=0;
					if (isset($_COOKIE['item']))  //this is for check cookies are available or nor
					{
						$d=$d+1;

					}
					if($d==0)
					{
						echo "no record available in cart";
						echo "<br>";echo "<br>";echo "<br>";echo "<br>";
					}
					else
					{
						?>
					<thead>
					<tr class="cart_menu">
						<td class="image">Item</td>
						<td class="description">Description</td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
					</tr>
					</thead>
					<tbody>
					<?php
					foreach ($_COOKIE['item'] as $name1 => $value)   //this is for looping as per cookies if 3 cookies then loop move
					{
						$values11 = explode("__", $value);

						?>
						<tr>
						<form method="post">
							<td class="cart_product">
								<img src="../admin/<?php echo $values11[0]; ?>" alt="" height="60" width="60">
							</td>
							<td class="cart_description">
								<h4><?php echo $values11[1]; ?></h4>
							</td>
							<td class="cart_price">
								<p>Rs.<?php echo $values11[2]; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $values11[3]; ?>" autocomplete="off" size="2" readonly>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">Rs.<?php echo $values11[4]; ?></p>
							</td>
							<td><input type="submit" name="delete<?php echo $name1;
                                ?>" value="del" id="s3"></td>
								</form>		
						</tr>
						<?php
					}
					?>
					</tbody>
				</table>
						<?php
						$tot=0;
						foreach ($_COOKIE['item'] as $name1 => $value)   //this is for looping as per cookies if 3 cookies then loop move
						{
							$values11 = explode("__", $value);
							$tot=$tot+$values11[4];
						}
						
?>
<span style="font-size:20px; margin-left:85%">Total
<?php
						echo "Rs.".$tot;
						$_SESSION["pay"]=$tot;
						}
					?>
</span>
			</div>
		</div>
	</section>
<center>
	<a href="checkout.php">
<input type="button" value="checkout"></a>
</center>