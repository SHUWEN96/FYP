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
    $coco_level = $_POST['coco_level'];  
    $Koko_Activity_Year = $_POST['Koko_Activity_Year'];
    $Koko_Activity_name = $_POST['Koko_Activity_name'];
    //$Koko_Activity_before_Cert = $_POST['$Koko_Activity_before_Cert']; 
	
	$folder_path = 'file/';

    $filename = basename($_FILES['Koko_Activity_Cert']['name']);
    $newname = $folder_path . $filename;

    $FileType = pathinfo($newname,PATHINFO_EXTENSION);

    if($FileType == "pdf")
    {
        if (move_uploaded_file($_FILES['Koko_Activity_Cert']['tmp_name'], $newname))
        {

			// Connect to server and select database.
			$link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
			mysqli_select_db($link, "final_year_project")or die("cannot select DB");

						$sql = "INSERT INTO cocuriculum(user_Ic,coco_level,Koko_Activity_Year, Koko_Activity_name, Koko_Activity_Cert) VALUES ('$user_Ic','$coco_level','$Koko_Activity_Year','$Koko_Activity_name','$filename')";

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
    if(empty($coco_level) ||empty($Koko_Activity_Year) || empty($Koko_Activity_name) || empty($filename)) {      
        if(empty($coco_level)) {
            echo "<script>alert('Cocuriculum level field is empty.')</script>";
        }	
        if(empty($Koko_Activity_Year)) {
            echo "<script>alert('Year field is empty.')</script>";
        }
        
        if(empty($Koko_Activity_name)) {
            echo "<script>alert('Activity field is empty.')</script>";
        }
        
        if(empty($filename)) {
            echo "<script>alert('Cert field is empty.')</script>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
   
        //display success message
        echo "<script> alert('Data added successfully');</script>";
		
        echo "<script> location.href='cocuriculum.php'; </script>";
		
    }
}
?>