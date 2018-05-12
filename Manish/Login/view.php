<?php
include('connection.php')
$sql=mysqli_query("slect * from 'Logged_in'");
mysqli_num_rows($sql);
?>
<table cellpadding="15px" border="2px" width="600px" height="10px">
<colgroup span=2 style="background:#FFFFFF">

<tr>
<td colspan="2"><h2>Logged In<h2></td>
</tr>

<tr>
<td>Email_id</td><td>Password</td>
</tr>

<?php
if(mysqli_num_rows($sql)>0)
{
	while($info=myql_fetch_arry($sql))
	{
	<tr>
	<td>echo"<?php $info["Email_id"]?>"</td>
	<td>echo"<?php $info["Password"]?>"</td>
	</tr>
	}
}
</table>
?>