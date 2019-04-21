<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();

  $Education_detail_Id = null;
    if ( !empty($_GET['Education_detail_Id'])) {
        $Education_detail_Id = $_REQUEST['Education_detail_Id'];
    }

$qlist = "SELECT * FROM education WHERE Education_detail_Id='$Education_detail_Id'";
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        

	$link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
	$query ="UPDATE education SET Edu_checklist='1' WHERE user_Ic='".$_SESSION['SESS_NOIC'] ."'";

	$result = mysqli_query($link, $query)or die("Failed to query database".mysqli_error($link));
	 echo "<script>alert ('Verify successfully.')</script>";
         echo "<script> location.href='cocuriculum.php'; </script>";
 }
 