	<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();

			$decison_interview_id = null;
if ( !empty($_GET['decison_interview_id'])) {
	$decison_interview_id = $_REQUEST['decison_interview_id'];
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
              $criteria_1 = $_POST['criteria_1'];
			  $criteria_2 = $_POST['criteria_2'];
			  $criteria_3 = $_POST['criteria_3'];
			  $criteria_4 = $_POST['criteria_4'];
			  $criteria_5 = $_POST['criteria_5'];
			 
			  $total = $criteria_1+$criteria_2+$criteria_3+$criteria_4+$criteria_5;
			  
			  
             
               // Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
$query ="INSERT INTO decision_interview(Applicant_Name,user_Ic,criteria_1,criteria_2,criteria_3,criteria_4,criteria_5,total)VALUES('$Applicant_Name','$user_Ic','$criteria_1', '$criteria_2', '$criteria_3', '$criteria_4','$criteria_5','$total')";

  $result = mysqli_query($link, $query)or die("Failed to query database".mysqli_error($link));
  
		echo "<script type='text/javascript'>alert('send Successfully.');</script>";
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
                                <h5 class="modal-title" id="mediumModalLabel">Assessment of the Appointment of Academic Staff </h5>
                               
                            </div>
							<div class="modal-body">
                                <div class="card-body">
                                <table class="table" width="25%" border="0">
                                    <tbody>
                                      <tr>
                                              <th scope="col" style= 'align:justify'>Applicant Name</th>
											  <th style= 'align:justify'><input class="form-control" type="text" name="Applicant_Name" value="<?php echo $_GET['Applicant_Name'];?>" readonly></th>
											 
                                       </tr>
									   <tr>
									    <th scope="col" style= 'align:justify'>Applicant IC</th>
											  <td scope="col" style= 'align:justify'><input class="form-control" type="text" name="user_Ic" value="<?php echo $_GET['user_Ic'];?>" readonly></th>
										</tr>	  
									   <tr>
                                            <th scope="col" style= 'align:justify'>Criteria</th>
											<th scope="col" style= 'align:justify'>Marks</th>
										</tr>
										
										<tr>
											<td scope="col" style= 'align:justify'>Minimum Qualification</td>
											<td style= 'align:justify'>PhD</td>
										</tr>
										
										<tr>
											<td scope="col" style= 'align:justify'>A. Teaching / Supervision</td>
											<td scope="col" style= 'align:justify'><input class="form-control" type="text" name="criteria_1" size="1">/40</td>
										</tr>
										
										<tr>
											<td scope="col" style= 'align:justify'>B. Research / Publication</td>
											<td scope="col" style= 'align:justify'><input class="form-control" type="text" name="criteria_2"size="1">/30</td>
										</tr>
                                            
										<tr>
											<td scope="col" style= 'align:justify'>C. Negotiation / Expertise</td>
											<td scope="col" style= 'align:justify'><input class="form-control" type="text" name="criteria_3"size="1">/10</td>
										</tr>
                                            
										<tr>
											<td scope="col" style= 'align:justify'>D. Conference</td>
											<td scope="col" style= 'align:justify'><input class="form-control" type="text" name="criteria_4" size="1">/10</td>
										</tr>
                                            
										<tr>
											<td scope="col" style= 'align:justify'>E. Service / Affluence and Academic Leadership (university, community and country)</td>
											<td scope="col" style= 'align:justify'><input class="form-control" type="text" name="criteria_5" size="1">/10</td>
										</tr>
                                            
                                         <tr>
                                            <td scope="col"style= 'align:justify'>Total</td>
											<td style= 'align:justify'><input style="border-radius: 8px;" class="btn btn-success" type="submit" name="submit" value="Add"></td>
										</tr>   
											
                                    </tbody>
                                </table>
                                </div>
                            </div>
							<div class="modal-footer">
							 
							<a style="border-radius: 8px;" class="btn btn-primary" href='javascript:history.back(1);'>Done</a>
							
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .animated -->
			
        </div><!-- .content -->
  
   <script>    
    
  function myFunction() {
  var a = 4;
  return a * a;
}    
</script>     
</body>
</html>
		
	