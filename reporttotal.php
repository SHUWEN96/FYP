
<?php
					//including the database connection file
					include_once("config.php");
					$db = db_connect();
					session_start();
					
					$qlist = 'SELECT SUM(CASE WHEN Status_1 = "Interview" THEN 1 ELSE 0 END) AS Interview, SUM(CASE WHEN Status_1 = "Waiting List" THEN 1 ELSE 0 END) AS WaitingList,SUM(CASE WHEN Status_1 = "Rejected" THEN 1 ELSE 0 END) AS Rejected
					FROM decision WHERE app_post1="DS45 LECTURER"';
					
					$qlist1 = 'SELECT SUM(CASE WHEN Status_1 = "Interview" THEN 1 ELSE 0 END) AS Interview, SUM(CASE WHEN Status_1 = "Waiting List" THEN 1 ELSE 0 END) AS WaitingList,SUM(CASE WHEN Status_1 = "Rejected" THEN 1 ELSE 0 END) AS Rejected
					FROM decision WHERE app_post1="DS51 SENIOR LECTURER"';
					
					$qlist2 = 'SELECT SUM(CASE WHEN Status_1 = "Interview" THEN 1 ELSE 0 END) AS Interview, SUM(CASE WHEN Status_1 = "Waiting List" THEN 1 ELSE 0 END) AS WaitingList,SUM(CASE WHEN Status_1 = "Rejected" THEN 1 ELSE 0 END) AS Rejected
					FROM decision WHERE app_post1="DS53 PROFESOR MADYA"';
					
					$reslist = $db->query($qlist);
					$reslist1 = $db->query($qlist1);
					$reslist2 = $db->query($qlist2);
					$row = $reslist->fetch_assoc();
					$row1 = $reslist1->fetch_assoc();
					$row2 = $reslist2->fetch_assoc();
					
					if(isset($_POST['Submit'])) { 	
					
               // Connect to server and select database.
					$link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
					mysqli_select_db($link, "final_year_project")or die("cannot select DB");
					
					  $Interview = $row['Interview'];
					  $WaitingList = $row['WaitingList'];
					  $Rejected = $row['Rejected'];
					  $total = $Interview+$WaitingList+$Rejected;
					  $query="UPDATE report SET Interview='$Interview',WaitingList='$WaitingList',Rejected='$Rejected',total='$total' WHERE app_post1='DS45 LECTURER'";
					  $result = mysqli_query($link, $query)or die("Failed to query database".mysqli_error($link));
					
					  $Interview = $row1['Interview'];
					  $WaitingList = $row1['WaitingList'];
					  $Rejected = $row1['Rejected'];
					  $total = $Interview+$WaitingList+$Rejected;
					  $query1="UPDATE report SET Interview='$Interview',WaitingList='$WaitingList',Rejected='$Rejected',total='$total' WHERE app_post1='DS51 SENIOR LECTURER'";
					  $result1 = mysqli_query($link, $query1)or die("Failed to query database".mysqli_error($link));
					
					  $Interview = $row2['Interview'];
					  $WaitingList = $row2['WaitingList'];
					  $Rejected = $row2['Rejected'];
					  $total = $Interview+$WaitingList+$Rejected;
					  $query2="UPDATE report SET Interview='$Interview',WaitingList='$WaitingList',Rejected='$Rejected',total='$total' WHERE app_post1='DS53 PROFESOR MADYA'";
					  $result2 = mysqli_query($link, $query2)or die("Failed to query database".mysqli_error($link));
	
		
					$message = "Update Successfully";
							echo "<script type='text/javascript'>alert('$message');</script>";
						echo "<script> location.href='javascript:history.back(1);'</script>";
						
							exit;
					}
					
						?>
						
					