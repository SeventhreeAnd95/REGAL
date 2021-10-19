<?php

/*$servername = "166.62.44.10:3306";
$username = "adminiid_member";
$password = "iclub@2018";
$dbname = "adminiid_member.iclub";*/

$servername = "166.62.44.10:3306";
$username = "adminiid_ic_admn";
$password = "iclub@2050";
$dbname = "adminiid_iclub";

/* Create connection */
$con =mysqli_connect($servername, $username, $password, $dbname);
/* Check connection */
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
?>