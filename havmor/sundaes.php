<?php
session_start();
$link=mysqli_connect("localhost","varun","varun12");
mysqli_select_db($link,"squareone");
$statement = "product";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sundaes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
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
                <a class="navbar-brand" href="../menu_1.php">
                    <span class="glyphicon glyphicon-home"></span>
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">
                        <img src="havmor.png" alt="logo" style="width: 100px; height: 30px; ">
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-user"></span> Hi, User</a>
                </li>
                <li>
                    <a href="../logout.php">
                        <span class="glyphicon glyphicon-log-out"></span> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
        <h2> Havmor</h2>
        <br>
        <a href="shakes.php">Shakes</a>
        <a href="scoops.php">Scoops</a>
        <a href="sticks.php">Sticks</a>
        <a href="#">Sundaes</a>
        <a href="cones.php">Cones</a>
    </div>
    <div class="container" id="main">
        <div class="row">
            <div>
                <h1 style="color: crimson;font-family: 'Satisfy', cursive; text-decoration: underline">Sundaes</h1>
            </div>
<?php
$res=mysqli_query($link,"select * from {$statement} where product_category='sundaes'");
while($row=mysqli_fetch_array($res))
{
?>
            <div class="bg-primary card col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <img src="../../admin/<?php echo $row["product_image"]; ?>" alt="Avatar" class="food" />
                <hr>
                <div class="container1">
                    <h4><?php echo $row["product_name"]; ?></h4>
                    <p>Price:- Rs.<?php echo $row["product_price"]; ?></p>
                    <a href="../product_details.php?id=<?php echo $row["id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Description</a>
                </div>
            </div>
 <?php
}
?>
        </div>
    </div>
</body>

</html>