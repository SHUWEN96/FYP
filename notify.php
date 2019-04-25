	<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();

			$Decision_Id = null;
if ( !empty($_GET['Decision_Id'])) {
	$Decision_Id = $_REQUEST['Decision_Id'];
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
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


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
 <?php 
 $Applicant_Name = $_GET['Applicant_Name'];
 $user_Ic = $_GET['user_Ic'];
          
          if(isset($_POST['submit'])){
              $message = $_POST['message'];
			   $interview_date = $_POST['interview_date'];
			  
             
               // Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
	
    $query ="INSERT INTO notify(Applicant_Name,user_Ic,message,interview_date,notify_date,notify_checklist)
	VALUES('$Applicant_Name','$user_Ic','$message','$interview_date',CURRENT_TIMESTAMP,'1')";

  $result = mysqli_query($link, $query)or die("Failed to query database".mysqli_error($link));

		echo "<script type='text/javascript'>alert('Notify Successfully.');</script>";
	echo "<script> location.href='javascript:history.back(1);'; </script>";
		exit;
          }
                
          ?>
      
 <form class="form-inline" method="post" enctype="multipart/form-data">
         <div class="content mt-3">
		     <div class="animated">
		         
	                <div class="modal-dialog modal-lg" role="document">
	                     <div class="modal-content">
	                        <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Notify Message</h5>
                               
                            </div>
							<div class="modal-body">
                                <div class="card-body">
                                <table class="table" width="25%" border="0">
                                    <tbody>
                                      
									   <tr>
                                            <th scope="col">Subject :</th>
                                            <th scope="col">Invitation to Interview /Waiting List/Rejected</th>
                                       </tr>
									 
										<tr>
                                              <th scope="col" >Dear</th>
											  <th><input class="form-control" type="text" name="dear" value="<?php echo $_GET['Applicant_Name'];?>"></th>
                                       </tr>
									   
                                             <tr >
                                             <th scope="col">Message</th>
                                             <th scope="col" ><textarea class="form-control" name="message" rows="10" cols="50"placeholder="Enter Message" ></textarea>
                          
                                        
                                        </tr>
										
										<tr >
                                             <th scope="col">Interview Date</th>
                                             <th scope="col" ><input class="form-control" type="date" name="interview_date" value=""></th>
                          
                                        
                                        </tr>
								
								
										
                                    </tbody>
                                </table>
                                </div>
                            </div>
							<div class="modal-footer">
							  <button style="border-radius: 8px;" name="submit" class="btn btn-success" type="submit">Submit</button>
							<a style="border-radius: 8px;" class="btn btn-primary" href='javascript:history.back(1);'>Done</a>
							
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .animated -->
			
        </div><!-- .content -->
  
       
    
           
</body>
</html>
		

