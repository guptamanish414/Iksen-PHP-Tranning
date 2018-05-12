<?php
if(!isset($_REQUEST['fname'])) {
include 'form.html.php';
}
else {
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
if($fname=='admin' and $lname=='admin') {
$output = 'Hello Admin';
}
else {
$output = 'Welcome to our site '.htmlspecialchars($fname,ENT_QUOTES,'UTF-8').' '.htmlspecialchars($lname,ENT_QUOTES,'UTF-8');
}
include 'welcome.html.php';
}
?>