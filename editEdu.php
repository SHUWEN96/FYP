
<?php

$Education_detail_Id = null;
if ( !empty($_GET['Education_detail_Id'])) {
	$Education_detail_Id = $_REQUEST['Education_detail_Id'];
}

//including the database connection file
include_once("config.php");
$db = db_connect();
session_start();

$qlist = "SELECT * FROM userlist WHERE user_id='".$_SESSION['SESS_USER_ID'] ."'";
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        
           $user_Ic=$rowlist["user_Ic"];
        }

if(isset($_POST['update'])) {    
   
	$Edu_Type = $_POST['Edu_Type']; 
		$Edu_School = $_POST['Edu_School'];
		$Edu_Year = $_POST['Edu_Year'];
		$Edu_Level = $_POST['Edu_Level'];
		$Edu_Specialize = $_POST['Edu_Specialize'];
		$Edu_Status = $_POST['Edu_Status'];
		$Edu_Date = $_POST['Edu_Date'];

		
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

			$sql = "UPDATE education SET Edu_Type='$Edu_Type',Edu_School='$Edu_School',Edu_Year='$Edu_Year',Edu_Level='$Edu_Level',Edu_Specialize='$Edu_Specialize',Edu_Status='$Edu_Status',Edu_Date='$Edu_Date',Edu_Cert='$filename' WHERE Education_detail_Id=$Education_detail_Id";

			$fileresult = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
	
			if (isset($fileresult))
            {
                echo "<script> alert('File Update Successfully ');</script>";
            } else
            {
                echo "<script> alert('Something went Wrong.');</script>";
            }
        }
        else
        {

            echo "<script> alert('File Update Failed.');</script>";
        }


    }
    else
    {
        echo "<script> alert('Class notes must be uploaded in PDF format.');</script>";
    }

	
        
    // checking empty fields
		if(empty($Edu_Type) ||empty($Edu_School) || empty($Edu_Year) ||empty($Edu_Level) ||empty($Edu_Date) || empty($filename)) {    
            if(empty($Edu_Type)) {
				echo "<script>alert('Education Level field is empty.')</script>";
			}		
			if(empty($Edu_School)) {
				echo "<script>alert('School field is empty.')</script>";
			}
			
			if(empty($Edu_Year)) {
				echo "<script>alert('Year field is empty.')</script>";
			}
			
			if(empty($Edu_Level)) {
				echo "<script>alert('Level field is empty.')</script>";
			}
			
			
			if(empty($Edu_Date)) {
				echo "<script>alert('Date field is empty.')</script>";
			}
			
			
			if(empty($filename)) {
				echo "<script>alert('Cert field is empty.')</script>";
			}
			
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
       $result = mysqli_query($mysqli, "UPDATE education SET Edu_Type='$Edu_Type',Edu_School='$Edu_School',Edu_Year='$Edu_Year',Edu_Level='$Edu_Level',Edu_Specialize='$Edu_Specialize',Edu_Status='$Edu_Status',Edu_Date='$Edu_Date',Edu_Cert='$filename' WHERE Education_detail_Id=$Education_detail_Id");
        //display success message
        echo "<script>alert ('Data edit successfully.')</script>";
        echo "<br/><a href='education.php'>View Result</a>";
    }
}
?>
<?php

	//selecting data associated with this particular id
	$result = mysqli_query($mysqli, "SELECT * FROM education WHERE Education_detail_Id=$Education_detail_Id");
	
	while($res = mysqli_fetch_array($result))
	{
		$Edu_Type=$res['Edu_Type'];
		$Edu_School = $res['Edu_School'];
		$Edu_Year = $res['Edu_Year'];
		$Edu_Level = $res['Edu_Level'];
		$Edu_Specialize = $res['Edu_Specialize'];
		$Edu_Status = $res['Edu_Status'];
        $Edu_Date = $res['Edu_Date'];
        $Edu_Cert = $res['Edu_Cert'];
	}

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<style>
	body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  font-size:14px;
}
	</style>

</head>
<body>
    <br/><br/>
    <form class="form-inline" method="post" action="editEdu.php?Education_detail_Id=<?php echo $Education_detail_Id?>" enctype="multipart/form-data">
         <div class="content mt-3">
		     <div class="animated">
		         
	                <div class="modal-dialog modal-lg" role="document">
	                     <div class="modal-content">
	                        <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Edit Data</h5>
                               
                            </div>
							<div class="modal-body">
                                <div class="card-body">
                                <table class="table" width="25%" border="0">
                                    <tbody>
									<tr>
                                             <th scope="col">Applicant No Identity Card</th>
                                             <th scope="col" ><input class="form-control" name="user_Ic" id="disabledInput" type="text" 
											 placeholder="<?php echo $_SESSION['SESS_NOIC'] ?>" readonly></th>
                                        
                                        </tr>
										
									<tr>
									 <th scope="col">Education Level</th>
									<th><select name='Edu_Type' class="form-control" required>
									<option value="">Select Level</option>
									<option value="Primary">Primary</option>
									<option value="SRP/PMR">SRP/PMR</option>
									<option value="SPM/SPVM">SPM/SPVM</option>
									<option value="STPM/STAM">STPM/STAM</option>
									<option value="University/College/Polytechnic">University/College/Polytechnic</option>
					
									</select></th>
					               
									</tr>
									
									<tr>
                                             <th scope="col">School Name/Name of Institution & Branch</th>
                                             <th scope="col" ><input class="form-control" type="text" name="Edu_School" value="<?php echo $Edu_School;?>" required></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">Year End</th>
                                             <th scope="col" ><input class="form-control" type="number" name="Edu_Year" min="1990" max="2018" value="<?php echo $Edu_Year;?>"required></center></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">Grade/CGPA</th>
                                             <th scope="col" ><input class="form-control" type="text" name="Edu_Level" value="<?php echo $Edu_Level;?>" required></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">Specialization Area</th>
                                             <th scope="col" ><input class="form-control" type="text" name="Edu_Specialize" value="<?php echo $Edu_Specialize;?>" ></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">Status</th>
                                             <th scope="col" ><input class="form-control" type="text" name="Edu_Status" value="<?php echo $Edu_Status;?>"></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">Date</th>
                                             <th scope="col" ><input class="form-control" type="date" name="Edu_Date" value="<?php echo $Edu_Date;?>"></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">Attach Result Certificate</th>
                                             <th scope="col" ><input class="form-control" type="file" name="Edu_Cert" value="<?php echo $Edu_Cert;?>" required></th>
                                        
                                        </tr>
										
                                        
                                    </tbody>
                                </table>
                                    </div>
                            </div>
                            <div class="modal-footer">
							<input style="border-radius: 8px;" type="submit" name="update" value="Update" class="btn btn-success" /><a style="border-radius: 8px;" class="btn btn-primary" href="education.php">Back</a>
							
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .animated -->
			
        </div><!-- .content -->
  
       
    
           
</body>
</html>

