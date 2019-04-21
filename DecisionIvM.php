	<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();

$id1 =$_REQUEST['user_Ic'];	 

			$decison_interview_id = null;
if ( !empty($_GET['decison_interview_id'])) {
	$decison_interview_id = $_REQUEST['decison_interview_id'];
}
$qlist = "SELECT * FROM decision_interview";
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        
           $user_Ic=$rowlist["user_Ic"];
		   $Applicant_Name=$rowlist["Applicant_Name"];
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
									
										<?php  	  
									
									 $qlist = 'SELECT * FROM decision_interview WHERE user_Ic= "'.$id1.'"'; 
					 
									$reslist = $db->query($qlist);
									
									 while($rowlist = $reslist->fetch_assoc()) { 
					
											   $user_Ic=$rowlist["user_Ic"];
									echo "<tr>";     
									echo "<td style='width:50%' align='justify'>"."<strong>". "Applicant Name : "."</strong>"."<br>"."</td>";
									echo "<td style='width:50%' align='justify' >".$rowlist["Applicant_Name"]."<br>"."</td>";
									echo "</tr>"; 
									
									echo "<tr>";     
									echo "<td style='width:50%' align='justify'>"."<strong>". "Applicant Ic : "."</strong>"."<br>"."</td>";
									echo "<td style='width:50%' align='justify' >".$rowlist["user_Ic"]."<br>"."</td>";
									echo "</tr>"; 
									
									echo "<tr>";     
									echo "<td style='width:50%' align='justify'>"."<strong>". "A. Teaching / Supervision : "."</strong>"."<br>"."</td>";
									echo "<td style='width:50%' align='justify'>".$rowlist["criteria_1"]."<br>"."</td>";
									echo "</tr>"; 
									
									echo "<tr>";     
									echo "<td style='width:50%' align='justify'>"."<strong>". "B. Research / Publication : "."</strong>"."<br>"."</td>";
									echo "<td style='width:50%' align='justify' >".$rowlist["criteria_2"]."<br>"."</td>";
									echo "</tr>"; 
									
									echo "<tr>";     
									echo "<td style='width:50%' align='justify'>"."<strong>". "C. Negotiation / Expertise : "."</strong>"."<br>"."</td>";
									echo "<td style='width:50%' align='justify'>".$rowlist["criteria_3"]."<br>"."</td>";
									echo "</tr>"; 
									
									echo "<tr>";     
									echo "<td style='width:50%' align='justify' >"."<strong>". "D. Conference : "."</strong>"."<br>"."</td>";
									echo "<td style='width:50%' align='justify'>".$rowlist["criteria_4"]."<br>"."</td>";
									echo "</tr>"; 
									
									echo "<tr>";     
									echo "<td style='width:50%' align='justify'>"."<strong>". "E. Service / Affluence and Academic Leadership (university, community and country) : "."</strong>"."<br>"."</td>";
									echo "<td style='width:50%' align='justify' >".$rowlist["criteria_5"]."<br>"."</td>";
									echo "</tr>"; 
								
									echo "<tr>";     
									echo "<td style='width:50%' align='justify'>"."<strong>". "Total : "."</strong>"."<br>"."</td>";
									echo "<td style='width:50%' align='justify'>".$rowlist["total"]."<br>"."</td>";
									echo "</tr>"; 
									"<br>"."</td>";
									echo "</tr>"; 
						
							 }

									?>
                                     
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
  
       
    
           
</body>
</html>
		
	