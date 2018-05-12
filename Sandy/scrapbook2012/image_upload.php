<?php
$msg="";
session_start();
if(isset($_SESSION['user']))
	$username=$_SESSION['user'];
else
{
	header('Location: login.html');
	exit();
}

//define a maxim size for the uploaded images in Kb
 define ("MAX_SIZE","100"); 

//This function reads the extension of the file. It is used to determine if the
// file  is an image by checking the extension.
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }

//This variable is used as a flag. The value is initialized with 0 (meaning no 
// error  found)  
//and it will be changed to 1 if an errro occures.  
//If the error occures the file will not be uploaded.
 $errors=0;
//checks if the form has been submitted
 if(isset($_POST['Submit'])) 
 {
 	//reads the name of the file the user submitted for uploading
 	$image=$_FILES['image']['name'];
 	//if it is not empty
 	if ($image) 
 	{
 	//get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['image']['name']);
 	//get the extension of the file in a lower case format
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
 	//if it is not a known extension, we will suppose it is an error and 
        // will not  upload the file,  
	//otherwise we will do more tests
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		//print error message
 			$msg = "<h3>Unknown extension!</h3>";
 			$errors=1;
 		}
 		else
 		{
//get the size of the image in bytes
 //$_FILES['image']['tmp_name'] is the temporary filename of the file
 //in which the uploaded file was stored on the server
 $size=filesize($_FILES['image']['tmp_name']);

//compare the size with the maxim size we defined and print error if bigger
if ($size > MAX_SIZE*1024)
{
	$msg = "<h3>You have exceeded the size limit!</h3>";
	$errors=1;
}

//we will give an unique name, for example the time in unix time format
$image_name=time().'.'.$extension;
//the new name will be containing the full path where will be stored (images 
//folder)

$newname="user_images/".$image_name;

include('config.php');
$sql = 'UPDATE profile SET photo="'.$newname.'" WHERE username="'.$username.'"';
mysqli_query($link, $sql);

//we verify if the image has been uploaded, and print error instead
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
}}
}}}

//If no errors registred, print the success message
 if(isset($_POST['Submit']) && !$errors) 
 {
 	$msg = "<h3>File Uploaded Successfully!</h3><a href=profile_my.php>GO TO MY PROFILE</a>";
 }

 ?>

 <!--next comes the form, you must set the enctype to "multipart/frm-data" 
and use an input type "file" -->
  
 <html>
<head>
<title>Image Upload</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Passouts 2012</a></h1>
		</div>
	</div>
	<div id="menu">
		
		<br class="clearfix" />
	</div>
	<div id="page">
		<div id="content">
		<h2>Welcome to 2012 Passouts YearBook Image Upload Section</h2>
		<div id="content-box1" align="left">
		<p>Image being uploaded should be:-<br/>1. Extionsion - jpg or jpeg or gif or png<br />2. Best view if the resolution is - multiple of (185x245)</p>
		</div>
		<div id="content-box2">
				<form name="newad" method="post" enctype="multipart/form-data"  action="">
					<table cellspacing="15" cellpadding="5" style="background: ghostwhite" align="center">
						<tr><td><input type="file" name="image" style="width: 550px;height: 30px;font-size: large;"></td></tr>
						<tr><td><input name="Submit" type="submit" value="Upload Image" style="background-color: gray;color: white;border: gray;font-size: large;padding: 5px 5px 5px 5px;border-style: outset;" />
						</td></tr>
					</table>	
				</form>
				<?php echo $msg; ?>
		</div>
		</div>
		
		<br class="clearfix" />
	</div>
	<div id="page-bottom">
		<p align="center"><a>Compiled & Designed by Sandeep Kumar Gupta CSE Department</a></p>
		<br class="clearfix" />
	</div>
</div>
<div id="footer">
</div>
</body>
</html>