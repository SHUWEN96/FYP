<?php
//including the database connection file
include_once("config.php");
$db = db_connect();
session_start();

$link = mysqli_connect("localhost", "root", "");

mysqli_connect("localhost","root","")or die(mysqli_connect_error());
mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");


$qlist = "SELECT * FROM userlist WHERE user_id='".$_SESSION['SESS_USER_ID'] ."'";
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        
           $user_Ic=$rowlist["user_Ic"];
        }
if(isset($_POST['Insert'])) { 	
/* Get input from form using post method*/

$Applicant_Name = $_POST['name'];
$Applicant_Add = $_POST['add'];
$Applicant_Email = $_POST['email'];
$Applicant_NoTel = $_POST['tel'];
$Applicant_Age = $_POST['age'];
$Applicant_gender= $_POST['gender'];
$Applicant_DOB = $_POST['DOB'];
$Applicant_POB = $_POST['POB'];
$Applicant_Citizen = $_POST['citizen'];
$Applicant_Religion = $_POST['religion'];
$Applicant_Nation = $_POST['nation'];
$Applicant_MaritalStatus = $_POST['marryStatus'];
$Applicant_Height = $_POST['height'];
$Applicant_Weight = $_POST['weight'];
$Applicant_NoHP = $_POST['HpNo'];
$Applicant_VLC = $_POST['VLC'];
$Mom_Name = $_POST['mom'];
$Mom_Ic = $_POST['momIC'];
$Dad_Name = $_POST['dad'];
$Dad_Ic = $_POST['dadIC'];
$Spouse_name = $_POST['couple'];

	
	/*Prevent sql injection*/
	$Applicant_Name = stripcslashes($Applicant_Name);
	$Applicant_Add = stripcslashes($Applicant_Add);
	$Applicant_Email = stripcslashes($Applicant_Email);
	$Applicant_NoTel = stripcslashes($Applicant_NoTel);
	$Applicant_Age = stripcslashes($Applicant_Age);
	$Applicant_gender = stripcslashes($Applicant_gender);
	$Applicant_DOB = stripcslashes($Applicant_DOB);
	$Applicant_POB = stripcslashes($Applicant_POB);
	$Applicant_Citizen = stripcslashes($Applicant_Citizen);
	$Applicant_Religion = stripcslashes($Applicant_Religion);
	$Applicant_Nation = stripcslashes($Applicant_Nation);
	$Applicant_MaritalStatus = stripcslashes($Applicant_MaritalStatus);
	$Applicant_Height = stripcslashes($Applicant_Height);
	$Applicant_Weight = stripcslashes($Applicant_Weight);
	$Applicant_NoHP = stripcslashes($Applicant_NoHP);
	$Applicant_VLC = stripcslashes($Applicant_VLC);
	$Mom_Name = stripcslashes($Mom_Name);
	$Mom_Ic = stripcslashes($Mom_Ic);
	$Dad_Name = stripcslashes($Dad_Name);
	$Dad_Ic = stripcslashes($Dad_Ic);
	$Spouse_name = stripcslashes($Spouse_name);
	
    // Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");

	$sql = "INSERT INTO applicant(user_Ic,Applicant_Name,Applicant_Add,Applicant_Email,Applicant_NoTel,Applicant_Age,Applicant_gender,Applicant_DOB,
Applicant_POB,Applicant_Citizen,Applicant_Religion,Applicant_Nation,Applicant_MaritalStatus,Applicant_Height,Applicant_Weight,Applicant_NoHP,
Applicant_VLC,Mom_Name,Mom_Ic,Dad_Name,Dad_Ic,Spouse_name)VALUES('$user_Ic','$Applicant_Name','$Applicant_Add','$Applicant_Email','$Applicant_NoTel',
'$Applicant_Age','$Applicant_gender','$Applicant_DOB','$Applicant_POB','$Applicant_Citizen','$Applicant_Religion','$Applicant_Nation','$Applicant_MaritalStatus',
'$Applicant_Height','$Applicant_Weight','$Applicant_NoHP','$Applicant_VLC','$Mom_Name','$Mom_Ic','$Dad_Name','$Dad_Ic','$Spouse_name')";

  $result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
$message = "Insert Successfully.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> location.href='1.php'; </script>";
		exit;
		
}

?>
