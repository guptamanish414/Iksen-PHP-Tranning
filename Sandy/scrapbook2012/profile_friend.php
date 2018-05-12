<?php
	session_start();
	if(isset($_SESSION['user']))
	{
		$username=$_SESSION['user'];
		$by=$_SESSION['name'];
	}
	else
	{
		header('Location: login.html');
		exit();
	}
	$link = mysqli_connect('localhost', 'root', 'root');
	mysqli_set_charset($link, 'utf8');
	mysqli_select_db($link, 'scrapbook2012');
	$sql = 'SELECT * FROM profile WHERE username="'.$_REQUEST['frnd'].'"';
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
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Friend Profile</title>
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
                        <img alt=""  src="<?php echo $photo;?>" width="185" height="245"/>
                    </div>
                    <div id="content-box2">
                        <h2><br /><br /><br /><br /><?php echo $name; ?></h2>
                    </div>
			<div class="box">
			<table cellspacing="15" cellpadding="5">
                                            <tr>
                                                <td><strong>Phone No. :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $phone_no;?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email ID :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $emailid;?></td>
                                            </tr>
											<tr>
                                                <td><strong>DOB :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $dob;?></td>
                                            </tr>
											<tr>
                                                <td><strong>Present Location :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $location;?></td>
                                            </tr>
											<tr>
                                                <td><strong>Working @ :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $workingat;?></td>
                                            </tr>
											<tr>
                                                <td><strong>In Relationship With :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $rel;?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>What interests me :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $like;?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>I hate to :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $hate; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>i liked most in college :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $likeclg;?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>i hated most in college :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $hateclg;?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>I will miss most :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo  $miss;?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>My best friends :</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $bstfrnds;?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>My dream:</strong></td>
                                                <td style="width: 570px;height: 30px;font-size: large;"><?php echo $dream;?></td>
                                            </tr>
                                            <tr><td></td></tr>
                                    </table>
									<form action="comment.php" method="post">
									<input type="hidden" name="by" value="<?php echo $by;?>" />
									<input type="hidden" name="on" value="<?php echo $_REQUEST['frnd'];?>" />
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
									$sql = 'SELECT * FROM comment WHERE posted_on="'.$_REQUEST['frnd'].'" ORDER BY id DESC';
									$result = mysqli_query($link, $sql);
									while($row = mysqli_fetch_array($result))
									{
										echo "<tr><td><b>".$row['posted_by']." said : </b>".$row['post']."</td>";
										echo "<td><a href=delete.php?id=".$row['id']."&frnd=".$_REQUEST['frnd'].">delete</a></td></tr>";
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
