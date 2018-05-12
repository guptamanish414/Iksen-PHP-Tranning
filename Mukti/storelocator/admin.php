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
if(isset($_REQUEST['action']) && $_REQUEST['action']=='insert')
{
			$dealername=$_POST['dname'];
			$firmname=$_POST['fname'];
			$contact=$_POST['contact'];
			$address=$_POST['add'];
			$phone=$_POST['phone'];
			$productname =$_POST["product"];
            $cityname = $_POST["city"];
			$sql=mysql_query("insert into `dealer` (`dealername`,`firmname`,`contact`,`address`,`phone`,`productname`,`cityname`) values ('$dealername','$firmname','$contact','$address','$phone','$productname','$cityname')");
		echo"<script>window.location.href='adminview.php'</script>";
	}
?> 

<h3><center> Admin panel</center></h3>
<center>

 <form  method="post" action="" style="color:#0033CC; background-color: #99CCFF;margin-left:50px; margin-right:50px;" >
          <input type="hidden" name="action" value="insert" />

 <table>
<tr>
 <td><b>Dealer name:</b></td> <td><input type="text" name="dname" value="" align="middle" style="background: #CCCCCC"/></td></tr>
 <tr>
 <td><b>Firm name:</b></td>  <td><input type="text" name="fname" value="" align="middle" style="background: #CCCCCC"/></td></tr> 
 <tr>
 <td><b>Contact:</b></td>    <td><input type="text" name="contact" value="" align="middle" style="background: #CCCCCC"/></td> </tr>
 <tr>
 <td><b>Address:</b></td>    <td><input type="text" name="add" value="" align="middle" style="background: #CCCCCC"/></td> </tr>
 
 <tr>
 <td><b>Phone:</b></td>  <td><input type="text" name="phone" value="" align="middle" style="background: #CCCCCC"/></td> </tr>
 <tr>
 <td><b>Product name:</b></td> <td><select name="product" id="selectReq" >
                                    <option value="">Please Choose</option>
                                    <option value="Coated Fabric">	Coated Fabric</option>
                                    <option value="Synwood">	Synwood</option>
                                    <option value="Ventilator">	Ventilator</option>
									<option value="Label">	Label</option>
                                    <option value="Echolac">Echolac</option></select></td> </tr>
 <tr>
 <td><b>City name:</b></td>  <td><select name="city" id="selectReq1" >
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
 <input type="submit" value="Submit" name="submit"/>
 </form>
 </center>
 
