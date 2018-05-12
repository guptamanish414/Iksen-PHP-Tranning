<?php
$dbhost		= "localhost";
$dbusername 	= "root";
$dbpassword     = "root";
$dbname 	= "storelocator";
$db = mysql_connect($dbhost, $dbusername, $dbpassword) or die(mysql_error());
mysql_select_db($dbname,$db);
?>