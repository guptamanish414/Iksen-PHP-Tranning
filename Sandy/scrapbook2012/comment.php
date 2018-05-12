<?php

	session_start();
	if(isset($_SESSION['user']))
		$username=$_SESSION['user'];
	else
	{
		header('Location: login.html');
		exit();
	}

$by=$_REQUEST['by'];
$on=$_REQUEST['on'];
$post=$_REQUEST['post'];

include('config.php');
$sql = 'INSERT INTO comment (posted_by,post,posted_on,posted_when) VALUES("'.$by.'","'.$post.'","'.$on.'",CURDATE())';
mysqli_query($link, $sql);
header('Location: profile_friend.php?frnd='.$on.'');
exit();
?>