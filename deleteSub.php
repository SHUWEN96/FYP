<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$subject_id = $_GET['subject_id'];
$Edu_Type = $_GET['Edu_Type'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM subject WHERE subject_id=$subject_id");

//redirecting to the display page (education.php in our case)
 echo "<br/><a href='subject.php?Edu_Type=".$Edu_Type."'><a href='javascript:self.history.back();'>Go Back</a></a>";

?>