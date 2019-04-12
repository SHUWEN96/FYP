<?php
    require 'database.php';
    $Education_detail_Id = null;
    if ( !empty($_GET['Education_detail_Id'])) {
        $Education_detail_Id = $_REQUEST['Education_detail_Id'];
    }
	$subject_id = null;
    if ( !empty($_GET['subject_id'])) {
        $subject_id = $_REQUEST['subject_id'];
    }
	
	
    if ( null==$Education_detail_Id ) {
        header("Location: education.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM education 
	  INNER JOIN subject ON education.Edu_Type = subject.Edu_Type 
	  WHERE Education_detail_Id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($Education_detail_Id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
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
                                <table class="table" width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Education Level</th>
											 <th scope="col">School Name/Name of Institution & Branch</th>
											  <th scope="col">Year End</th>
											  <th scope="col">Grade/CGPA</th>
											   <th scope="col">Specialization Area</th>
												<th scope="col">Status</th>
												<th scope="col">Date</th>
												<th scope="col">Attach Result Certificate</th>
                                             
                                        
                                        </tr>
										
										<tr >
                                            <td scope="col" ><center><?php echo $data['Edu_Type'];?></center></td>
                                             <td scope="col" ><center><?php echo $data['Edu_School'];?></center></td>
                                         <td scope="col" ><center><?php echo $data['Edu_Year'];?></center></td>
                                        <td scope="col" ><center><?php echo $data['Edu_Level'];?></center></td>
										 <td scope="col" ><center><?php echo $data['Edu_Specialize'];?></center></td>
                                             <td scope="col" ><center><?php echo $data['Edu_Status'];?></center></td>
											  <td scope="col" ><center><?php echo $data['Edu_Date'];?></center></td>
											   <td scope="col" ><center><?php echo $data['Edu_Cert'];?></center></td>
									
                                        </tr>
										
										
                                    </tbody>
                                </table>
								
								<table class="table" width="25%" border="0">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Subject</th>
											<th scope="col">Gred</th>
                                            
                                        </tr>
										
										<tr >
                                           <td scope="col" ><center><?php echo $data['subject'];?></center></td>
                                          
                                             <td scope="col" ><center><?php echo $data['gred'];?></center></td> 
                                        
                                        </tr>
										
										
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="modal-footer">
							<a style="border-radius: 8px;" class="btn btn-primary" href="education.php">Back</a>
							
                            </div>
                        </div>
                    </div>
                
            </div><!-- .animated -->
			
        </div><!-- .content -->
  </form>
       
    
           
</body>
</html>

