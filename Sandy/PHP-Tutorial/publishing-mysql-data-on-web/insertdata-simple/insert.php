<?php
$link = mysqli_connect('localhost', 'root', 'root');
if (!$link)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
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
  $error = 'Unable to locate the joke database.';
  include 'error.html.php';
  exit();
}
if (isset($_POST['joketext']))
{
  $joketext = mysqli_real_escape_string($link, $_POST['joketext']);
  $sql = 'INSERT INTO joke SET
      joketext="' . $joketext . '",
      jokedate=CURDATE()';
  if (!mysqli_query($link, $sql))
  {
    $error = 'Error adding submitted joke: ' . mysqli_error($link);
    include 'error.html.php';
    exit();
  }
  header('Location: .');
  exit();
}
?>