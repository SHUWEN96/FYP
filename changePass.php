	<?php
include '../../Final Year Project/sufee-master/config.php';

session_start();
$link = mysqli_connect("localhost", "root", "");

mysqli_connect("localhost","root","")or die(mysqli_connect_error());
mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

$user_id = null;
if ( !empty($_GET['user_id'])) {
	$user_id = $_REQUEST['user_id'];
}

	if(isset($_POST['changePass']))
{	
	//$pengesahan = $_POST['approve']; UPDATE users SET 'Password' = MD5('Password');
	$p = (md5($_POST['password']));
	$p2 = (md5($_POST['confirmpassword']));
	$user_id = $_POST['user_id'];
	
		if($p  == '' || $p2  == '')
		
			
			echo "<script type='text/javascript'>
						alert(' Error!Password are not same ');
						 window.location = 'changePass.php';
							</script>";


		else if($p2  == $p )
		{
			$query ="UPDATE userlist SET password ='$p2',confirmpassword ='$p2' WHERE user_id = '".$user_id."'";

			$result = mysqli_query($link, $query)or die("Failed to query database".mysqli_error($link));
	
							
					echo "<script type='text/javascript'>
						alert(' Change password Successfully');
						 window.location = 'login.php';
							</script>";
							
}else{
	
	echo "<script type='text/javascript'>
						alert(' RALAT ! ');
						 window.location = 'login.php';
							</script>";
	
}
}
				
mysqli_close($con);
		
?>
