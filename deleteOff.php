<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$user_id = $_GET['user_id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM userlist WHERE user_id=$user_id");
 
//redirecting to the display page (3.php in our case)
header("Location:registerOff.php");

?>

