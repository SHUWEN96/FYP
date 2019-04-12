<?php
include '../../Final Year Project/sufee-master/config.php';

session_start();
$link = mysqli_connect("localhost", "root", "");

mysqli_connect("localhost","root","")or die(mysqli_connect_error());
mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

$user_Ic = mysqli_real_escape_string($link,$_POST['user_Ic']);
$password = mysqli_real_escape_string($link,(md5($_POST['password'])));

$query = mysqli_query($link,"Select * from userlist WHERE user_Ic='$user_Ic'and password='$password'");
$exists = mysqli_num_rows($query);

if($exists > 0)
{    
	$data = mysqli_fetch_assoc($query);
	$_SESSION['SESS_USER_ID'] = $data['user_id'];
	$_SESSION['SESS_NOIC']= $data['user_Ic'];
	$_SESSION['SESS_NAME'] = $data['name'];
	$_SESSION['SESS_EMAIL']= $data['emailAdd'];

	// check if login as applicant
	if($data['selected_val']=="applicant"){
	
		$_SESSION['selected_val'] = "applicant";
		// move to applicant page
		header("location:applicant.php");
	// check if login as officer
	}else if($data['selected_val']=="officer"){
		
		$_SESSION['selected_val'] = "officer";
		// move to officer page
		header("location:officer.php");
	// check if login as manager
	}else if($data['selected_val']=="manager"){	
	
		$_SESSION['selected_val'] = "manager";
		// move to manager page
		header("location:manager.php");
 
	}else{
		// move to login page
		header("location:login.php?pesan=gagal");
	}	
}else{
	
	header("location:login.php?pesan=gagal");
}
 
?>

