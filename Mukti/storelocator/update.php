<style type="text/css">
h3
{
background:#0099FF;
font-family:Arial, Helvetica, sans-serif;
width:auto;
margin-left:50px;
margin-right:50px;
}


</style>

<?php
include ('connect.php');
$query ="SELECT * FROM dealer where dealer_id='$_REQUEST[id]'";
$result = mysql_query($query) or die(mysql_error());
$fetch=mysql_fetch_array($result);

?> 

<h3><center> Admin panel</center></h3>
<center>

 <form  method="post" action="updation.php" style="color:#0033CC; background-color: #99CCFF;margin-left:50px; margin-right:50px;>
          <input type="hidden" name="action" value="insert" />

 <table>
<tr>
 <td>Dealer name:</td> <td><input type="text" name="dname" value="<?php echo $fetch['dealername']?>" align="middle" style="background: #CCCCCC" /></td></tr>
 <tr>
 <td>Firm name:</td>  <td><input type="text" name="fname" value="<?php echo $fetch['firmname']?>" align="middle" style="background: #CCCCCC" /></td></tr> 
 <tr>
 <td>Contact:</td>    <td><input type="text" name="contact" value="<?php echo $fetch['contact']?>" align="middle" style="background: #CCCCCC" /></td> </tr>
 <tr>
 <td>Address:</td>    <td><input type="text" name="add" value="<?php echo $fetch['address']?>" align="middle" style="background: #CCCCCC"/></td> </tr>
 
 <tr>
 <td>Phone:</td>  <td><input type="text" name="phone" value="<?php echo $fetch['phone']?>" align="middle" style="background: #CCCCCC" /></td> </tr>
 <tr>
 <td>Product name:</td>  <td><select name="product" id="selectReq" >
                                    <option value="">Please Choose</option>
                                    <option value="Coated Fabric">	Coated Fabric</option>
                                    <option value="Synwood">	Synwood</option>
                                    <option value="Ventilator">	Ventilator</option>
									<option value="Label">	Label</option>
                                    <option value="Echolac">Echolac</option></select></td> </tr>
 <tr>
 <td>City name:</td>    <td><select name="city" id="selectReq1" >
                                    <option value="">Please Choose</option>
                                    <option  value="Banglore">Banglore</option>
                                    <option value="Chennai">Chennai</option>
                                    <option value="Kochin">Kochin</option>
									<option  value="Surat">Surat</option>
                                    <option  value="Delhi">Delhi</option>
                                    <option value="Hyderabad">Hyderabad</option>
								    <option value="Kolkata">Kolkata</option>
									 <option value="Kanpur">Kanpur</option>
									 <option  value="Mumbai">Mumbai</option>
                                </select></td> </tr>

 </table>
 <input type="submit" value="Submit and view ressult" name="submit"/>
<input type="hidden" name="id" value="<?php echo $fetch['dealer_id']?>" />
 </form>
 </center>
