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
	$f_i_id = $_REQUEST['f_i_id'];
	$l_i_id = $_REQUEST['l_i_id'];
	
	include('config.php');
		
	$sqlcnt = 'SELECT COUNT(*) AS COUNT FROM listgirls;';
	$resultcnt = mysqli_query($link, $sqlcnt);
	$rowcnt = mysqli_fetch_array($resultcnt);
	$count = $rowcnt['COUNT'];
	
	$sql = 'SELECT id,name,link FROM listgirls where id='.$f_i_id.';';
	$result = mysqli_query($link, $sql);
	$row = mysqli_fetch_array($result);
		$id1=$row['id'];
		$name1=$row['name'];
		$link1=$row['link'];
	
	$sql2 = 'SELECT id,name,link FROM listgirls where id='.$l_i_id.';';
	$result2 = mysqli_query($link, $sql2);
	$row2 = mysqli_fetch_array($result2);
		$id2=$row2['id'];
		$name2=$row2['name'];
		$link2=$row2['link'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Girls</title>
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
						<h2 class="title">Vote +1 for one of the Girls... </h2>
						
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<table align="center" cellspacing="20">
								<tr>
									<td><img src="<?php echo $link1?>" width="214" height="210"></td>
									<td><img src="<?php echo $link2?>" width="214" height="210"></td>
								</tr>
								<tr align="center">
									<td><a href="updategirls.php?id=<?php echo $id1.'&count='.$count.'&f_i_id='.$f_i_id.'&l_i_id='.$l_i_id.'">'.$name1.''?></a></td>
									<td><a href="updategirls.php?id=<?php echo $id2.'&count='.$count.'&f_i_id='.$f_i_id.'&l_i_id='.$l_i_id.'">'.$name2.''?></a></td>
								</tr>
							</table>
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
