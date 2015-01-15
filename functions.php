<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13/01/15
 * Time: 3:46 PM
 */

function login($emailAdd, $password)
{
    $db = new dbHandler(configFile::hostname, configFile::username, configFile::password);
    $db ->selectDatabase(configFile::database);


    $emailAdd = strip_tags(mysql_real_escape_string($emailAdd));
    $password = strip_tags(mysql_real_escape_string($password));

    $newPassword = md5($password);


    $query = "select * from `table` where `email` = '$emailAdd' and `password` = '$newPassword'";

    if ($result = mysql_query($query))
    {
        $row = mysql_num_rows($result);

        if ($row == 1)
        {
            $_SESSION['authorized'] = 1;
            $_SESSION['user'] = $emailAdd;

            header("Location:".configFile::dir."buy.php");
        }

        else
        {
            $_SESSION['error'] = "Invalid Email/Password";

        }
    }

}
function  adminlogin($user, $pass)
{
    $db = new dbHandler(configFile::hostname, configFile::username, configFile::password);
    $db ->selectDatabase(configFile::database);


    $user = strip_tags(mysql_real_escape_string($user));
    $pass = strip_tags(mysql_real_escape_string($pass));

    $query = "select * from `admin` where `username`= '$user' and `password` = '$pass'";

    if($result = mysql_query($query))
    {
        $rows = mysql_num_rows($result);

        if ($rows == 1)
        {
            $_SESSION['authorized'] =2;
            $_SESSION['user'] = $user;
            header("Location:".configFile::dir."adminPage.php");
        }

        else
        {
            $_SESSION['error'] = "Invalid administrative username or password";

        }
    }

}


function login_in()
{
    if(isset($_SESSION['authorized']))
    {
        if ($_SESSION['authorized'] ==1)
        {
            return true;

        }
        else
        {
            return false;
        }
    }

}

function admin_log_in()
{
    if(isset($_SESSION['authorized']))
    {
        if($_SESSION['authorized'] ==2)
        {
            return true;
        }
        else
        {
            return false;

        }
    }

}

function login_required()
{
    if (login_in())
    {
        return true;
    }
    else
    {
        header("Location:".configFile::dir."loginPage.php");
        exit();
    }

}
function admin_required()
{
    if (admin_log_in())
    {
        return true;
    }
    else
    {
        header("Location:".configFile::dir."adminPage.php");
        exit();

    }

}

function displayName()
{
    $db = new dbHandler(configFile::hostname, configFile::username, configFile::password);
    $db ->selectDatabase(configFile::database);

    $email = $_SESSION['user'];

    $query = "select * from `table` where `email` = '$email' ";

    if ($result = mysql_query($query))
    {
        while ($myName =mysql_fetch_array($result))
        {
            echo $myName['name'];
        }

    }

}

function register($name, $email, $password, $country)
{
    $db = new dbHandler(configFile::hostname, configFile::username, configFile::password);
    $db ->selectDatabase(configFile::database);

    $name = strip_tags(mysql_real_escape_string($name));
    $email= strip_tags(mysql_real_escape_string($email));
    $password = strip_tags(mysql_real_escape_string($password));
    $country = strip_tags(mysql_real_escape_string($country));

    $newpass = md5($password);

    $query = "insert into `table` (`name`, `email`, `password`, `country`) values ('$name', '$email', '$newpass', '$country')" or die(mysql_error());

     if (ereg("^[a-z]+@[a-z]+\\.com$", $email))
     {
            $result = mysql_query($query);

            header("Location:".configFile::dir."loginPage.php");

     }

    else
    {
       $_SESSION['error'] = "Invalid Email Address";

    }




}

function logout()
{
    unset($_SESSION['authorized']);

    header("Location:".configFile::dir."loginPage.php");

}
function admin_log_out()
{
    unset($_SESSION['authorized']);

    header("Location:".configFile::dir."loginAdmin.php");

}

function uploadData($author, $isn, $title, $sprice, $rprice, $filesize)
{
    $db = new dbHandler(configFile::hostname, configFile::username, configFile::password);
    $db -> selectDatabase(configFile::database);

    $author = strip_tags(mysql_real_escape_string($author));
    $isn = strip_tags(mysql_real_escape_string($isn));
    $sprice = strip_tags(mysql_real_escape_string($sprice));
    $rprice = strip_tags(mysql_real_escape_string($rprice));




    $query = "insert into `data` (`title`, `author`,`sellingPrice`, `ReturnPrice`, `isn`, `fileSize` )
    values ('$title', '$author', '$sprice', '$rprice', '$isn','$filesize') " or die(mysql_error());



        if( $result = mysql_query($query))
       {
           $_SESSION['success'] = "Data Submitted Successfully";




       }

        else
        {
            $_SESSION['error'] = "Data submission failed";
        }
       // move_uploaded_file($tmp_name, $fileLocation);




}

function myCart ()
{
    $db = new dbHandler(configFile::hostname, configFile::username, configFile::password);
    $db ->selectDatabase(configFile::database);

    $user = $_SESSION['user'];

    $query = "select `id` from `Cart` where `user` = '$user' " or die(mysql_error());

    $result = mysql_query($query);

    if ($result = mysql_query($query))
    {
        while ($myName =mysql_fetch_array($result))
        {
            echo $myName['user'];
        }

    }
}

function displayData()
{
    $db = new dbHandler(configFile::hostname, configFile::username, configFile::password);
    $db ->selectDatabase(configFile::database);


    $query = "select * from `data`";

    if ($result = mysql_query($query) or die(mysql_error()))
    {



        if ($sql = mysql_fetch_array($result))
        {

            echo "<table>";

            echo "<tr>";

                echo "<td>";

                        echo $sql['title'];

                    echo "</td>";


                echo "<td>";

                      echo $sql['author'];

                echo "</td>";

                echo "<td>";

                      echo $sql['isn'];

                echo "</td>";


                echo "<td>";

                     echo $sql['fileSize'];

                 echo "</td>";


            echo "</tr>";


            echo "</table>";



        }



    }


}


function forgotPass($mail)
{
    $mail = strip_tags(mysql_real_escape_string($mail));


    $subject = "Forgot Password";
    $header = "Book Rentage";

    $to = "meshileyaseun@gmail.com";

    $body = "";

    $db = new dbHandler(configFile::hostname, configFile::username, configFile::password);
    $db ->selectDatabase(configFile::database);
    $query = "select `email` from `table` where `email` = '$mail'";

    $confirmMail ="";

    $result = mysql_query($query);

    while ($fetch = mysql_fetch_array($result))
    {

           $confirmMail = $fetch['email'];
    }

    if($confirmMail === $mail)
    {
        mail($to, $subject, $body, $header);

        $_SESSION['success'] = "We will contact you as soon as possible";

    }


    else
    {
        $_SESSION['error'] = "Sorry, you are not yet registered";

    }





}



function displayerror()
{
    $errormsg ="";

    if (isset($_SESSION['error']))
    {
        if($_SESSION['error'] != '')
        {
            $errormsg = "<div class='alert alert-danger' >".$_SESSION['error']."</div>";
        }
    }

    echo $errormsg;

    $_SESSION['error']="";
}

function successPage()
{
    $msg = "";

    if (isset($_SESSION['success'] ))
    {
        if(($_SESSION['success']) != '')
        {
            $msg= "<div class='alert alert-success'>".$_SESSION['success']."</div>";
        }
    }
    echo $msg;

    $_SESSION['success'] = "";


}

?>