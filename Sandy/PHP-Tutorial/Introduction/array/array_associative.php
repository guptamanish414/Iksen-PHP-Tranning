<?php
//assign normally
$myarray['Manish']='1992-12-25';
$myarray['Rajat']='1992-05-19';
$myarray['Ram']='1994-09-28';

echo 'Rajat was born on : '.$myarray['Rajat'].'<br/>';

//assign using built-in function
$myarray=array('Manish'=>'1992-12-25','Rajat'=>'1992-05-19','Ram'=>'1994-09-28');

echo 'Manish was born on : '.$myarray['Manish'];
?>