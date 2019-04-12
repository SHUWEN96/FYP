<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$acknowledgement_id = $_GET['acknowledgement_id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM acknowledgement WHERE acknowledgement_id=$acknowledgement_id");
 
//redirecting to the display page (3.php in our case)
header("Location:7.php");

?>