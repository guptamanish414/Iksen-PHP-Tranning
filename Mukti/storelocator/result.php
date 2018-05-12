<style type="text/css">
h3
{
background:#0099FF;
font-family:Arial, Helvetica, sans-serif;
width:auto;
margin-left:50px;
margin-right:50px;

}
table, td, th
{
background:#CCFFFF;
border:1px solid black;
width:auto;
}
td
{
padding:5px;
}
th{
background:#CCCCCC;
}
</style>

<h3><center>Dealers all India</center></h3>
<?php
include ('connect.php');

$productname = $_POST["product"];
$cityname = $_POST["city"];

$query ="SELECT * FROM dealer WHERE productname ='$productname' AND cityname='$cityname'";
$result = mysql_query($query) or die(mysql_error());

  
?>

<center>
<table border="1">
  <tr>
	  <th>Dealer name </th>
	  <th>Firm name</th>
	  <th>Contact</th>
	  <th>Address </th>
	  <th>Phone</th>
  </tr>
<? 

if(mysql_num_rows($result) > 0) {

 while($info=mysql_fetch_assoc($result)) {?>  
  <tr>
	  <td><?php echo $info['dealername']?></td>
	  <td><?php echo $info['firmname']?> </td>
	  <td><?php echo $info['contact']?> </td>
	  <td> <?php echo $info['address']?></td>
	  <td><?php echo $info['phone']?> </td>
  </tr>
  
<? 
  }
 
} 
 else if (mysql_num_rows($result)== 0)
  {
  echo "NO RECODES FOUND";
  }

?>  
  </table> 
  </center>
  
