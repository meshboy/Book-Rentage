<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/01/15
 * Time: 8:09 AM
 */

require_once 'configFile.php';

class dbhandler
{
    private $hostname;
    private $username;
    private $password;
    private $dbName;
    private $connect;

    public  function __construct($hostname, $username, $password)
    {
        $this -> hostname = $hostname;
        $this -> username = $username;
        $this -> password = $password;

        $this ->connect = mysql_connect($this->hostname, $this->username, $this->password) or die(mysql_error());


    }

    public function selectDatabase($dbName)
    {
        $this ->dbName = $dbName;

        mysql_select_db($this ->dbName) or die(mysql_error());
    }
}