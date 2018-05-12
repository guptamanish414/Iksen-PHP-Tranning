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
}
td{ 
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

$query ="SELECT * FROM dealer";
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
	   <th>Product</th>
	    <th>City</th>
		<th width="100px">Options</th>
  </tr>
<? 

if(mysql_num_rows($result) > 0) {

 while($info=mysql_fetch_assoc($result)) {?>  
  <tr>
	  <td><center><?php echo $info['dealername']?></center></td>
	  <td><center><?php echo $info['firmname']?></center> </td>
	  <td><center><?php echo $info['contact']?></center> </td>
	  <td><center> <?php echo $info['address']?></center></td>
	  <td><center><?php echo $info['phone']?> </center></td>
	   <td><center><?php echo $info['productname']?></center> </td>
	    <td><center><?php echo $info['cityname']?> </center></td>
		 <td><center><a href="update.php?id=<? echo $info['dealer_id']; ?>" style=" background-color: #FFFFFF">Update</a> 
		 <a href="delete.php?id=<? echo $info['dealer_id']; ?>" style=" background-color: #FF99CC">Delete</a> </center> </td>
  </tr>
  
<?  
  }
 
}

?>  
  </table> 
  </center>
  
