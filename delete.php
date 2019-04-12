<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$Job_Requirement_Id = $_GET['Job_Requirement_Id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM job_requirement  WHERE Job_Requirement_Id=$Job_Requirement_Id");
 
//redirecting to the display page (education.php in our case)
header("Location:JobRequirement.php");

?>