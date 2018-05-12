<?php
$link = mysqli_connect('localhost', 'root', 'root');
if (!$link)
{
  echo 'Unable to connect to the database server.';
  
  exit();
}
if (!mysqli_set_charset($link, 'utf8'))
{
  echo 'Unable to set database connection encoding.';
  
  exit();
}
if (!mysqli_select_db($link, 'ijdb'))
{
  echo 'Unable to locate the joke database.';
  
  exit();
}
$result = mysqli_query($link, 'SELECT joketext FROM joke');
if (!$result)
{
  echo 'Error fetching jokes: ' . mysqli_error($link);
  exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>List of Jokes</title>
    <meta http-equiv="content-type"
        content="text/html; charset=utf-8"/>
  </head>
  <body>
	<p><a href="form.html">Add your own joke</a></p>
    <p>Here are all the jokes in the database:</p>
<?php
while ($row = mysqli_fetch_array($result))
{
  echo $row['joketext'].'<br>';
}
?>
  </body>
</html>