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
	$f = $_REQUEST['f'];
	if($f==0) $tab = 'listboys';
	else if($f==1) $tab = 'listgirls';
	
	include('config.php');
		
	$sql = 'SELECT link,name,rank FROM '.$tab.' ORDER BY rank DESC;';
	$result = mysqli_query($link, $sql);
	$rank=1;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Rank</title>
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
						<h2 class="title">Rank Wise List... </h2>
						
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<table cellspacing="20" style="background: whitesmoke">
								<tr align="center"><th>RANK</th><th>PHOTO</th><th>NAME</th><th>VOTES</th></tr>
									<?php
									while ($row = mysqli_fetch_array($result))
									{
										echo "<tr align=center><td>".$rank."</td><td><img src=".$row['link']." width=50 height=50 onmouseover='this.height = 210;this.width = 214' onmouseout='this.height = 50;this.width = 50'></td><td>".$row['name']."</td><td>".$row['rank']."</td></tr>";
										$rank=$rank+1;
									}
									?>
							</table>
							<p class="links">
							<a href="index.html">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="pollgirls.php?f_i_id=1&l_i_id=2">Vote Girls</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="pollboys.php?f_i_id=1&l_i_id=2">Vote Boys</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="ranking.php?f=0">Boys Rankings</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="ranking.php?f=1">Girls Rankings</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="image_upload.php">Add a Friend</a>
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
