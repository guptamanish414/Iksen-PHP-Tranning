<?php
include('connection.php');
$name = $_REQUEST['name'];
$email = $_REQUEST['userid'];
$password = $_REQUEST['password'];
$dob = $_REQUEST['dob'];
$query = 'insert into exreg values("'.$name.'","'.$email.'",SHA("'.$password.'"),"'.$dob.'")';
if(!mysqli_query($con,$query))
{
	echo 'not iserted';
}
header('Location: login.html');
?>