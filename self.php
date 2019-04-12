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
$person1 = $_POST['person1'];
$person2 = $_POST['person2'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$job1 = $_POST['job1'];
$job2 = $_POST['job2'];
$tel1= $_POST['tel1'];
$tel2 = $_POST['tel2'];

	
	/*Prevent sql injection*/
	$person1 = stripcslashes($person1);
	$person2 = stripcslashes($person2);
	$add1 = stripcslashes($add1);
	$add2 = stripcslashes($add2);
	$job1 = stripcslashes($job1);
	$job2 = stripcslashes($job2);
	$tel1 = stripcslashes($tel1);
	$tel2 = stripcslashes($tel2);
	
    // Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");

	$sql = "INSERT INTO self_reference(user_Ic,person1,person2,add1,add2,job1,job2,tel1,tel2)VALUES('$user_Ic','$person1','$person2','$add1','$add2','$job1','$job2','$tel1','$tel2')";

  $result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
$message = "Insert Successfully.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> location.href='6.php'; </script>";
	
	exit;
	}

?>
