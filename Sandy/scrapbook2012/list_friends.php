
<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		header('Location: login.html');
		exit();
	}
	$link = mysqli_connect('localhost', 'root', 'root');
	mysqli_set_charset($link, 'utf8');
	mysqli_select_db($link, 'scrapbook2012');
	$sql = 'SELECT name,username FROM register WHERE department="'.$_REQUEST['dept'].'";';
	$result = mysqli_query($link, $sql);
?>
<html>
<head>
<title>Friend List</title>
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
				<h2 align="center">LIST  OF  <?php echo $_REQUEST['dept']; ?>  STUDENTS.</h2>
                                <p align="center">
                                    <table>
									<?php
									while ($row = mysqli_fetch_array($result))
									{
										echo "<tr><td style=font-size: large;font-family: sans-serif;><a href=profile_friend.php?frnd=".$row['username'].">".$row['name']."</a></td></tr>";
										
									}
									?>
                                    </table>
                                </p>
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


