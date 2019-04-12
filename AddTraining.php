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
    $Training_Name = $_POST['Training_Name'];
    $Training_date_start = $_POST['Training_date_start'];
	$Training_date_end = $_POST['Training_date_end'];
	$Training_Organizer = $_POST['Training_Organizer'];
	$Training_Place = $_POST['Training_Place'];
	$Training_Result = $_POST['Training_Result'];
	
	/*Prevent sql injection*/
	$Training_Name = stripcslashes($Training_Name);
	$Training_date_start = stripcslashes($Training_date_start);
	$Training_date_end = stripcslashes($Training_date_end);
	$Training_Organizer = stripcslashes($Training_Organizer);
	$Training_Place = stripcslashes($Training_Place);
	$Training_Result = stripcslashes($Training_Result);

	
	 // Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");

	$sql = "INSERT INTO training(user_Ic,Training_Name,Training_date_start,Training_date_end,Training_Organizer,Training_Place,Training_Result)VALUES('$user_Ic','$Training_Name','$Training_date_start','$Training_date_end','$Training_Organizer','$Training_Place','$Training_Result')";

  $result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
$message = "Insert Successfully.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> location.href='5.php'; </script>";
		exit;
}	

