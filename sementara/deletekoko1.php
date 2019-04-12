<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$Cocuriculum1_Id = $_GET['Cocuriculum1_Id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM cocuriculum1 WHERE Cocuriculum1_Id=$Cocuriculum1_Id");
 
//redirecting to the display page (3.php in our case)
header("Location:koko1.php");

?>