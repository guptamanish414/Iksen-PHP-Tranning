<?php
$name=$_GET['name'];
echo 'Welcome to our site '.htmlspecialchars($name,ENT_QUOTES,'UTF-8');
?>