<?php
    require_once "configFile.php";

    admin_required();

    if (isset($_POST['logout']))
    {
        admin_log_out();
    }



    if(isset($_POST['submit']))
    {
        if(!empty($_POST['author']) && !empty($_POST['isn']) &&
            !empty($_POST['title']) && !empty($_POST['rprice']) && !empty($_POST['sprice']) )
        {
            if (!empty($_FILES['image']['name']))
            {
                $stringPos = strpos($_FILES['image']['name'], '.') + 1;

                $substring = substr($_FILES['image']['name'], $stringPos);

                $lower = strtolower($substring);

                $tmp = $_FILES['image']['tmp_name'];

                if ($lower == 'jpg' || $lower == 'png' || $lower == 'jpeg')
                {
                    $filecontent = addslashes(file_get_contents($tmp));

                    uploadData($_POST['author'], $_POST['isn'],$_POST['title'], $_POST['sprice'], $_POST['rprice'], $filecontent);

                    unset($_POST['submit']);



                }

                else
                {
                    $_SESSION['error'] = "Invalid image";
                }
            }
            else
            {
                $_SESSION['error'] = "You need to upload an image ";

            }

        }
        else
        {
            $_SESSION['error'] = "Please fill in the required fields";

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
<body id="bodyCenter">


            <div class="well-sm1" >
                <div class="collapse navbar-collapse" id="back">
                    <ul class="nav navbar-nav " id="navBar">

                        <li><img src="images/book6.jpg" width="30px" height="30px" >
                            <label id="header1">CampusBookRentals</label>
                            <small id="header2" >your alternative to textbooks</small>
                            <form method="post" action="">
                            <input id="adminlogout" type="submit" class="btn " name="logout" value="logout"/>
                            </form>

                    </ul>

                </div>
            </div>


        <div class="container" id="panelContainer">

            <div class="col-lg-6 col-md-offset-3" >  <!-- to centralized a divided column.. (12-colNum)/2 and u set the offset
                                                           to the value. e.g (12-6)/2. u set the offset to 3-->
                <div class="panel panel-default" >
                    <div class="page-header">

                        <h1>Data Input</h1>
                    </div>
                    <div class="panel-body panel-default">
                        <?php displayerror() ?>
                        <?php successPage() ?>
                        <form class="form-group" method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" size="80" placeholder="Author" name="author">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" size="80" placeholder="ISN" name="isn">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" size="80" placeholder="Book Title" name="title">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" size="80" placeholder="Return price" name="rprice">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" size="80" placeholder="Sales price" name="sprice">
                            </div>
                            <div class="form-group" id="move">
                                <label id="fileUpload">Upload an image representation </label>
                                <input type="file" class="form-control" size="80" name="image">
                            </div>

`                           <div class="form-group" id="button">
                                <input type="submit" value="Submit" class="btn" name="submit">
                            </div>

                        </form>
                    </div>


                </div>

            </div>

        </div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>