<?php
$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="driver";
$con=mysql_connect($dbhost, $dbusername, $dbpassword) or die(mysql_error());
mysql_select_db($dbname,$con);
?>

