<?php
include('connect.php');
			$dealername=$_POST['dname'];
			$firmname=$_POST['fname'];
			$contact=$_POST['contact'];
			$address=$_POST['add'];
			$phone=$_POST['phone'];
			$productname =$_POST["product"];
            $cityname = $_POST["city"];
	mysql_query("delete from dealer where dealer_id='$_REQUEST[id]'");
	$sql=mysql_query("insert into `dealer`(`dealer_id`,`dealername`,`firmname`,`contact`,`address`,`phone`,`productname`,`cityname`) values ('$_REQUEST[id]','$dealername','$firmname','$contact','$address','$phone','$productname','$cityname')");
	header("location:adminview.php");

?>