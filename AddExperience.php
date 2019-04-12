<?php
//including the database connection file
include_once("config.php");
$db = db_connect();
session_start();

$qlist = "SELECT * FROM userlist WHERE user_id='".$_SESSION['SESS_USER_ID'] ."'";
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        
           $user_Ic=$rowlist["user_Ic"];
        }

if(isset($_POST['Submit'])) { 
   
    $Employer_Name_Add = $_POST['Employer_Name_Add'];
    $Applicant_Post = $_POST['Applicant_Post'];
	$Applicant_Month_Salary = $_POST['Applicant_Month_Salary'];
	$Work_Start_Date = $_POST['Work_Start_Date'];
	$Work_End_Date = $_POST['Work_End_Date'];
	$Work_Contract = $_POST['Work_Contract'];
	$Reason_Stop = $_POST['Reason_Stop'];
	
	/*Prevent sql injection*/
	$Employer_Name_Add = stripcslashes($Employer_Name_Add);
	$Applicant_Post = stripcslashes($Applicant_Post);
	$Applicant_Month_Salary = stripcslashes($Applicant_Month_Salary);
	$Work_Start_Date = stripcslashes($Work_Start_Date);
	$Work_End_Date = stripcslashes($Work_End_Date);
	$Work_Contract = stripcslashes($Work_Contract);
	$Reason_Stop = stripcslashes($Reason_Stop);
	
	
	 // Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");

	$sql = "INSERT INTO work_experience(user_Ic,Employer_Name_Add,Applicant_Post,Applicant_Month_Salary,Work_Start_Date,Work_End_Date,Work_Contract,Reason_Stop)VALUES('$user_Ic','$Employer_Name_Add','$Applicant_Post','$Applicant_Month_Salary','$Work_Start_Date','$Work_End_Date','$Work_Contract','$Reason_Stop')";

  $result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
$message = "Insert Successfully.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> location.href='4.php'; </script>";
		exit;
}	
