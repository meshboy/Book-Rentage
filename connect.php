<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/01/15
 * Time: 1:28 PM
 */

    $localhost = 'localhost';
    $user = 'root';
    $password = 'mesh';
    $database = 'rentBook';

    mysql_connect($localhost, $user, $password) or die(mysql_error());
    mysql_select_db($database);
?>