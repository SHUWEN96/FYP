<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$Choose_Position_Id = $_GET['Choose_Position_Id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM position WHERE Choose_Position_Id=$Choose_Position_Id");
 
//redirecting to the display page (3.php in our case)
header("Location:i.php");

?>