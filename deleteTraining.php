<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$Training_Id = $_GET['Training_Id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM training WHERE Training_Id=$Training_Id");
 
//redirecting to the display page (3.php in our case)
header("Location:5.php");

?>