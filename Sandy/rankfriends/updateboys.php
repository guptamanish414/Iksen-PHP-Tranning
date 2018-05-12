<?php

$count=$_REQUEST['count'];
$f_i_id=$_REQUEST['f_i_id'];
$l_i_id=$_REQUEST['l_i_id'];
$id=$_REQUEST['id'];
$f=$_REQUEST['f'];
echo $f;

include('config.php');

$sql = 'UPDATE listboys SET rank=rank+1 where id='.$id.'';
mysqli_query($link, $sql);

if($f_i_id==$count-1)
{
	header('Location: ranking.php?f=0');
}
else if($l_i_id<$count)
{
	$l_i_id=$l_i_id+1;
	header('Location: pollboys.php?f_i_id='.$f_i_id.'&l_i_id='.$l_i_id.'');
}
else if($l_i_id=$count)
{
	$f_i_id=$f_i_id+1;
	$l_i_id=$f_i_id+1;
	header('Location: pollboys.php?f_i_id='.$f_i_id.'&l_i_id='.$l_i_id.'');
}

?>