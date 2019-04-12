
<?php

$Training_Id = null;
if ( !empty($_GET['Training_Id'])) {
	$Training_Id = $_REQUEST['Training_Id'];
}

//including the database connection file
include_once("config.php");
 $db = db_connect();
session_start();
if(isset($_POST['update'])) {    
    $Training_Name = $_POST['Training_Name'];
    $Training_date_start = $_POST['Training_date_start'];
	$Training_date_end = $_POST['Training_date_end'];
	$Training_Organizer = $_POST['Training_Organizer'];
	$Training_Place = $_POST['Training_Place'];
	$Training_Result = $_POST['Training_Result'];
	
	// checking empty fields
    if(empty($Training_Name) || empty($Training_date_start) || empty($Training_date_end)|| empty($Training_Organizer)|| empty($Training_Place)|| empty($Training_Result)) {                
        if(empty($Training_Name)) {
            echo "<script>alert('Training name field is empty.')</script>";
        }
        
        if(empty($Training_date_start)) {
            echo "<script>alert('Training date start field is empty.')</script>";
		}	
        
        if(empty($Training_date_end)) {
            echo "<script>alert('Training date end field field is empty.')</script>";
			
        }
		
		if(empty($Training_Organizer)) {
            echo "<script>alert('Training Organizer field is empty.')</script>";
			
        }
		
		if(empty($Training_Place)) {
            echo "<script>alert('Training Place field is empty.')</script>";
			
        }
		
		if(empty($Training_Result)) {
            echo "<script>alert('Training Result field is empty.')</script>";
			
        }
		
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
    else { 
        // if all the fields are filled (not empty)             
        //insert data to database
      $result = mysqli_query($mysqli, "UPDATE training SET Training_Name='$Training_Name',Training_date_start='$Training_date_start',Training_date_end='$Training_date_end',Training_Organizer='$Training_Organizer',Training_Place='$Training_Place',Training_Result='$Training_Result' WHERE Training_Id=$Training_Id");
        //display success message
        echo "<script>alert ('Data edit successfully.')</script>";
        echo "<br/><a href='5.php'>View Result</a>";
    }
}	
?>

<?php

	//selecting data associated with this particular id
	$result = mysqli_query($mysqli, "SELECT * FROM training WHERE Training_Id=$Training_Id");
	
	while($res = mysqli_fetch_array($result))
	{
		$user_Ic = $res['user_Ic'];
		$Training_Name = $res['Training_Name'];
        $Training_date_start = $res['Training_date_start'];
	    $Training_date_end = $res['Training_date_end'];
	    $Training_Organizer = $res['Training_Organizer'];
	    $Training_Place = $res['Training_Place'];
	    $Training_Result = $res['Training_Result'];
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
    <form class="form-inline" method="post" action="editTraining.php?Training_Id=<?php echo $Training_Id?>" enctype="multipart/form-data">
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
                                             <th scope="col">Course Name</th>
                                             <th scope="col" ><input class="form-control" type="text" name="Training_Name" value="<?php echo $Training_Name;?>"></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">Start Date</th>
                                             <th scope="col" ><input class="form-control" type="date" name="Training_date_start" value="<?php echo $Training_date_start;?>"></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">End Date</th>
                                             <th scope="col" ><input class="form-control" type="date" name="Training_date_end" value="<?php echo $Training_date_end;?>"></th>
                                        
                                        </tr>
										
			                            <tr> 
                                             <th scope="col">Organizer</</th>
                                             <th scope="col"><input class="form-control" type="text" name="Training_Organizer" value="<?php echo $Training_Organizer;?>"></th>
                                         </tr>
			                         
			                            <tr> 
                                             <th scope="col">Place</th>
                                             <th scope="col"><input class="form-control" type="text" name="Training_Place" value="<?php echo $Training_Place;?>"></th>
                                        </tr>
			                             <tr> 
                                             <th scope="col">Results</th>
                                             <th scope="col"><input class="form-control" type="text" name="Training_Result" value="<?php echo $Training_Result;?>"></th>
                                        </tr>
										<tr> 
                                        <th scope="col"><input type="hidden" name="Training_Id" value=<?php echo $_GET['Training_Id'];?>></th>
               
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="modal-footer">
							<input style="border-radius: 8px;" type="submit" name="update" value="Update" class="btn btn-success" /><a style="border-radius: 8px;" class="btn btn-primary" href="5.php">Back</a>
							
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .animated -->
			
        </div><!-- .content -->
  
       
    
           
</body>
</html>

