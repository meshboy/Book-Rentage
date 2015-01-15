<?php

    require_once "configFile.php";

login_required();



    if(isset($_POST['submit']))
    {
        if (!empty($_POST['name'])  && !empty($_POST['email'])  && !empty($_POST['country'])  && !empty($_POST['pass']))
        {

                   register($_POST['name'], $_POST['email'],$_POST['pass'], $_POST['country']);



                   //header("Location:".configFile::dir."loginPage.php");

        }

        else
        {
            $_SESSION['error'] = "Please fill in all the fields appropriately";

        }

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

    <div class="well-sm2">
            <form action="" method="post" id="formBar2">

                 <input type="text" placeholder="Searcg by ISBN, Title, or Author" size="80s">

             <input type="submit" value="Find Book " name="submitBooks">

            </form>
    </div>

    <div class="container" id="whole">

        <label id="create"> Create an account</label>&nbsp;<small>All fields are required</small></br>

        <div class="col-lg-5" id="firstPartition" >

         <div class="formSign">


                <form action="" method="post" class="form-group">

                    <?php
                        displayError();
                    ?>

                    <div class="form-group">
                        <input type="text" size="50" placeholder="First Name" name="name" class="form-control"><br/>
                    </div>

                    <div class="form-group">
                        <input type="text" size="50" placeholder="Email Address" name="email" class="form-control"><br/>
                    </div>

                    <div class="form-group">
                        <input type="text" size="50" placeholder="Nationality" name="country" class="form-control"><br/>
                    </div>


                    <div class="form-group">
                        <input type="password" size="50" placeholder="Password " name="pass" class="form-control"><br/>
                    </div>




                    <input type="submit" value="Register" name="submit" class="btn">


                </form>


            </div>

        </div>

        <div class="col-lg-6" id="secondPartion">

           <p>Or log in with Facebook</p></br>

            <img src="images/facebookImage.gif"><br/>

            <p>Already have an account? &nbsp;<a href="loginPage.php">Sign in</a>


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