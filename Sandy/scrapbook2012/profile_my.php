<?php
	session_start();
	if(isset($_SESSION['user']))
		$username=$_SESSION['user'];
	else
	{
		header('Location: login.html');
		exit();
	}
	$link = mysqli_connect('localhost', 'root', 'root');
	mysqli_set_charset($link, 'utf8');
	mysqli_select_db($link, 'scrapbook2012');
	$sql = 'SELECT * FROM profile WHERE username="'.$username.'"';
	$result = mysqli_query($link, $sql);
	$row = mysqli_fetch_array($result);
	$name=$row['name'];
	$phone_no=$row['phone_no'];
	$emailid=$row['emailid'];
	$dob=$row['dob'];
	$location=$row['location'];
	$workingat=$row['workingat'];
	$rel=$row['relationship'];
	$like=$row['ilike'];
	$hate=$row['ihate'];
	$likeclg=$row['loveinclg'];
	$hateclg=$row['hateinclg'];
	$miss=$row['missmost'];
	$bstfrnds=$row['bestfriends'];
	$dream=$row['dream'];
	$photo=$row['photo'];
?>
<head>
<title>myprofile</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript">
function save(){
	document.forms["theForm"].action="edit.php";
	document.forms["theForm"].submit();
}
function visphno(){
	document.getElementById('phnoed').style.display = "table-row";
	document.getElementById('phno').style.display = "none";
}
function visemailid(){
	document.getElementById('emailided').style.display = "table-row";
	document.getElementById('emailid').style.display = "none";
}
function visdob(){
	document.getElementById('dobed').style.display = "table-row";
	document.getElementById('dob').style.display = "none";
}
function visloc(){
	document.getElementById('loced').style.display = "table-row";
	document.getElementById('loc').style.display = "none";
}
function viswork(){
	document.getElementById('worked').style.display = "table-row";
	document.getElementById('work').style.display = "none";
}
function visrel(){
	document.getElementById('reled').style.display = "table-row";
	document.getElementById('rel').style.display = "none";
}
function visinterest(){
	document.getElementById('interested').style.display = "table-row";
	document.getElementById('interest').style.display = "none";
}
function vishate(){
	document.getElementById('hateed').style.display = "table-row";
	document.getElementById('hate').style.display = "none";
}
function vislikeclg(){
	document.getElementById('likeclged').style.display = "table-row";
	document.getElementById('likeclg').style.display = "none";
}
function vishateclg(){
	document.getElementById('hateclged').style.display = "table-row";
	document.getElementById('hateclg').style.display = "none";
}
function vismiss(){
	document.getElementById('missed').style.display = "table-row";
	document.getElementById('miss').style.display = "none";
}
function visbstfrnd(){
	document.getElementById('bstfrnded').style.display = "table-row";
	document.getElementById('bstfrnd').style.display = "none";
}
function visdream(){
	document.getElementById('dreamed').style.display = "table-row";
	document.getElementById('dream').style.display = "none";
}
</script>
</head>
<body>
<div id="wrapper">
  <div id="header">
    <div id="logo">
      <h1><a href="#">Passouts 2012</a></h1>
    </div>
  </div>
  <div id="menu">
  <ul>
	<li><a href="profile_my.php">MY PROFILE</a></li>
	<li>|</li>
	<li>VIEW LIST OF - ></li>
	<li><a href="list_friends.php?dept=CSE">CSE</a></li>
	<li><a href="list_friends.php?dept=ECE">ECE</a></li>
	<li><a href="list_friends.php?dept=EE">EE</a></li>
	<li><a href="list_friends.php?dept=CE">CE</a></li>
	<li>|</li>
	<li><a href="logout.php">LOGOUT</a></li>
	</ul>
	
    <br class="clearfix" />
  </div>
  <div id="page">
    <div id="content">
                     <div id="content-box1">
                        <img alt=""  src="<?php echo $photo;?>" width="185" height="245"/><br /><a href="image_upload.php">UPLOAD/CHANGE IMAGE</a>
                    </div>
                    <div id="content-box2">
                        <h2><br /><br /><br /><br /><?php echo $name;?></h2>
                    </div>
      <div class="box"><br />
		<form action="" id="theForm" method="post">
                                <table cellspacing="15" cellpadding="5">
                                            <tr id="phno">
                                                <td><strong>Phone No. :</strong></td>
                                                <td style="width: 520px;height: 30px;font-size: large;"><?php echo $phone_no;?></td>
												<td><a href="javascript: visphno();">edit</a></td>
                                            </tr>
											<tr id="phnoed" style="display: none;">
												<td><strong>Phone No. :</strong></td>
												<td><input type="text" name="edphno" style="width: 550px;height: 30px;font-size: large;"><?php echo $phone_no;?></td>
												<td><a href="javascript: save()">Save</a></td>
											</tr>
											
                                            <tr id="emailid">
                                                <td><strong>Email ID :</strong></td>
                                                <td style="width: 520px;height: 30px;font-size: large;"><?php echo $emailid; ?></td>
												<td><a href="javascript: visemailid();">edit</a></td>
                                            </tr>
											<tr id="emailided" style="display: none;">
												<td><strong>Email ID :</strong></td>
												<td><input type="text" name="edemailid" style="width: 550px;height: 30px;font-size: large;"><?php echo $emailid; ?></td>
												<td><a href="javascript: save()">Save</a></td>
                                            </tr>
											
											<tr id="dob">
                                                <td><strong>DOB :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $dob;?></td>
												<td><a href="javascript: visdob();">edit</a></td>
                                            </tr>
											<tr id="dobed" style="display: none;">
												<td><strong>DOB :</strong></td>
												<td><input type="text" name="eddob" style="width: 550px;height: 30px;font-size: large;" value="<?php echo $dob;?>" onclick="this.value=null" /><?php echo $dob;?></td>
												<td><a href="javascript: save()">Save</a></td>
                                            </tr>
											
											<tr id="loc">
                                                <td><strong>Present Location :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $location;?></td>
												<td><a href="javascript: visloc();">edit</a></td>
                                            </tr>
											<tr id="loced" style="display: none;">
												<td><strong>Present Location :</strong></td>
												<td><input type="text" name="edloc" style="width: 550px;height: 30px;font-size: large;"><?php echo $location;?></td>
												<td><a href="javascript: save()">Save</a></td>
                                            </tr>
											
											<tr id="work">
                                                <td><strong>Working @ :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $workingat;?></td>
												<td><a href="javascript: viswork();">edit</a></td>
                                            </tr>
											<tr id="worked" style="display: none;">
												<td><strong>Working @ :</strong></td>
												<td><input type="text" name="edwork" style="width: 550px;height: 30px;font-size: large;"><?php echo $workingat;?></td>
												<td><a href="javascript: save()">Save</a></td>
                                            </tr>
											
                                            <tr id="rel">
                                                <td><strong>In Relationship With :</strong></td>
                                                <td style="width: 520px;height: 30px;font-size: large;"><?php echo $rel;?></td>
												<td><a href="javascript: visrel();">edit</a></td>
                                            </tr>
											<tr id="reled" style="display: none;">
												<td><strong>In Relationship With :</strong></td>
												<td><input type="text" name="edrel" style="width: 550px;height: 30px;font-size: large;"><?php echo $rel;?></td>
												<td><a href="javascript: save()">Save</a></td>
                                            </tr>
											
                                            <tr id="interest">
                                                <td><strong>What interests me :</strong></td>
                                                <td style="width: 520px;height: 30px;font-size: large;"><?php echo $like;?></td>
												<td><a href="javascript: visinterest();">edit</a></td>
                                            </tr>
											<tr id="interested" style="display: none;">
												<td><strong>What interests me :</strong></td>
												<td><input type="text" name="edinterest" style="width: 550px;height: 30px;font-size: large;"><?php echo $like;?></td>
												<td><a href="javascript: save()">Save</a></td>
                                            </tr>
											
                                            <tr id="hate">
                                                <td><strong>I hate to :</strong></td>
                                                <td style="width: 520px;height: 30px;font-size: large;"><?php echo $hate;?></td>
												<td><a href="javascript: vishate();">edit</a></td>
                                            </tr>
											<tr id="hateed" style="display: none;">
												<td><strong>I hate to :</strong></td>
												<td><input type="text" name="edhate" style="width: 550px;height: 30px;font-size: large;"><?php echo $hate;?></td>
												<td><a href="javascript: save()">Save</a></td>
                                            </tr>
											
                                            <tr id="likeclg">
                                                <td><strong>i liked most in college :</strong></td>
                                                <td style="width: 520px;height: 30px;font-size: large;"><?php echo $likeclg;?></td>
												<td><a href="javascript: vislikeclg();">edit</a></td>
                                            </tr>
											<tr id="likeclged" style="display: none;">
												<td><strong>i liked most in college :</strong></td>
												<td><input type="text" name="edlikeclg" style="width: 550px;height: 30px;font-size: large;"><?php echo $likeclg;?></td>
												<td><a href="javascript: save()">Save</a></td>
                                            </tr>
											
                                            <tr id="hateclg">
                                                <td><strong>i hated most in college :</strong></td>
                                                <td style="width: 520px;height: 30px;font-size: large;"><?php echo $hateclg;?></td>
												<td><a href="javascript: vishateclg();">edit</a></td>
                                            </tr>
											<tr id="hateclged" style="display: none;">
												<td><strong>i hated most in college :</strong></td>
												<td><input type="text" name="edhateclg" style="width: 550px;height: 30px;font-size: large;"><?php echo $hateclg;?></td>
												<td><a href="javascript: save()">Save</a></td>
                                            </tr>
											
                                            <tr id="miss">
                                                <td><strong>I will miss most :</strong></td>
                                                <td style="width: 520px;height: 30px;font-size: large;"><?php echo $miss;?></td>
												<td><a href="javascript: vismiss();">edit</a></td>
                                            </tr>
											<tr id="missed" style="display: none;">
												<td><strong>I will miss most :</strong></td>
												<td><input type="text" name="edmiss" style="width: 550px;height: 30px;font-size: large;"><?php echo $miss;?></td>
												<td><a href="javascript: save()">Save</a></td>
                                            </tr>
											
                                            <tr id="bstfrnd">
                                                <td><strong>My best friends :</strong></td>
                                                <td style="width: 520px;height: 30px;font-size: large;"><?php echo $bstfrnds;?></td>
												<td><a href="javascript: visbstfrnd();">edit</a></td>
                                            </tr>
											<tr id="bstfrnded" style="display: none;">
												<td><strong>My best friends :</strong></td>
												<td><input type="text" name="edbstfrnd" style="width: 550px;height: 30px;font-size: large;"><?php echo $bstfrnds;?></td>
												<td><a href="javascript: save()">Save</a></td>
                                            </tr>
											
                                            <tr id="dream">
                                                <td><strong>My dream:</strong></td>
                                                <td style="width: 520px;height: 30px;font-size: large;"><?php echo $dream;?></td>
												<td><a href="javascript: visdream();">edit</a></td>
                                            </tr>
											<tr id="dreamed" style="display: none;">
												<td><strong>My dream:</strong></td>
												<td><input type="text" name="eddream" style="width: 550px;height: 30px;font-size: large;"><?php echo $dream;?></td>
												<td><a href="javascript: save()">Save</a></td>
                                            </tr>
											
                                            <tr><td></td></tr>
                                    </table>
									</form>
									<form action="comment.php" method="post">
									<input type="hidden" name="by" value="<?php echo $name;?>" />
									<input type="hidden" name="on" value="<?php echo $username;?>" />
									<table cellspacing="15">
									<tr>
									<td><font color="blue" style="font-size: x-large;">Comment</font></td>
									<td><input type="text" name="post" style="width: 600px;height: 30px;font-size: large;" /></td>
									<td><input type="submit" value="POST" style="background-color: gray;color: wheat;border: gray;font-size: large;padding: 2px 2px 2px 2px;border-style: outset;"/></td>
									</tr></table>
									</form>
									<p align="center"><h3>Previous Comments</h3>
									<table cellspacing="10" cellpadding="10" style="background-color: whitesmoke;" width="750";>
									<?php
									$sql = 'SELECT * FROM comment WHERE posted_on="'.$username.'" ORDER BY id DESC';
									$result = mysqli_query($link, $sql);
									while($row = mysqli_fetch_array($result))
									{
										echo "<tr><td><b>".$row['posted_by']." said : </b>".$row['post']."</td>";
										echo "<td><a href=delete.php?id=".$row['id']."&frnd=".$username.">delete</a></td></tr>";
										echo "<tr><td>----------------------------------------------------------------------------------------------------------</td></tr>";
									}
									?>
									</table>
                                
      </div>
      <br class="clearfix" />
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