<?php
include('connection.php');
$Email_id=$_GET["Email_id"];
$Password=$_GET["password"];
$query = "insert into logged_in(Email_id, Password) values('$Email_Id', '$Password')";
mysqli_query($query);
?>