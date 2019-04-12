<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "UPDATE `notify` SET `status` = 'read' WHERE `id` = $id;");
 
//redirecting to the display page (education.php in our case)
header("Location:applicant.php");

?>
