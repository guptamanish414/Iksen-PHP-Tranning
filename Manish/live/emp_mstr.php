<?php 
include'./includes/connection.php';	
include'./includes/admin-session.php';	
include'./common/header.php';
include'./common/left.php';

/*if(isset($_REQUEST['submit_btn'])){
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
}*/	
?>
	<?php if(@$_SESSION['msg']!=""){ ?>
	<div class="session_div"><?php echo $_SESSION['msg'];?></div>
	<?php }
	for($i=1;$i<=10;$i++){
	}
	 unset($_SESSION['msg']);?>
	<form action="emp_mstr.php" method="post">
	<table align="center" cellpadding="0" cellspacing="0" width="95%" class="form_table">
	<tr>
	<td>Employee Name :</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_name'];?>" name="emp_name" id="emp_name" /></td>
	<td>Employee Code :</td>
	<td>
	<input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_code'];?>" name="emp_code" id="emp_code" />
	</td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
	<td>Father Name :</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_father'];?>" name="emp_father" id="emp_father" /></td>
	<td>Date of Birth :</td>
	<td>
	<input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_dt_birth'];?>" name="emp_dt_birth" id="emp_dt_birth" />
	</td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
	<td>Gender :</td>
	<td>
	<input type="radio" name="emp_gender" id="emp_gender1" value="M" />&nbsp;Male
	<input type="radio" name="emp_gender" id="emp_gender2" value="F" />&nbsp;Female
	
	</td>
	<td>Address :</td>
	<td>
	<textarea name="emp_address" id="emp_address"><?php echo @$_REQUEST['emp_address'];?></textarea>
	
	</td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
	<td>Village :</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_village'];?>" name="emp_village" id="emp_village" /></td>
	<td>State :</td>
	<td>
	<input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_state'];?>" name="emp_state" id="emp_state" />
	</td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
	<td>Pincode :</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_pincode'];?>" name="emp_pincode" id="emp_pincode" /></td>
	<td>Pan Card No :</td>
	<td>
	<input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_pan_no'];?>" name="emp_pan_no" id="emp_pan_no" />
	</td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
	<td>Qualification :</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_qualification'];?>" name="emp_qualification" id="emp_qualification" /></td>
	<td>Mobile :</td>
	<td>
	<input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_mobile'];?>" name="emp_mobile" id="emp_mobile" />
	</td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
	<td>Emergency Contact :</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_emr_contact'];?>" name="emp_emr_contact" id="emp_emr_contact" /></td>
	<td>Email Id :</td>
	<td>
	<input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_email'];?>" name="emp_email" id="emp_email" />
	</td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
	<td>Date of Joiniong :</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_dt_joining'];?>" name="emp_dt_joining" id="emp_dt_joining" /></td>
	<td>Bank Name :</td>
	<td>
	<input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_bank'];?>" name="emp_bank" id="emp_bank" />
	</td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
	<td>Bank Account No :</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_bank_accno'];?>" name="emp_bank_accno" id="emp_bank_accno" /></td>
	<td>Bank IFSC No :</td>
	<td>
	<input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_bank_ifsc'];?>" name="emp_bank_ifsc" id="emp_bank_ifsc" />
	</td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
	<td>Bank Micr No :</td>
	<td><input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_bank_micr'];?>" name="emp_bank_micr" id="emp_bank_micr" /></td>
	<td>Leaving Date :</td>
	<td>
	<input type="text" class="in_box" value="<?php echo @$_REQUEST['emp_left_dt'];?>" name="emp_left_dt" id="emp_left_dt" />
	</td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
	<td>Remarks :</td>
	<td><textarea name="emp_remarks" id="emp_remarks"><?php echo @$_REQUEST['emp_remarks'];?></textarea></td>
	<td>Resume Upload</td>
	<td>
	<input type="file" name="emp_cv" />
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