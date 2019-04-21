<?php
//including the database connection file
include_once("config.php");
$db = db_connect();
session_start();

				$qlist = "SELECT * FROM userlist WHERE user_id='".$_SESSION['SESS_USER_ID'] ."'";
    $reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        
           $user_Ic=$rowlist["user_Ic"];
        }
		
			$qlist1 = "SELECT * FROM applicant WHERE user_Ic='".$_SESSION['SESS_NOIC'] ."'";
	$reslist1 = $db->query($qlist1);

	 while($rowlist1 = $reslist1->fetch_assoc()) {        
			   $Applicant_Name=$rowlist1["Applicant_Name"];
			}
		
			$qlist2 = "SELECT * FROM position WHERE user_Ic='".$_SESSION['SESS_NOIC'] ."'";
	$reslist2 = $db->query($qlist2);

	 while($rowlist2 = $reslist2->fetch_assoc()) {        
			   $app_post1=$rowlist2["app_post1"];
			}
	
 			if(isset($_POST['Submit'])) { 	
					
						// Connect to server and select database.
						$link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
						mysqli_select_db($link, "final_year_project")or die("cannot select DB");
						
						$sql = "INSERT INTO decision(Applicant_Name,user_Ic,app_post1,Status_1,Is_active)VALUES('$Applicant_Name','$user_Ic','$app_post1','In Process','1')";
						
					  
					// if successfully insert data into database, displays message "Successful". 
					$result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
					$message = "Insert Successfully";
							echo "<script type='text/javascript'>alert('$message');</script>";
						 echo "<script> location.href='8.php'; </script>";
						
							exit;
						}
						
							?>