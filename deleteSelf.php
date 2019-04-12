<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$self_reference_id = $_GET['self_reference_id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM self_reference WHERE self_reference_id=$self_reference_id");
 
//redirecting to the display page (3.php in our case)
header("Location:6.php");

?>