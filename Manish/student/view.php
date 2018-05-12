<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>view</title>
</head>

<body>
<?php
include ('connect.php');
$sql=mysqli_query("select * from 'student'");
mysqli_num_rows($sql);
?>
<table>

<tr>
<td>Id</td>
<td>Name</td>
<td>Roll</td>
</tr>
<?php
if(mysqli_num_rows($sql)>0)
{
while($info=mysqli_fetch_array($sql))
{
<tr>
<td><?php echo $info['name']?></td>
<td><?php echo $info['rollno']?></td>
</tr>
}
</table>
}
?>
</body>
</html>
