<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
if($fname=='admin' and $lname=='admin') {
echo 'Hello Admin';
}
else {
echo 'Welcome to our site '.htmlspecialchars($fname,ENT_QUOTES,'UTF-8').' '.htmlspecialchars($lname,ENT_QUOTES,'UTF-8');
}
?>