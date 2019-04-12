<?php
 
    $Job_Requirement_Id = null;
    if ( !empty($_GET['Job_Requirement_Id'])) {
        $Job_Requirement_Id = $_REQUEST['Job_Requirement_Id'];
    }
     
	 //including the database connection file
include_once("config.php");
 $db = db_connect();
session_start();
if(isset($_POST['update'])) { 
       
     $Job_Post_Nama = $_POST['grade'];
        $Job_Post_Syarat = $_POST['jobRequire'];
        $Job_Post_Salary = $_POST['jobSalary'];
	
	// checking empty fields
    if(empty($Job_Post_Nama) || empty($Job_Post_Syarat) || empty($Job_Post_Salary) ) {                
        if(empty($Job_Post_Nama)) {
            echo "<script>alert('Job Postion Name is empty.')</script>";
        }
        
        if(empty($Job_Post_Syarat)) {
            echo "<script>alert('Job Postion Syarat field is empty.')</script>";
		}	
        
        if(empty($Job_Post_Salary)) {
            echo "<script>alert('Job Post Salary field is empty.')</script>";
			
        }
		
		
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
       $result = mysqli_query($mysqli, "UPDATE job_requirement SET Job_Post_Nama='$Job_Post_Nama',Job_Post_Syarat='$Job_Post_Syarat',Job_Post_Salary='$Job_Post_Salary'WHERE Job_Requirement_Id=$Job_Requirement_Id");
        //display success message
        echo "<script>alert ('Data edit successfully.')</script>";
        echo "<br/><a href='JobRequirement.php'>View Result</a>";
    }
}		
?>

<?php

	//selecting data associated with this particular id
	$result = mysqli_query($mysqli, "SELECT * FROM job_requirement WHERE Job_Requirement_Id=$Job_Requirement_Id");
	
	while($res = mysqli_fetch_array($result))
	{
		
		$Job_Post_Nama = $res['Job_Post_Nama'];
        $Job_Post_Syarat = $res['Job_Post_Syarat'];
	    $Job_Post_Salary = $res['Job_Post_Salary'];
	   
		
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
    <form class="form-inline" method="post" action="update.php?Job_Requirement_Id=<?php echo $Job_Requirement_Id?>" enctype="multipart/form-data">
         <div class="content mt-3">
		     <div class="animated">
		         
	                <div class="modal-dialog modal-lg" role="document">
	                     <div class="modal-content">
	                        <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Update</h5>
                               
                            </div>
							<div class="modal-body">
                                <div class="card-body">
                                <table class="table" width="25%" border="0">
                                    <tbody>
                                        <tr >
                                             <th scope="col"><label for="grade">Grade</label></th>
                                             <th scope="col" ><select class="form-control" id="grade" name="grade" value="">
                                                 <option value=""></option>
												 <option value="DS45 LECTURER">DS45 LECTURER</option>
                                                 <option value="DS51 LECTURER">DS51 SENIOR LECTURER</option>
                                                 <option value="DS53 PROFESOR MADYA">DS53 PROFESOR MADYA</option>
                                               
                                                 </select>
												 </th>
                            
                                        </tr>
										
										<tr >
                                             <th scope="col"><label for="jobRequire">Job Requirement</label></th>
                                             <th scope="col" ><textarea class="form-control" name="jobRequire" rows="10" cols="50"placeholder="Enter Job Requirement" value="<?php echo $Job_Post_Syarat;?>"></textarea>
                          </th>
                                        </tr>
										
										<tr >
                                             <th scope="col"><label for="jobSalary">Salary</label></th>
                                             <th scope="col" ><input class="form-control" name="jobSalary" type="text"  placeholder="Enter job salary"value="<?php echo $Job_Post_Salary;?>">
                          </th>
                                        
                                        
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="modal-footer">
							<input style="border-radius: 8px;" type="submit" name="update" value="Update" class="btn btn-success" /><a style="border-radius: 8px;" class="btn btn-primary" href="JobRequirement.php">Back</a>
							
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .animated -->
			
        </div><!-- .content -->
  
       
    
           
</body>
</html>

