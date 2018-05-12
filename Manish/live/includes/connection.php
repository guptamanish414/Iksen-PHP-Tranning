<?php 
ob_start();
session_start();
$con=mysql_connect('localhost','root','root') or die("Could not connect to host");
if($con){
mysql_select_db('db_live',$con) or die("Could not connect to Database");
}
?>