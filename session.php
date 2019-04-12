<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_USER_ID is present or not
	if(!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '')) {
		header("location: MainPage.html");
		exit();
	}
?>

<?php


	if (isset($_SESSION['timeout'])) {	
	
	//10 x 60 = 600s sama ngn 10minute
		if ($_SESSION['timeout'] + 10 * 60 < time()){
			session_destroy();
		}
	}
	else {
		$_SESSION['timeout']=time();
	}
	
	
?>