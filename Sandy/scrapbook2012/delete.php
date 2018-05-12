<?php
	session_start();
	if(isset($_SESSION['user']))
	{
		$username=$_SESSION['user'];
		$name=$_SESSION['name'];
	}
	else
	{
		header('Location: login.html');
		exit();
	}
$id=$_REQUEST['id'];
$frnd=$_REQUEST['frnd'];

include('config.php');
$sql = 'SELECT * FROM comment WHERE ID="'.$id.'"';
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
$deleter1 = $row['posted_on'];
$deleter2 = $row['posted_by'];
if($deleter1==$username||$deleter2==$name)
{
$sql2 = 'DELETE FROM comment WHERE id="'.$id.'"';
mysqli_query($link, $sql2);
header('Location: profile_friend.php?frnd='.$frnd.'');
exit();
}
else
{
echo "<br />neither you posted this comment nor this was posted on your profile so you can't delete it.";
echo "<br /><a href=profile_friend.php?frnd=".$frnd.">BACK TO WHERE I WAS</a>";
}
?>