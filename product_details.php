<?php
session_start();
$id = $_GET["id"];
$link = mysqli_connect("localhost", "varun", "varun12");
mysqli_select_db($link, "squareone");

if (isset($_POST["submit1"])) {
    $d = 0;
    if (isset($_COOKIE['item']))
    {
        foreach ($_COOKIE['item'] as $name => $value) {
            $d = $d + 1;
        }
        $d = $d + 1;
    } else {
        $d = $d + 1;
    }
	
    $res3 = mysqli_query($link, "select * from product where id=$id");
    while ($row3 = mysqli_fetch_array($res3)) {
        $img1 = $row3["product_image"];
        $nm = $row3["product_name"];
        $prize = $row3["product_price"];
        $qty = $_POST["qty_value"];
        $total = $prize * $qty;
    }
    if (isset($_COOKIE['item']))
    {
        foreach ($_COOKIE['item'] as $name1 => $value)
        {
            $values11 = explode("__", $value);
            $found = 0;
            if ($img1 == $values11[0]) 
            {
                $found = $found + 1;
                $qty = $values11[3] + $_POST["qty_value"];
                $tb_qty;
                $res = mysqli_query($link, "select * from product where product_image='$img1'");
                while ($row = mysqli_fetch_array($res)) {
                    $tb_qty = $row["product_qty"];
                }
                if ($tb_qty < $qty) {
                    ?>
                    <script type="text/javascript">
                        alert("this much quantity not available");
                    </script>
                    <?php

                } else {

                    $total = $values11[2] * $qty;
                    setcookie("item[$name1]", $img1 . "__" . $nm . "__" . $prize . "__" . $qty . "__" . $total, time() + 1800);
                }
            }
        }
        if ($found == 0) {
            $tb_qty;
            $res = mysqli_query($link, "select * from product where product_image='$img1'");
            while ($row = mysqli_fetch_array($res)) {
                $tb_qty = $row["product_qty"];
            }

            if ($tb_qty < $qty) {
                ?>
                <script type="text/javascript">
                    alert("this much quantity not available");
                </script>
                <?php
            } else {
                setcookie("item[$d]", $img1 . "__" . $nm . "__" . $prize . "__" . $qty . "__" . $total, time() + 1800);//new
            }
        }
    } else {
        $tb_qty;
        $res = mysqli_query($link, "select * from product where product_image='$img1'");
        while ($row = mysqli_fetch_array($res)) {
            $tb_qty = $row["product_qty"];
        }
        if ($tb_qty < $qty) {
            ?>
            <script type="text/javascript">
                alert("this much quantity not available");
            </script>
            <?php
        } else {
            setcookie("item[$d]", $img1 . "__" . $nm . "__" . $prize . "__" . $qty . "__" . $total, time() + 1800);//new
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product Details</title>
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
    <a href="#">Breakfast</a>
    <a href="lunch.html">Lunch</a>
    <a href="snacks.php">Snacks</a>
    <a href="drinks.php">Drinks</a>
    <a href="extras.php">Extras</a>
  </div>
  <img src="square-one - copy.png" style="float:left; margin-left:470px; width:8%; height:8%;"/>
<h1 style="margin-right:470px">Square One</h1>
<p id="logo1" style="margin-right:470px">EAT.MEET.GREET</p>
<hr>
<br><br>
<div class="col-sm-3"></div>
<div class="col-sm-9 padding-right">            
<?php
            $res = mysqli_query($link, "select * from product where id=$id");
            while ($row = mysqli_fetch_array($res))
            {
            ?>
			<div class="col-sm-5">
                        <div class="view-product">
                            <img src="../admin/<?php echo $row["product_image"]; ?>" alt=""/>

                        </div>
                    </div>
		<div class="product-details col-sm-7">
                            <div class="product-information">
							    <form name="form1" action="" method="post">
                                <h2 style="color: #363432; margin-top: 0;"><?php echo $row["product_name"];?></h2>
								<span>
									<span><b>Rs. <?php echo $row["product_price"]; ?><b></span><br>
									<label>Quantity:</label>
									<input type="text" name="qty_value" value="1"/><br><br><br>
									<button type="submit" name="submit1" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
								</span>
                </form>
				</div>
				</div>
                <?php
                }
                ?>
 </div>
 <br><br> <br><br> <br><br> <br> <br> <br><br> <br><br>
 <a href="cart.php">
 <button style="margin-left:50%">Cart</button></a>
</body>
</html>