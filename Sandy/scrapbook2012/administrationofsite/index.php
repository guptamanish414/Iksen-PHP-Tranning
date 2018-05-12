<?php

if (!empty($_REQUEST['adminid'])&&!empty($_REQUEST['adminflag'])) {
	if($_REQUEST['adminid']=='admin'&&$_REQUEST['adminpassword']=='admin')
	{
		session_start();
		$_SESSION['admin']=$_REQUEST['adminid'];
		header('Location: showData.php?adminflag=2');
		exit();
	}
	else
	{
	echo
		'<br>WRONG ADMIN USERID AND PASSWORD.<br>
		UNLESS ADMIN YOU ARE NOT AUTHORISED TO VIEW THIS PAGE - 
		<a href="/../scrapbook2012">GO BACK TO THE SITE</a><br>
		ELSE - <a href="index.php">GO BACK TO ADMIN LOGIN PAGE</a>';
	}
}

?>

<html>
<head>
	<title>administration</title>
</head>

<script type="text/javascript">
	function chk()
	{
		var a=document.getElementById("adminid").value;
		var p=document.getElementById("adminpassword").value;	
		if(a==""||a==NULL||p==""||p==NULL)
		{
			alert("You Must Enter Both Field Values");
			return false;
		}
		else{return true;}
	}
</script>

<body>

<?php

if (empty($_REQUEST['adminid'])&&empty($_REQUEST['adminflag'])) {
echo	'<p align="center" style="font-size: x-large;"><br /><strong>ADMIN LOGIN</strong></p>
		<form action="index.php" method="post" onsubmit="return chk();">
			<table cellspacing="10" cellpadding="10" style="background: whitesmoke" align="center">
			<tr>
				<td style="font-size: large;">Admin Id : </td>
				<td><input type="password" name="adminid" id="adminid" style="width: 200px;height: 25px;font-size: large;"></td>
			</tr>
			<tr>
				<td style="font-size: large;">Admin Password : </td>
				<td><input type="password" name="adminpassword" id="adminpassword" style="width: 200px;height: 25px;font-size: large;"></td>
			</tr>
			<tr>
				<td></td>
				<td align="right"><input type="submit" value="ADMIN LOGIN" ></td>
			</tr>
			</table>
			<input type="hidden" name="adminflag" value="1">
		</form>';
}

?>

<?php

if(!empty($_REQUEST['adminflag']))
{
	if($_REQUEST['adminflag']=='2')
	{
		header('Location: showData');
		exit();
	}
}

?>
</body>
</html>