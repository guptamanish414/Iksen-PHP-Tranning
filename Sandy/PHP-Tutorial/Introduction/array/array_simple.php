<?php
//assign normally
$myarray[0]='one';
$myarray[1]=2;
$myarray[2]='3';

echo $myarray[0].' '.$myarray[1].' '.$myarray[2].'<br/>';

$myarray[]=4;
$myarray[]=5;

echo $myarray[0].' '.$myarray[1].' '.$myarray[2].' '.$myarray[3].' '.$myarray[4].'<br/>';

//assign using built-in function
$myarray=array('seven',8,'9');

echo $myarray[0].' '.$myarray[1].' '.$myarray[2].'<br/>';

$myarray[]=10;
$myarray[4]='45';
$myarray[6]=23;

echo $myarray[0].' '.$myarray[1].' '.$myarray[2].' '.$myarray[3].' '.$myarray[4].' '.$myarray[6].'<br/>';
?>