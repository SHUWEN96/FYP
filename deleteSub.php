<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$subject_id = $_GET['subject_id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM subject WHERE subject_id=$subject_id");
 
//redirecting to the display page (education.php in our case)
header("Location:subject.php");

?>