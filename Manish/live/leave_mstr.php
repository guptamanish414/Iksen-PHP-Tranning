<?php 
include'./includes/connection.php';	
include'./includes/admin-session.php';	
include'./common/header.php';
include'./common/left.php';

if(isset($_REQUEST['submit_btn'])){
	$valid=0; $err="<ul>";
	if(@$_REQUEST['leave_name']==""){
		$err=$err."<li>Please enter leave name.</li>"; $valid=1;
	}if(@$_REQUEST['leave_abbr']==""){
		$err=$err."<li>Please enter leave abbreviation.</li>"; $valid=1;
	}if(@$_REQUEST['leave_count']==""){
		$err=$err."<li>Please enter no of leave.</li>"; $valid=1;
	}if($valid==1){
		echo $err."</ul>";
	}else{
		$query=mysql_query("insert into `tb_leave_mstr` set `leave_name`='".$_REQUEST['leave_name']."',`leave_abbr`='".$_REQUEST['leave_abbr']."',`leave_count`='".$_REQUEST['leave_count']."'");
		if($query){
			$_SESSION['msg']="submitted successfully...";
			header("Location:leave_mstr.php");
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
	<form action="leave_mstr.php" method="post">
	<table align="center" cellpadding="0" cellspacing="0" width="95%" class="form_table">
	<tr>
	<td>Leave name</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['leave_name'];?>" name="leave_name" id="leave_name" /></td>	
	
	<td>Leave abbreviation</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['leave_abbr'];?>" name="leave_abbr" id="leave_abbr" /></td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
	<td>Leave Count</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['leave_count'];?>" name="leave_count" id="leave_count" /></td>
	<td>&nbsp;</td>
	<td>
	&nbsp;
	</td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>	
	<tr>
	<td>&nbsp;</td>
	<td colspan="3"><input type="submit" class="submit_btn" name="submit_btn" value="SUBMIT" /></td>
	
	</tr>
	</table>
	</form>
			

<?php include'./common/footer.php';?>