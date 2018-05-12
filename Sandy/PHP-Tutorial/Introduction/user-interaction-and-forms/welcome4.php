<?php
$fname=$_GET['fname'];
$lname=$_GET['lname'];
echo 'Welcome to our site '.htmlspecialchars($fname,ENT_QUOTES,'UTF-8').' '.htmlspecialchars($lname,ENT_QUOTES,'UTF-8');
?>