<?php
session_start();
if(isset($_SESSION['user']))
	$username=$_SESSION['user'];
else
{
	header('Location: login.html');
	exit();
}

include('config.php');

if(!empty($_REQUEST['edphno']))
{
	$phno=$_REQUEST['edphno'];
	$sql = 'UPDATE profile SET phone_no="'.$phno.'" WHERE username="'.$username.'"';
	mysqli_query($link, $sql);
}

if(!empty($_REQUEST['edemailid']))
{	
	$email=$_REQUEST['edemailid'];
	$sql = 'UPDATE profile SET emailid="'.$email.'" WHERE username="'.$username.'"';
	mysqli_query($link, $sql);
}

if(!empty($_REQUEST['eddob']))
{
	$dob=$_REQUEST['eddob'];
	$sql = 'UPDATE profile SET dob="'.$dob.'" WHERE username="'.$username.'"';
	mysqli_query($link, $sql);
}

if(!empty($_REQUEST['edloc']))
{
	$loc=$_REQUEST['edloc'];
	$sql = 'UPDATE profile SET location="'.$loc.'" WHERE username="'.$username.'"';
	mysqli_query($link, $sql);
}

if(!empty($_REQUEST['edwork']))
{
	$work=$_REQUEST['edwork'];
	$sql = 'UPDATE profile SET workingat="'.$work.'" WHERE username="'.$username.'"';
	mysqli_query($link, $sql);
}

if(!empty($_REQUEST['edrel']))
{
	$rel=$_REQUEST['edrel'];
	$sql = 'UPDATE profile SET relationship="'.$rel.'" WHERE username="'.$username.'"';
	mysqli_query($link, $sql);
}

if(!empty($_REQUEST['edinterest']))
{
	$interest=$_REQUEST['edinterest'];
	$sql = 'UPDATE profile SET ilike="'.$interest.'" WHERE username="'.$username.'"';
	mysqli_query($link, $sql);
}

if(!empty($_REQUEST['edhate']))
{
	$hate=$_REQUEST['edhate'];
	$sql = 'UPDATE profile SET ihate="'.$hate.'" WHERE username="'.$username.'"';
	mysqli_query($link, $sql);
}

if(!empty($_REQUEST['edlikeclg']))
{
	$likeinclg=$_REQUEST['edlikeclg'];
	$sql = 'UPDATE profile SET loveinclg="'.$likeinclg.'" WHERE username="'.$username.'"';
	mysqli_query($link, $sql);
}

if(!empty($_REQUEST['edhateclg']))
{
	$hateinclg=$_REQUEST['edhateclg'];
	$sql = 'UPDATE profile SET hateinclg="'.$hateinclg.'" WHERE username="'.$username.'"';
	mysqli_query($link, $sql);
}

if(!empty($_REQUEST['edmiss']))
{
	$miss=$_REQUEST['edmiss'];
	$sql = 'UPDATE profile SET missmost="'.$miss.'" WHERE username="'.$username.'"';
	mysqli_query($link, $sql);
}

if(!empty($_REQUEST['edbstfrnd']))
{
	$bstfrnd=$_REQUEST['edbstfrnd'];
	$sql = 'UPDATE profile SET bestfriends="'.$bstfrnd.'" WHERE username="'.$username.'"';
	mysqli_query($link, $sql);
}

if(!empty($_REQUEST['eddream']))
{
	$dream=$_REQUEST['eddream'];
	$sql = 'UPDATE profile SET dream="'.$dream.'" WHERE username="'.$username.'"';
	mysqli_query($link, $sql);
}
header('Location: profile_my.php');
exit();

?>