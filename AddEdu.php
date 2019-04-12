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

 
	if(isset($_POST['Submit'])) {   
		$Edu_Type = $_POST['Edu_Type']; 
		$Edu_School = $_POST['Edu_School'];
		$Edu_Year = $_POST['Edu_Year'];
		$Edu_Level = $_POST['Edu_Level'];
		$Edu_Specialize = $_POST['Edu_Specialize'];
		$Edu_Status = $_POST['Edu_Status'];
		$Edu_Date = $_POST['Edu_Date'];

		
		
		/*Prevent sql injection*/
		$Edu_Type = stripcslashes($Edu_Type);
		$Edu_School = stripcslashes($Edu_School);
		$Edu_Year = stripcslashes($Edu_Year);
		$Edu_Level = stripcslashes($Edu_Level);
		$Edu_Specialize = stripcslashes($Edu_Specialize);
		$Edu_Status = stripcslashes($Edu_Status);
		$Edu_Date = stripcslashes($Edu_Date);

		$folder_path = 'file/';

		$filename = basename($_FILES['Edu_Cert']['name']);
		$newname = $folder_path . $filename;

		$FileType = pathinfo($newname,PATHINFO_EXTENSION);

		if($FileType == "pdf")
		{
			if (move_uploaded_file($_FILES['Edu_Cert']['tmp_name'], $newname))
			{

				// Connect to server and select database.
				$link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
				mysqli_select_db($link, "final_year_project")or die("cannot select DB");

			$sql = "INSERT INTO education(user_Ic,Edu_Type, Edu_School, Edu_Year, Edu_Level, Edu_Specialize, Edu_Status, Edu_Date, Edu_Cert) VALUES ('$user_Ic','$Edu_Type','$Edu_School','$Edu_Year','$Edu_Level','$Edu_Specialize','$Edu_Status','$Edu_Date','$filename')";

				$fileresult = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
		
				if (isset($fileresult))
				{
					echo "<script> alert('File Uploaded Successfully ');</script>";
				} else
				{
					echo "<script> alert('Something went Wrong.');</script>";
				}
			}
			else
			{

				echo "<script> alert('File Upload Failed.');</script>";
			}


		}
		else
		{
			echo "<script> alert('Class notes must be uploaded in PDF format.');</script>";
		}

		
			
		// checking empty fields
	if(empty($Edu_School) || empty($Edu_Year) ||empty($Edu_Level) || empty($filename)) {                
			if(empty($Edu_School)) {
				echo "<script>alert('School field is empty.')</script>";
			}
			
			if(empty($Edu_Year)) {
				echo "<script>alert('Year field is empty.')</script>";
			}
			
			if(empty($Edu_Level)) {
				echo "<script>alert('Level field is empty.')</script>";
			}
			
			if(empty($filename)) {
				echo "<script>alert('Cert field is empty.')</script>";
			}
			
			
			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else { 
	   
			//display success message
			echo "<script> alert('Data added successfully');</script>";
			
			echo "<script> location.href='education.php'; </script>";
			
		}
	}
	?>