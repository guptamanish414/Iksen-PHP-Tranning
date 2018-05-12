<html>
<head>
<title>Basic</title>
</head>
<body>
<?php
//simple string to text output
echo 'This is a test print of text.<br/>';

//built-in function
echo date('l,F dS Y.').'<br/>';

//Variables & operators

//variables and assignments
$testvariable=3; // integer assignment
$testvariable='Three'; // string assignment

//assignment operator(=)
$testvariable=1+1;
echo $testvariable.'<br/>';
$testvariable=1-1;
echo $testvariable.'<br/>';
$testvariable=1*1;
echo $testvariable.'<br/>';
$testvariable=1/1;
echo $testvariable.'<br/>';

//concatenation operator
$var= 'Hi '.'there.'.'<br/>';
echo $var;

//use of variables some examples
$var1='PHP';
$var2=5;
$var3=$var2+1;
echo $var1.'<br/>';
echo $var2.'<br/>';
echo $var3.'<br/>';
$var2=$var1;
echo $var2.'<br/>';
echo $var1.' is easy.'.'<br/>';
echo "$var1 is easy.".'<br/>';
echo '$var1 is easy.'.'<br/>';
?>
</body>
</html>