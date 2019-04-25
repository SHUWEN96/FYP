<?php
//including the database connection file
include_once("config.php");
$db = db_connect();
session_start();

$Education_detail_Id = null;
if ( !empty($_GET['Education_detail_Id'])) {
	$Education_detail_Id = $_REQUEST['Education_detail_Id'];
	
}


$qlist = "SELECT * FROM education WHERE Education_detail_Id='".$_SESSION['SESS_EDU_ID'] ."'";
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        
      
		   $user_Ic=$rowlist["user_Ic"];
		   $Edu_Type=$rowlist["Edu_Type"];
		   $Education_detail_Id = $rowlist['Education_detail_Id'];
		   
        }

if(isset($_POST['Submit'])) {  

   
    $subject = $_POST['subject'];
    $gred = $_POST['gred'];
	$Edu_Type = $_POST["Edu_Type"];
	
	
	/*Prevent sql injection*/
	$subject = stripcslashes($subject);
	$gred = stripcslashes($gred);
	
	 // Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");

    $sql = "INSERT INTO subject(Education_detail_Id,user_Ic,Edu_Type,subject,gred) VALUES ('$Education_detail_Id','$user_Ic','$Edu_Type','$subject','$gred')";
  $result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
$message = "Insert Successfully.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> location.href='subject.php?Edu_Type=".$Edu_Type."'; </script>";
		exit;
}	
