<?php
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
$Faculty = $_POST['Faculty'];
$Applicant_post1 = $_POST['Applicant_post1'];
$Applicant_post2 = $_POST['Applicant_post2'];

    $Faculty = stripcslashes($Faculty);
	$Applicant_post1 = stripcslashes($Applicant_post1);
	$Applicant_post2 = stripcslashes($Applicant_post2);
	
    // Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
	
	$sql = "INSERT INTO position(user_Ic,Faculty,Applicant_post1,Applicant_post2)VALUES('$user_Ic','$Faculty','$Applicant_post1','$Applicant_post2')";
	
 $result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));

 
$message = "Insert Successfully.";

		echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> location.href='i.html'; </script>";
		exit;
		
}
?>

