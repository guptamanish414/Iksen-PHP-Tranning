<?php
$link = mysqli_connect('localhost', 'root', 'root');
if (!$link)
{
  $output = 'Unable to connect to the database server.';
  include 'output.html.php';
  exit();
}
if (!mysqli_set_charset($link, 'utf8'))
{
  $output = 'Unable to set database connection encoding.';
  include 'output.html.php';
  exit();
}
if (!mysqli_select_db($link, 'ijdb'))
{
  $sql = 'CREATE DATABASE ijdb';
  if (!mysqli_query($link, $sql))
  {
  $output = 'Error creating ijdb database: ' . mysqli_error($link);
  include 'output.html.php';
  exit();
  }
}
$output = 'ijdb database successfully created.';
include 'output.html.php';
?>