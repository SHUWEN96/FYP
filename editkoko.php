
<?php

$Cocuriculum_Id = null;
if ( !empty($_GET['Cocuriculum_Id'])) {
	$Cocuriculum_Id = $_REQUEST['Cocuriculum_Id'];
}

//including the database connection file
include_once("config.php");
 $db = db_connect();
session_start();
if(isset($_POST['update'])) {    
    $Cocuriculum_Id = $_POST['Cocuriculum_Id'];
	
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

			$sql = "UPDATE cocuriculum SET coco_level='$coco_level',Koko_Activity_Year='$Koko_Activity_Year',Koko_Activity_name='$Koko_Activity_name',Koko_Activity_Cert='$filename' WHERE Cocuriculum_Id=$Cocuriculum_Id";

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
    if(empty($Koko_Activity_Year) || empty($Koko_Activity_name) || empty($filename)) {                
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
        // if all the fields are filled (not empty)             
        //insert data to database
       $result = mysqli_query($mysqli, "UPDATE cocuriculum SET coco_level='$coco_level',Koko_Activity_Year='$Koko_Activity_Year',Koko_Activity_name='$Koko_Activity_name',Koko_Activity_Cert='$filename' WHERE Cocuriculum_Id=$Cocuriculum_Id");
        //display success message
        echo "<script>alert ('Data edit successfully.')</script>";
        echo "<br/><a href='cocuriculum.php'><button style='border-radius: 8px;' type='button' class='btn btn-primary'>View Result</button></a>";
    }
}
?>
<?php

	//selecting data associated with this particular id
	$result = mysqli_query($mysqli, "SELECT * FROM cocuriculum WHERE Cocuriculum_Id=$Cocuriculum_Id");
	
	while($res = mysqli_fetch_array($result))
	{
		$user_Ic = $res['user_Ic'];
		$coco_level = $res['coco_level'];
		$Koko_Activity_Year = $res['Koko_Activity_Year'];
		$Koko_Activity_name = $res['Koko_Activity_name'];
		$Koko_Activity_Cert = $res['Koko_Activity_Cert'];
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
    <title>E-Recruitment Management System</title>
     <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/ico" href="images/icon.png" />


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
    <form class="form-inline" method="post" action="editkoko.php?Cocuriculum_Id=<?php echo $Cocuriculum_Id?>" enctype="multipart/form-data">
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
                                             <center>
                                             <th scope="col">Applicant No Identity Card</th>
                                             <th scope="col" ><input class="form-control" name="user_Ic" id="disabledInput" type="text" 
											 placeholder="<?php echo $_SESSION['SESS_NOIC'] ?>" readonly></th>
                                        
                                       </center>
                                        
                                    </tr>
									<tr>
											             <th scope="col">Cocuriculum Level</th>
											             <th><select name='coco_level' class="form-control"value="<?php echo $coco_level;?>">
											             <option value="">Select Level</option>
											             <option value="School/University Level">School/University Level</option>
											             <option value="After graduation">After graduation</option>
							
											             </select></th>
							
											            </tr>
														
                                        <tr>
                                             <th scope="col"><label for="year">Year</label></th>
                                             <th scope="col" ><input class="form-control" type="number" name="Koko_Activity_Year" min="1990" max="2018" value="<?php echo $Koko_Activity_Year;?>"></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col"><label for="activity">Activity</label></th>
                                             <th scope="col" ><input class="form-control" type="text" name="Koko_Activity_name" value="<?php echo $Koko_Activity_name;?>"></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col"><label for="file">File Uploaded</label></th>
                                             <th scope="col" ><input class="form-control" type="file" name="Koko_Activity_Cert" value="<?php echo $Koko_Activity_Cert;?>"></th>
                                        
                                        </tr>
										<tr> 
                                        <th scope="col"><input type="hidden" name="Cocuriculum_Id" value=<?php echo $_GET['Cocuriculum_Id'];?>></th>
               
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="modal-footer">
							<input style="border-radius: 8px;" type="submit" name="update" value="Update" class="btn btn-success" /><a style="border-radius: 8px;" class="btn btn-primary" href="cocuriculum.php">Back</a>
							
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .animated -->
			
        </div><!-- .content -->
  
       
    
           
</body>
</html>