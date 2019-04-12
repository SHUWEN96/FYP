
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $Koko_Activity_Year_after = $_POST['Koko_Activity_Year_after'];
    $Koko_Activity_name_after = $_POST['Koko_Activity_name_after'];
    //$Koko_Activity_before_Cert = $_POST['$Koko_Activity_before_Cert']; 
	
	$folder_path = 'file/';

    $filename = basename($_FILES['Koko_Activity_after_Cert']['name']);
    $newname = $folder_path . $filename;

    $FileType = pathinfo($newname,PATHINFO_EXTENSION);

    if($FileType == "pdf")
    {
        if (move_uploaded_file($_FILES['Koko_Activity_after_Cert']['tmp_name'], $newname))
        {

			// Connect to server and select database.
			$link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
			mysqli_select_db($link, "final_year_project")or die("cannot select DB");

			$sql = "INSERT INTO cocuriculum1(Koko_Activity_Year_after, Koko_Activity_name_after, Koko_Activity_after_Cert) VALUES ('$Koko_Activity_Year_after','$Koko_Activity_name_after','$filename')";

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
    if(empty($Koko_Activity_Year_after) || empty($Koko_Activity_name_after) || empty($filename)) {                
        if(empty($Koko_Activity_Year_after)) {
            echo "<script>alert('Year field is empty.')</script>";
        }
        
        if(empty($Koko_Activity_name_after)) {
            echo "<script>alert('Activity field is empty.')</script>";
        }
        
        if(empty($filename)) {
            echo "<script>alert('Cert field is empty.')</script>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        
        //display success message
       echo "<script> alert('Data added successfully');</script>";
		
        echo "<script> location.href='koko1.php'; </script>";
    }
}
?>
