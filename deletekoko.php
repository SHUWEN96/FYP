<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$Cocuriculum_Id = $_GET['Cocuriculum_Id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM cocuriculum WHERE Cocuriculum_Id=$Cocuriculum_Id");
 
//redirecting to the display page (3.php in our case)
header("Location:cocuriculum.php");

?>