
<?php


$Work_Experience_Id = null;
if ( !empty($_GET['Work_Experience_Id'])) {
	$Work_Experience_Id = $_REQUEST['Work_Experience_Id'];
}

//including the database connection file
include_once("config.php");
 $db = db_connect();
session_start();
if(isset($_POST['update'])) { 
       
    $Employer_Name_Add = $_POST['Employer_Name_Add'];
    $Applicant_Post = $_POST['Applicant_Post'];
	$Applicant_Month_Salary = $_POST['Applicant_Month_Salary'];
	$Work_Start_Date = $_POST['Work_Start_Date'];
	$Work_End_Date = $_POST['Work_End_Date'];
	$Work_Contract = $_POST['Work_Contract'];
	$Reason_Stop = $_POST['Reason_Stop'];
	
	// checking empty fields
    if(empty($Employer_Name_Add) || empty($Applicant_Post) || empty($Applicant_Month_Salary)|| empty($Work_Start_Date)|| empty($Work_End_Date)|| empty($Work_Contract)|| empty($Reason_Stop)) {                
        if(empty($Employer_Name_Add)) {
            echo "<script>alert('Employer name field is empty.')</script>";
        }
        
        if(empty($Applicant_Post)) {
            echo "<script>alert('Applicant post field is empty.')</script>";
		}	
        
        if(empty($Applicant_Month_Salary)) {
            echo "<script>alert('Applicant Month Salary field is empty.')</script>";
			
        }
		
		if(empty($Work_Start_Date)) {
            echo "<script>alert('Work Start Date field is empty.')</script>";
			
        }
		
		if(empty($Work_End_Date)) {
            echo "<script>alert('Work End Date field is empty.')</script>";
			
        }
		
		if(empty($Work_Contract)) {
            echo "<script>alert('Work Contract field is empty.')</script>";
			
        }
		
		if(empty($Reason_Stop)) {
            echo "<script>alert('Reason Stop field is empty.')</script>";
			
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
       $result = mysqli_query($mysqli, "UPDATE work_experience SET Employer_Name_Add='$Employer_Name_Add',Applicant_Post='$Applicant_Post',Applicant_Month_Salary='$Applicant_Month_Salary',Work_Start_Date='$Work_Start_Date',Work_End_Date='$Work_End_Date',Work_Contract='$Work_Contract',Reason_Stop='$Reason_Stop' WHERE Work_Experience_Id=$Work_Experience_Id");
        //display success message
        echo "<script>alert ('Data edit successfully.')</script>";
        echo "<br/><a href='4.php'>View Result</a>";
    }
}		
?>

<?php

	//selecting data associated with this particular id
	$result = mysqli_query($mysqli, "SELECT * FROM work_experience WHERE Work_Experience_Id=$Work_Experience_Id");
	
	while($res = mysqli_fetch_array($result))
	{
		$user_Ic = $res['user_Ic'];
		$Employer_Name_Add = $res['Employer_Name_Add'];
        $Applicant_Post = $res['Applicant_Post'];
	    $Applicant_Month_Salary = $res['Applicant_Month_Salary'];
	    $Work_Start_Date = $res['Work_Start_Date'];
	    $Work_End_Date = $res['Work_End_Date'];
	    $Work_Contract = $res['Work_Contract'];
	    $Reason_Stop = $res['Reason_Stop'];
		
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
    <form class="form-inline" method="post" action="editExperience.php?Work_Experience_Id=<?php echo $Work_Experience_Id?>" enctype="multipart/form-data">
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
                                             <th scope="col">Employer's Name and Address</th>
                                             <th scope="col" ><input class="form-control" type="text" name="Employer_Name_Add" value="<?php echo $Employer_Name_Add;?>"></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">Position</th>
                                             <th scope="col" ><input class="form-control" type="text" name="Applicant_Post" value="<?php echo $Applicant_Post;?>"></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">Basic Salary per Month (RM)</th>
                                             <th scope="col" ><input class="form-control" type="text" name="Applicant_Month_Salary" value="<?php echo $Applicant_Month_Salary;?>"></th>
                                        
                                        </tr>
										
										<tr> 
                                             <th scope="col">Date Start</</th>
                                             <th scope="col"><input class="form-control" type="date" name="Work_Start_Date" value="<?php echo $Work_Start_Date;?>"></th>
                                        </tr>
			                            <tr> 
                                             <th scope="col">Date End</th>
                                             <th scope="col"><input class="form-control" type="date" name="Work_End_Date" value="<?php echo $Work_End_Date;?>"></th>
                                         </tr>
			                         
			                            <tr> 
                                             <th scope="col">Fixed / Contract and Others</th>
                                             <th scope="col"><input class="form-control" type="text" name="Work_Contract" value="<?php echo $Work_Contract;?>"></th>
                                        </tr>
			                             <tr> 
                                             <th scope="col">Reason Stop</th>
                                             <th scope="col"><input class="form-control" type="text" name="Reason_Stop" value="<?php echo $Reason_Stop;?>"></th>
                                        </tr>
										<tr> 
                                        <th scope="col"><input type="hidden" name="Work_Experience_Id" value=<?php echo $_GET['Work_Experience_Id'];?>></th>
               
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="modal-footer">
							<input style="border-radius: 8px;" type="submit" name="update" value="Update" class="btn btn-success" /><a class="btn btn-primary" href="4.php">Back</a>
							
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .animated -->
			
        </div><!-- .content -->
  
       
    
           
</body>
</html>

