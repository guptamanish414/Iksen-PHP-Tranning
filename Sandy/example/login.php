<?php
include('connection.php');
$email = $_REQUEST['userid'];
$password = $_REQUEST['password'];
$query = 'select COUNT(*) as COUNT from exreg where email = "'.$email.'" and password = SHA("'.$password.'")';
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
  if($row['COUNT']=='1')
  {
	header('Location: home.html');
	exit();
  }
  else
  {
  	header('Location: index.html');
	exit();
  }
?>