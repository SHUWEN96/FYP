<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
    $Job_Requirement_Id = null;
    if ( !empty($_GET['Job_Requirement_Id'])) {
        $Job_Requirement_Id = $_REQUEST['Job_Requirement_Id'];
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
    <form class="form-inline" method="post" enctype="multipart/form-data">
         <div class="content mt-3">
		     <div class="animated">
		         
	                <div class="modal-dialog modal-lg" role="document">
	                     <div class="modal-content">
	                        <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">View</h5>
                               
                            </div>
							<div class="modal-body">
                                <div class="card-body">
                                <table class="table" width="25%" border="0">
                                    <tbody><?php
							$link = mysqli_connect("localhost", "root", "");

							mysqli_connect("localhost","root","")or die(mysqli_connect_error());
							mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

							$qlist = "SELECT * FROM job_requirement where Job_Requirement_Id=$Job_Requirement_Id";
								  $reslist = $db->query($qlist);

							while($rowlist = $reslist->fetch_assoc()) {   
							echo "<tr>";     
									echo "<td style='width:10%'>"."<strong>". "Grade : "."</strong>" . $rowlist["Job_Post_Nama"]. "<br>"."</td>";
									 echo "</tr>";
									 echo "<tr>";
									echo "<td style='width:10%'>"."<strong>". "Job Requirement  : "."</strong>" . $rowlist["Job_Post_Syarat"]. "<br>"."</td>";
									echo "</tr>";
									echo "</tr>";
									echo "<td style='width:10%'>"."<strong>". "Salary : " ."</strong>". $rowlist["Job_Post_Salary"]. "<br>"."</td>";
							   echo "</tr>";
								}

						?>
					</tbody>
					
                                        
                                </table>
                                </div>
                            </div>
                            <div class="modal-footer">
							<a style="border-radius: 8px;" class="btn btn-primary" href="JobRequirement.php">Back</a>
							
                            </div>
                        </div>
                    </div>
                
            </div><!-- .animated -->
			
        </div><!-- .content -->
  </form>
       
    
           
</body>
</html>

