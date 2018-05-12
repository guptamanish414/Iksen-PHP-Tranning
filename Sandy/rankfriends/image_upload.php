<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Sandeep Kumar Gupta
http://www.scrapbook2012.99k.org

Name       : Rank Friends  
Description: A site for fun and practice.
Version    : 1.0
Released   : 20120428

-->

<?php

$msg="";

if(!empty($_REQUEST['who'])) $name = $_REQUEST['who'];
if(!empty($_REQUEST['nickname'])) $nickname = $_REQUEST['nickname'];
if(!empty($_REQUEST['dept'])) $dept = $_REQUEST['dept'];
if(!empty($_REQUEST['gender']))
{
	if($_REQUEST['gender']=='Male') $tab = 'listboys';
	else if($_REQUEST['gender']=='Female') $tab = 'listgirls';
}

define ("MAX_SIZE","1000"); 

function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
}

$errors=0;

if(isset($_POST['Submit'])) 
{
 	$image=$_FILES['image']['name'];
 	if ($image) 
 	{
 		$filename = stripslashes($_FILES['image']['name']);
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
		
		if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
 			$msg = "<h3>Unknown extension!</h3>";
 			$errors=1;
 		}
 		else
 		{
			$size=filesize($_FILES['image']['tmp_name']);
			if ($size > MAX_SIZE*1024)
			{
				$msg = "<h3>You have exceeded the size limit!</h3>";
				$errors=1;
			}
			$image_name = $dept.'-'.$nickname.'-'.date("Y-m-d").'.'.$extension;
			
			$newname="images/".$image_name;

			include('config.php');
						
			$sql = 'INSERT INTO '.$tab.' (name,link) VALUES ("'.$name.'","'.$newname.'");';
			mysqli_query($link, $sql);

			if(empty($_FILES['image']['tmp_name']))
			{
				$msg = "<h3>Copy Unsuccessful!</h3>";
				$errors=1;
			}
			else
			{
				$copied = copy($_FILES['image']['tmp_name'], $newname);
				if (!$copied) 
				{
				$msg = "<h3>Copy Unsuccessfull!</h3>";
				$errors=1;
				}
			}
		}
	}
}

if(isset($_POST['Submit']) && !$errors) 
{
	$msg = "<h3><font color=red>File Uploaded Successfully!</font></h3>";
}

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>AddFriend</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1>Rank <span>Friends</span></h1>
			<p>who is most popular ?</p>
		</div>
	</div>
</div>
<div id="wrapper">
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title">Add a Friend.. </h2>
						
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
						<p>Before uploading an image verify - <br /><strong>1.</strong> Resolution is proportional to 214x210 approx. <strong>2.</strong> Try not to upload very large files. <strong>3.</strong> Extension should be -  jpg/jpeg/png/gif.</p>
						<p><strong>NOTE: </strong>Please do not upload images of person already present in rank list</p>
						<p><?php echo $msg;?></p>
							<form name="newad" method="post" enctype="multipart/form-data"  action="">
								<table cellspacing="20" cellpadding="5" style="background: whitesmoke">
									<tr>
										<td><strong>IMAGE : <strong></td>
										<td><input type="file" name="image" style="width: 550px;height: 30px;font-size: large;"></td>
									</tr>
									<tr>
										<td><strong>WHOSE PHOTO IS THIS : <strong></td>
										<td><input name="who" type="text" value="eg : Name Given by Parents..." onClick="this.value = null" style="width: 550px;height: 30px;font-size: large;" /></td>
									</tr>
									<tr>
										<td><strong>HIS/HER NICK NAME : <strong></td>
										<td><input name="nickname" type="text" value="eg : generally friends call" onClick="this.value = null" style="width: 550px;height: 30px;font-size: large;" /></td>
									</tr>
									<tr>
										<td><strong>HIS/HER DEPARTMENT : <strong></td>
										<td>
											<select name="dept" style="width: 550px;height: 30px;font-size: large;">
												<option>Select Department</option>
												<option>CSE</option>
												<option>ECE</option>
												<option>EE</option>
												<option>CE</option>
											</select>
										</td>
									</tr>
									<tr>
										<td><strong>HIS/HER GENDER : <strong></td>
										<td>
										<select name="gender" style="width: 550px;height: 30px;font-size: large;">
											<option>Select Gender</option>
												<option>Male</option>
												<option>Female</option>
										</select>
										</td>
									</tr>
									<tr align="center">
										<td colspan="2"><input name="Submit" type="submit" value="Upload Image" style="width: 200px;height: 40px;font-size: large;" /></td>
									</tr>
								</table>	
							</form>
							<p class="links">
							<a href="index.html">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="ranking.php?f=0">Boys Rankings</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="ranking.php?f=1">Girls Rankings</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="pollboys.php?f_i_id=1&l_i_id=2">Vote Boys</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="pollgirls.php?f_i_id=1&l_i_id=2">Vote Girls</a>
							</p>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
</body>
</html>
