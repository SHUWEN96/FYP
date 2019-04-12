	<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();

$Decision_Id = null;
if ( !empty($_GET['Decision_Id'])) {
	$Decision_Id = $_REQUEST['Decision_Id'];
}

$qlist = "SELECT * FROM decision WHERE Decision_Id='$Decision_Id'";
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        
    $user_Ic=$rowlist["user_Ic"];
	$link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
	$query ="UPDATE decision SET Approval_status='Approval' WHERE Decision_Id='$Decision_Id'";

	$result = mysqli_query($link, $query)or die("Failed to query database".mysqli_error($link));

		echo '<script>alert("Approved");</script>';
		echo '<script>window.location.assign("finallist.php");</script>';
		exit;
									   												  
			} 
   
?>
