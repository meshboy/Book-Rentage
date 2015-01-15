<?php
require_once "configFile.php";

login_required();

if ($_POST['logout'])
{
    logout();
}

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="cssStyleCheet.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="well-sm1" >
    <div class="collapse navbar-collapse" id="back">
        <ul class="nav navbar-nav " id="navBar">

            <li><img src="images/book6.jpg" width="30px" height="30px" >
                <label id="header1">CampusBookRentals</label>
                <small id="header2" >your alternative to textbooks</small>

        </ul>

    </div>
</div>

<div class="well-sm1" >
    <div class="collapse navbar-collapse" id="back">
        <ul class="nav navbar-nav " id="navBar">
            <li ><a href="Rent.php">Rent</a></li>
            <li><a href="buy.php">Buy</a></li>
            <li><a href="return.php">Return</a></li>
        </ul>

        <form class="nav navbar-form navbar-right" role="search" id="formBar" method="post">


            <a href='dashboard.php' class='btn btn-primary navbar-btn'><?php displayName() ?></a>
            <input type="submit" name="logout" class="btn btn-primary" value="log out">
        </form>
    </div>
</div>

<div class="well-sm2">
    <form action="" method="post" id="formBar2">

        <input type="text" placeholder="Searcg by ISBN, Title, or Author" size="80s">

        <input type="submit" value="Find Book " name="submitBooks">

    </form>
</div>

<div class="container">
    <div class="col-lg-4" id="left">


        <ul class="nav navbar-collapse" id="mynav">

            <li><a href="dashboard.php" >Your Account</a></li>
            <li><a href="#recent" class="active bg-success"  data-toggle="tab" >Recent Orders</a></li>
            <li><a href="return.php" >Return Items</a></li>
            <li><a href="extend.php" >Extend/Buyout</a></li>
            <li><a href="refund.php" >Get a Refund</a></li>
            <li><a href="ebook.php" >Your eBooks</a></li>
            <li><a href="order.php" >Order History</a></li>
            <li><a href="reward.php" >Rewards & Credits</a></li>
            <li><a href="accountSetting.php" >Account Setting</a></li>


        </ul>

    </div>

    <div class="col-lg-6">

        <div class="tab-pane fade in active" id="recent">

        </div>





    </div>
</div>
<div class="help-block">

    <div class="footer">



        <label id="footer" >CampusBookRentals@ 2015</label>




    </div>


</div>








<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>