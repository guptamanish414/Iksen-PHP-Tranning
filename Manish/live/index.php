<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<title>Carlsberg Vendors Attendence Management</title>
</head>

<body>
<div class="main_container"><!--main_container-->
	<div class="heading">Welcome to Carlsberg Vendors Attendence Management</div>
	<table width="50%" align="center" cellpadding="0" cellspacing="0" border="0" style="margin-top:40px;">
	<tr><td colspan="2" align="center"><div id="msg" class="err_msg_div" style="display:none;">&nbsp;&nbsp;&nbsp;Username or password is invalid.Try again.....</div></td></tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr><td class="lebel">Username &nbsp;&nbsp;</td><td><input type="text" name="user_name" id="user_name" class="txt_box" onblur="show_error('msg1',this.value)"/></td></tr>
	<tr><td>&nbsp;&nbsp;</td><td class="msg_div"><div id="msg1" style="display:none;">Please Enter user name.....</div></td></tr>
	<tr><td class="lebel">Password &nbsp;&nbsp;</td><td><input type="password" name="password" id="password" class="txt_box" onblur="show_error('msg2',this.value)" /></td></tr>
	<tr><td>&nbsp;&nbsp;</td><td class="msg_div"><div id="msg2" style="display:none;">Please Enter Password.....</div></td></tr>
	<tr><td>&nbsp;&nbsp;</td><td><div>&nbsp;&nbsp;
	<input type="button" style="cursor:pointer; background:url(images/submit.png) top; border:none; text-align:center; width:100px; height:35px;" onclick="login_hwnd()" />
	
	</div></td></tr>
	
	</table>	

</div><!--main_container-->
</body>
</html>
