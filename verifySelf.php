<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();

  $self_reference_id = null;
    if ( !empty($_GET['self_reference_id'])) {
        $self_reference_id = $_REQUEST['self_reference_id'];
    }
	

$qlist = "SELECT * FROM self_reference WHERE self_reference_id='$self_reference_id'";
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        

	$link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
	$query ="UPDATE self_reference SET self_checklist='1' WHERE self_reference_id='$self_reference_id'";

	$result = mysqli_query($link, $query)or die("Failed to query database".mysqli_error($link));
	 echo "<script>alert ('Verify successfully.')</script>";
         echo "<br/><a href='javascript:self.history.back();'>Back</a>";
 }
 