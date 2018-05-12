<?php
include('connection.php');
if(isset($_REQUEST['action']) && $_REQUEST['action']=='insert')
{
$Name=$_GET["name"];
$Rollno=$_GET["rollno"];
$query =("insert into 'student'(name, rollno) values('$Name','$Rollno')");
mysqli_query($con,$query);
}
?>