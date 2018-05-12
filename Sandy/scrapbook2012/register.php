<?php

$name=$_REQUEST['selectname'];
$loginid=$_REQUEST['selectloginid'];
$password=$_REQUEST['selectloginpassword'];
$department=$_REQUEST['selectdepartment'];
$question=$_REQUEST['selectsecurityquestion'];
$answer=$_REQUEST['selectsecurityanswer'];

include('config.php');


$chksql = 'SELECT COUNT(*) AS COUNT FROM register where username="'.$loginid.'"';
$chkresult = mysqli_query($link, $chksql);
$chkrow = mysqli_fetch_array($chkresult);
  if($chkrow['COUNT']=='1')
  {
	echo "<br /> USERNAME EXISTS.....TRY AGAIN WITH ANOTHER USERNAME!!!";
	echo "<br /><a href=register.html>TAKE ME TO REGISTER PAGE</a>";
  }
  else
  {
	$sql = 'INSERT INTO register VALUES("'.$loginid.'","'.$password.'","'.$department.'","'.$question.'","'.$answer.'","'.$name.'")';
	mysqli_query($link, $sql);
	$sql2 = 'INSERT INTO profile (username,name) VALUES("'.$loginid.'","'.$name.'")';
	mysqli_query($link, $sql2);
	$sql3 = 'INSERT INTO comment (posted_by,post,posted_on,posted_when) VALUES("admin","Thanks for registering and WELCOME 2 scrapbook2012","'.$loginid.'",CURDATE())';
	mysqli_query($link, $sql3);
	echo "<br />Successfully Regitered<br /><a href=login.html>Please login to continue...</a>";
  }
?>