

	<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();

$user_id = null;
if ( !empty($_GET['user_id'])) {
	$user_id = $_REQUEST['user_id'];
}

	if (isset($_POST["changePass"])) {
		$link = mysqli_connect("localhost", "root", "");
		$link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
	
		$user_Ic = mysqli_real_escape_string($link,$_POST['user_Ic']);
$password = mysqli_real_escape_string($link,$_POST['password']);
$confirmpassword = mysqli_real_escape_string($link,$_POST['confirmpassword']);

		$qlist = "SELECT * FROM userlist WHERE user_id='$user_id'";
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        

	
	$query ="UPDATE userlist SET password='$password',confirmpassword='	$confirmpassword' WHERE user_id='$user_id'";

	$result = mysqli_query($link, $query)or die("Failed to query database".mysqli_error($link));
	echo '<script>alert("Password change successfully");</script>';
		echo '<script>window.location.assign("login.php");</script>';
		exit;
 }
	}
?>

