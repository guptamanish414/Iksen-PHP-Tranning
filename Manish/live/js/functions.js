function hide_others(id1,id2,id3){
	$('#'+id1).slideDown('slow');	
	$('#'+id2).slideUp('slow');
	$('#'+id3).slideUp('slow');
}
function show_li(id,no){
	var i;
	for(i=1;i<=no;i++){
		$('#'+id+i).show(500);
	}
}
function hide_li(id,no){
	var i;
	for(i=1;i<=no;i++){
		$('#'+id+i).hide(500);
	}
}
function show_submenu(id,no){
	if(id=='admin'){
		show_li(id,no);
		hide_li('attendence',3);
	}else if(id=='attendence'){
			show_li(id,no);
			hide_li('admin',4);
	}
}
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
}
function show_error(id,val){
	if(val==""){
		$('#'+id).fadeIn('slow');
		$('#'+id).focus();
	}else{
		$('#'+id).fadeOut('slow');
	}
}
/*******Login**********************/
function login_hwnd(){ 
	var valid=0;
	var user_name=$('#user_name').val();
	var password=$('#password').val();
	if(user_name==""){	
		valid=1;
		$('#msg1').fadeIn('slow');
	}if(password==""){	
		valid=1;
		$('#msg2').fadeIn('slow');
	}if(valid==0){		
		var strURL="ajax_pages/login.php?act=login&user_name="+user_name+"&password="+password;
		
		var req = getXMLHTTP();		
		if (req) {		
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
				// only if "OK"
					if (req.status == 200) {
						if(req.responseText=='success'){
							window.location.href="welcome.php";
						}else{
							$('#msg').fadeIn('slow');
						}
					} else {
							alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}	
	}
}

