<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$Applicant_Id = $_GET['Applicant_Id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM applicant WHERE Applicant_Id=$Applicant_Id");
 
//redirecting to the display page (3.php in our case)
header("Location:1.php");

?>