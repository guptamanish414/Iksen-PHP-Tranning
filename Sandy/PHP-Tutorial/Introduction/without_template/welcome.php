<html>
<head>
<title>welcome</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>
<p>
<?php
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
if($fname=='admin' and $lname=='admin') {
$output = 'Hello Admin';
}
else {
$output = 'Welcome to our site '.htmlspecialchars($fname,ENT_QUOTES,'UTF-8').' '.htmlspecialchars($lname,ENT_QUOTES,'UTF-8');
}
echo $output;
?>
</p>
</body>
</html>