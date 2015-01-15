<?php
require_once "configFile.php";

if(isset($_POST['main']))
{
    header("Location:".configFile::dir."loginPage.php");
}
?>


<!DOCTYPE html>
<html lang="en">
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
<body id="bodyCenter">


<div class="well-sm1" >
    <div class="collapse navbar-collapse" id="back">
        <ul class="nav navbar-nav " id="navBar">

            <li><img src="images/book6.jpg" width="30px" height="30px" >
                <label id="header1">CampusBookRentals</label>
                <small id="header2" >your alternative to textbooks</small>
                <form method="post" action="">
                    <input id="adminmainPage" type="submit" class="btn " name="main" value="Main Page"/>
                </form>


        </ul>

    </div>
</div>


<div class="container" id="panelContainer">

    <div class="col-lg-6 col-md-offset-3" >  <!-- to centralized a divided column.. (12-colNum)/2 and u set the offset
                                                           to the value. e.g (12-6)/2. u set the offset to 3-->
        <div class="panel panel-default" >
            <div class="page-header">

                <h1>Forgot Password?</h1>
            </div>
            <div class="panel-body panel-default">
                <form class="form-group"  action="" method="post" id="emaillogin">
                    <div class="form-group">
                        <input type="text" class="form-control" size="80" placeholder="Email Address" name="email">
                    </div>


                   <input type="submit" value="submit" class="btn" name="emailLogin" >


                </form>
            </div>


        </div>
        <?php displayError(); ?>

    </div>

</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>