<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Create'])) {    
   $Job_Post_Nama = $_POST['grade'];
        $Job_Post_Syarat = $_POST['jobRequire'];
        $Job_Post_Salary = $_POST['jobSalary'];
	
	/*Prevent sql injection*/
	$Job_Post_Nama = stripcslashes($Job_Post_Nama);
	$Job_Post_Syarat = stripcslashes($Job_Post_Syarat);
	$Job_Post_Salary = stripcslashes($Job_Post_Salary);
	
	 // Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");

	$sql = "INSERT INTO job_requirement(Job_Post_Nama,Job_Post_Syarat,Job_Post_Salary)VALUES('$Job_Post_Nama','$Job_Post_Syarat','$Job_Post_Salary')";

  $result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
$message = "Create Successfully.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> location.href='JobRequirement.php'; </script>";
		exit;
}	


