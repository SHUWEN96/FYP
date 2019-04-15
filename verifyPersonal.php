<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();

$Applicant_Id = null;
    if ( !empty($_GET['Applicant_Id'])) {
        $Applicant_Id = $_REQUEST['Applicant_Id'];
    }
	

$qlist = "SELECT * FROM applicant WHERE Applicant_Id='$Applicant_Id'";
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        

	$link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
	$query ="UPDATE applicant SET Applicant_checklist='1' WHERE Applicant_Id='$Applicant_Id'";

	$result = mysqli_query($link, $query)or die("Failed to query database".mysqli_error($link));
	 echo "<script>alert ('Verify successfully.')</script>";
         echo "<br/><a href='javascript:self.history.back();'>Back</a>";
 }
 