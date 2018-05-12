<?php
include'../includes/connection.php';
if(@$_REQUEST['act']=='login'){
	$query=mysql_query("select * from `tb_admin` where `user_name`='".$_REQUEST['user_name']."' and `password`='".$_REQUEST['password']."'");
	if(mysql_num_rows($query)>0){
		$row=mysql_fetch_array($query);
		$_SESSION['user_id']=$row['user_id'];
		echo "success";
	}else{
		echo "failure";
	}
}
?>