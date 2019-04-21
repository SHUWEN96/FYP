<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();

  $acknowledgement_id = null;
    if ( !empty($_GET['acknowledgement_id'])) {
        $acknowledgement_id = $_REQUEST['acknowledgement_id'];
    }

$qlist = "SELECT * FROM acknowledgement WHERE acknowledgement_id='$acknowledgement_id'";
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        

	$link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
	$query ="UPDATE acknowledgement SET Ack_checklist='1' WHERE acknowledgement_id='$acknowledgement_id'";

	$result = mysqli_query($link, $query)or die("Failed to query database".mysqli_error($link));
	 echo "<script>alert ('Verify successfully.')</script>";
         echo "<script> location.href='verify.php'; </script>";
 }
 