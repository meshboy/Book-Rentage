<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/01/15
 * Time: 8:10 AM
 */
require_once 'dbHandler.php';
ob_start();
session_start();

class configFile
{
    CONST hostname ='localhost';
    CONST username ='root';
    CONST password = 'mesh';
    CONST database = 'rentBook';
    CONST dir= 'http://localhost/phpProjects/projectworks/bookrentage/';
}

require 'functions.php';

?>