<?php 
include'./includes/connection.php';	
include'./includes/admin-session.php';	
include'./common/header.php';
include'./common/left.php';

if(isset($_REQUEST['submit_btn'])){
	$valid=0; $err="<ul>";
	if(@$_REQUEST['name']==""){
		$err=$err."<li>Please enter name.</li>"; $valid=1;
	}if(@$_REQUEST['level_id']==""){
		$err=$err."<li>Please select level.</li>"; $valid=1;
	}if(@$_REQUEST['user_name']==""){
		$err=$err."<li>Please enter user name.</li>"; $valid=1;
	}if(@$_REQUEST['password']==""){
		$err=$err."<li>Please enter password.</li>"; $valid=1;
	}if($valid==1){
		echo $err."</ul>";
	}else{
		$query=mysql_query("insert into `tb_admin` set `name`='".$_REQUEST['name']."',`level_id`='".$_REQUEST['level_id']."',`user_name`='".$_REQUEST['user_name']."',
		`password`='".$_REQUEST['password']."',`status`='A'");
		if($query){
			$_SESSION['msg']="submitted successfully...";
			header("Location:usr_mstr.php");
		}
	}
}	
?>
	<?php if(@$_SESSION['msg']!=""){ ?>
	<div class="session_div"><?php echo $_SESSION['msg'];?></div>
	<?php }
	for($i=1;$i<=10;$i++){
	}
	 unset($_SESSION['msg']);?>
	<form action="usr_mstr.php" method="post">
	<table align="center" cellpadding="0" cellspacing="0" width="95%" class="form_table">
	<tr>
	<td>From Date</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['name'];?>" name="From Date" id="From Date" /></td>
	<td>Level</td>
	<td>
	<select name="level_id" id="level_id">
	<option value="" selected="selected">Select</option>
	<?php $q=mysql_query("select * from `tb_level_mstr`");
	if(mysql_num_rows($q)>0){
		while($r=mysql_fetch_array($q)){
	?>
		<option value="<?php echo $r['level_id'];?>" 
		<?php if($r['level_id']==@$_REQUEST['level_id']){echo 'selected="selected"';}?>>
		<?php echo stripslashes($r['level_name']);?></option>
	<?php
		}
	}
	?>	
	</select>
	</td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
	<td>User name</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['user_name'];?>" name="user_name" id="user_name" /></td>
	<td>Password</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['password'];?>" name="password" id="password" /></td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
	<td>&nbsp;</td>
	<td colspan="3"><input type="submit" class="submit_btn" name="submit_btn" value="SUBMIT" /></td>
	
	</tr>
	</table>
	</form>
			

<?php include'./common/footer.php';?>