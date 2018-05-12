<?php
include('connect.php');
mysql_query("delete from dealer where dealer_id='$_REQUEST[id]'");
header("location:adminview.php");


?>