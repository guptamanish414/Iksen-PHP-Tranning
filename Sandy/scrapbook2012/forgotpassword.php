<?php
$username = $_REQUEST['floginid'];
$flag = $_REQUEST['flag'];
$ans = $_REQUEST['ans'];
$hide = '1';
include('config.php');
$sql = 'SELECT COUNT(*) AS COUNT FROM register where username="'.$username.'"';
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);  
if($row['COUNT']=='1')  
{	
$fsql = 'SELECT * FROM register where username="'.$username.'"';	
$fresult = mysqli_query($link, $fsql);	
$frow = mysqli_fetch_array($fresult);	
$secques = $frow['question'];	
$secans = $frow['answer'];		
if($flag=='0')	
$error = "<p align=center><strong>Answer the Security Question to reset your password</strong></p>";	
else	
{		
if($ans==$secans)		
{		
$error = "<strong>Your Password is : ".$frow['password']."</strong>";		
$hide = '2';		
}		
else		
$error = "<strong>Incorrect Answer</strong>";	
}  
}  
else  
{	
$error = "<strong>USERNAME INCORRECT.....TRY AGAIN!!! OR CONTACT ADMIN @ reach.sandy@hotmail.com</strong>"; 
$hide = '2'; 
}
?>
<html>
<head>
<title>Forgot Password</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script>	
function hide()	
{	
var h=document.getElementById("hide").value;	
if(h==2)	
{		
document.getElementById('rowid').style.display = "none";	
}	
}
</script>
</head>
<body onload="hide();">
<div id="wrapper">	
<div id="header">		
<div id="logo">			
<h1><a href="#">Passouts 2012</a></h1>		
</div>	
</div>	
<div id="menu">				
<br class="clearfix" />	
</div>	<div id="page">		
<div id="content">		
<h2>Forgot Password Section</h2>		
<?php			
echo $error;			
if($hide!='1')				 
echo "<br /><a href=login.html>TAKE ME TO LOGIN PAGE</a>";		
?>		
<form action ="forgotpassword.php" method="post">		
<table cellspacing="20">		
<tr id="rowid">		
<td> <?php if(!empty($secques)) echo $secques; ?> </td>		
<td><input type="text" name="ans" id="ans" style="width: 400px;height: 35px;font-size: large;"></td>		
<td><input type="submit" value="Get Password" style="background-color: gray;color: white;border: gray;font-size: large;padding: 5px 5px 5px 5px;border-style: outset;"/></td>		
</tr>		
</table>		
<input type="hidden" value="1" name="flag">		
<input type="hidden" value="<?php echo $username; ?>" name="floginid">		
</form>		
<?php 
if($hide!='1') 
echo "<input type=hidden name=hide id=hide value=".$hide.">";
?>		
</div>				
<br class="clearfix" />	
</div>	
<div id="page-bottom">		
<p align="center"><a>Compiled & Designed by Sandeep Kumar Gupta CSE Department</a></p>		
<br class="clearfix" />	</div></div><div id="footer">
</div>
</body>
</html>