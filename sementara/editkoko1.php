
<?php

$Cocuriculum_Id = null;
if ( !empty($_GET['Cocuriculum1_Id'])) {
	$Cocuriculum1_Id = $_REQUEST['Cocuriculum1_Id'];
}

//including the database connection file
include_once("config.php");
 
if(isset($_POST['update'])) {    
    $Cocuriculum1_Id = $_POST['Cocuriculum1_Id'];
	 
    $Koko_Activity_Year_after = $_POST['Koko_Activity_Year_after'];
    $Koko_Activity_name_after = $_POST['Koko_Activity_name_after'];
    //$Koko_Activity_after_Cert = $_POST['$Koko_Activity_after_Cert']; 
	
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

			$sql = "UPDATE cocuriculum1 SET Koko_Activity_Year_after='$Koko_Activity_Year_after',Koko_Activity_name_after='$Koko_Activity_name_after',Koko_Activity_after_Cert='$filename' WHERE Cocuriculum1_Id=$Cocuriculum1_Id";

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
       $result = mysqli_query($mysqli, "UPDATE cocuriculum1 SET Koko_Activity_Year_after='$Koko_Activity_Year_after',Koko_Activity_name_after='$Koko_Activity_name_after',Koko_Activity_after_Cert='$filename' WHERE Cocuriculum1_Id=$Cocuriculum1_Id");
        //display success message
        echo "<script>alert ('Data edit successfully.')</script>";
        echo "<br/><a href='koko1.php'>View Result</a>";
    }
}
?>
<?php

	//selecting data associated with this particular id
	$result = mysqli_query($mysqli, "SELECT * FROM cocuriculum1 WHERE Cocuriculum1_Id=$Cocuriculum1_Id");
	
	while($res = mysqli_fetch_array($result))
	{
		$Koko_Activity_Year_after = $res['Koko_Activity_Year_after'];
		$Koko_Activity_name_after = $res['Koko_Activity_name_after'];
		$Koko_Activity_after_Cert = $res['Koko_Activity_after_Cert'];
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
    <form class="form-inline" method="post" action="editkoko1.php?Cocuriculum1_Id=<?php echo $Cocuriculum1_Id?>" enctype="multipart/form-data">
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
                                             <th scope="col"><label for="year">YEAR</label></th>
                                             <th scope="col" ><input class="form-control" type="number" name="Koko_Activity_Year_after" min="1990" max="2018" value="<?php echo $Koko_Activity_Year_after;?>"></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col"><label for="activity">ACTIVITY</label></th>
                                             <th scope="col" ><input class="form-control" type="text" name="Koko_Activity_name_after" value="<?php echo $Koko_Activity_name_after;?>"></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col"><label for="file">FILE UPLOADED</label></th>
                                             <th scope="col" ><input class="form-control" type="file" name="Koko_Activity_after_Cert"value="<?php echo $Koko_Activity_after_Cert;?>"></th>
                                        
                                        </tr>
										<tr> 
                                        <th scope="col"><input type="hidden" name="Cocuriculum1_Id" value=<?php echo $_GET['Cocuriculum1_Id'];?>></th>
               
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="modal-footer">
							<input type="submit" name="update" value="Update" class="btn btn-success" /><a class="btn btn-primary" href="koko1.php">Back</a>
							
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .animated -->
			
        </div><!-- .content -->
  
       
    
           
</body>
</html>