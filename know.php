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
	if(isset($_POST['Insert'])) { 	
/* Get input from form using post method*/
$acknowledgement_1 = $_POST['acknowledgement_1'];
$acknowledgement_2 = $_POST['acknowledgement_2'];
$acknowledgement_3 = $_POST['acknowledgement_3'];
$acknowledgement_4 = $_POST['acknowledgement_4'];
$acknowledgement_5 = $_POST['acknowledgement_5'];

    // Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
	$sql = "INSERT INTO acknowledgement(user_Ic,acknowledgement_1,acknowledgement_2,acknowledgement_3,acknowledgement_4,acknowledgement_5)VALUES('$user_Ic','$acknowledgement_1','$acknowledgement_2','$acknowledgement_3','$acknowledgement_4','$acknowledgement_5')";
  
// if successfully insert data into database, displays message "Successful". 
$result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
$message = "Insert Successfully.Application Form fill up successfully and refered your status from officer decision within 1 week";
		echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> location.href='applicant.php'</script>";
	
		exit;
	}

 ?>