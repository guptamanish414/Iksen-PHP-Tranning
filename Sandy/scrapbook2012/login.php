<?php
$username=$_REQUEST['loginid'];
$password=$_REQUEST['loginpassword'];

include('config.php');
$sql = 'SELECT COUNT(*) AS COUNT FROM register where username="'.$username.'" AND password="'.$password.'"';
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
  if($row['COUNT']=='1')
  {
	$sqlname = 'SELECT name FROM register where username="'.$username.'"';
	$resultname = mysqli_query($link, $sqlname);
	$rowname = mysqli_fetch_array($resultname);
	$name = $rowname['name'];
	session_start();
	$_SESSION['user']=$username;
	$_SESSION['name']=$name;
	header('Location: profile_my.php');
	exit();
  }
  else
  {
  echo "<br /> USERNAME OR PASSWORD IS WRONG.....TRY AGAIN!!!";
  echo "<br /><a href=login.html>TAKE ME TO LOGIN PAGE</a>";
  }
?>