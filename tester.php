<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14/01/15
 * Time: 9:38 AM
 */



    if (isset ($_POST['submit']))
    {
        $imageName = $_FILES['myupload']['name'];
        $imageSize = $_FILES['myupload']['size'];
        $imageType = $_FILES['myupload']['type'];

        $temLocation = $_FILES['myupload']['tmp_name'];

        $Location = 'uploads/';




        move_uploaded_file($temLocation, $Location.basename($imageName));


        echo $imageName;
        echo $imageSize;
        echo $imageType;

        /**
         * {
        uploadData($_POST['title'],$_POST['author'], $_POST['sprice'], $_POST['rprice'], $_POST['isn'], '$location');
        }

         */




    }





 ?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="myupload">
    <input type="submit" name="submit">

</form>