<?php
    require_once 'configFile.php';

    if(login_in())
    {
        header("Location:".configFile::dir."buy.php");

    }

    if(isset ($_POST['login']))
    {
        if(!empty($_POST['emailAd']) && !empty($_POST['password']))
        {
              login($_POST['emailAd'], $_POST['password']);
        }

        else
        {
            $_SESSION['error'] ='Please fill in the appropriate fields';
        }
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
                     <li><a href="loginAdmin.php" id="adminlogo"><img src="images/admin.jpg" width="20" height="20"/> </a>

                </ul>

            </div>
        </div>

        <div class="well-sm2">
            <form action="" method="post" id="formBar2">

                <input type="text" placeholder="Searcg by ISBN, Title, or Author" size="80">

                <input type="submit" value="Find Book " name="submitBooks">

            </form>
        </div>

        <div class="container">



            <div class="col-lg-4" id="left">




                <label id="login">Login</label><br/>

                <?php displayError()?>

                <form class="form-group" action="" method="post" id="formBar3" >

                    <div class="form-group" id="input">
                        <p id="emailAdd">Email Address</p><br/>
                        <input type="text" size="40" class="form-control" name="emailAd"></br>
                    </div>

                   <div class="form-group"id="input">
                       <p id="password">Password</p><br/>
                       <input type="password" size="40" class="form-control" name="password"></br>

                   </div>
                    <div class="form-group" id="input">
                        <div class="checkbox"  >

                            <label ><input type="checkbox">Remember me for future Visits.</label>

                        </div>
                    </div>


                    <input type="submit" value="Login" name="login" class="btn" >
                    <a href="forgotPassword.php" id="forgetPasss">
                        Forgot your password? </a>
                </form>





            </div>

            <div class="col-lg-4" id="part2">

                <label id="login">Don't have an account?</label><br/>

                <form action="" method="post" id="formBar4">

                    <p id="emailAdd">Sign up for an account and start saving today!</p><br/>

                    <div id="section">
                        <a href="register.php">Create an account</a> &nbsp;
                        or  &nbsp;<a href="facebook.com"><img src="images/facebookImage.gif"> </a>

                    </div>

                 </form>

            </div>

            <div class="col-lg-4" id="images">

               <div class="carousel slide" data-ride="carousel" id="carousel-ex">

                   <ol class="carousel-indicators">
                       <li data-target="#carousel-ex" data-slide-to="0" class="active"></li>
                       <li data-target="#carousel-ex" data-slide-to="1" class="active"></li>
                       <li data-target="#carousel-ex" data-slide-to="2" class="active"></li>
                       <li data-target="#carousel-ex" data-slide-to="3" class="active"></li>
                   </ol>

                   <div class="carousel-inner">
                       <div class="active item">
                           <img src="images/book1.jpg" alt="images" width="200px" height="150px">
                       </div>

                       <div class="item">
                           <img src="images/book2.jpg" alt="images" width="200px" height="150px">
                       </div>

                       <div class="item">
                           <img src="images/book3.jpg" alt="images" width="200px" height="150px">
                       </div>

                       <div class="item">
                           <img src="images/book4.jpg" alt="images" width="200px" height="150px">
                       </div>


                   </div>
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