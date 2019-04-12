<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$Education_detail_Id = $_GET['Education_detail_Id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE education,subject FROM education 
	  INNER JOIN subject ON education.Edu_Type = subject.Edu_Type 
	  WHERE Education_detail_Id=$Education_detail_Id");
 
//redirecting to the display page (education.php in our case)
header("Location:education.php");

?>