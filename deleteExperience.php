<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$Work_Experience_Id = $_GET['Work_Experience_Id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM work_experience WHERE Work_Experience_Id=$Work_Experience_Id");
 
//redirecting to the display page (3.php in our case)
header("Location:4.php");

?>