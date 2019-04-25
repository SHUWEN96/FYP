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


.underlined {
  height:20px;
  border: none;
  
}
.underlined:focus {
  outline: none;
}
c{
	border-bottom: 2px solid black;
  padding: 0 0 10px;
}
	</style>
</head>

<body>
 <?php 
  
          if(isset($_POST['submit'])){
              
               // Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
    $query ="Update notify SET offer_checklist='1' WHERE notify_checklist='1'";

  $result = mysqli_query($link, $query)or die("Failed to query database".mysqli_error($link));

		echo "<script type='text/javascript'>alert('Send Successfully.');</script>";
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
                                <h5 class="modal-title" id="mediumModalLabel">Offer Letter</h5>
                               
                            </div>
							<div class="modal-body">
                                <div class="card-body">
								 <th><b>TO : <?php echo $_GET['Applicant_Name'];?></b></th>
									 <br/>
								 <br/>
								 <br/>
								 <th><b>Sir/Madam,</b></th>
								  <br/>
								   <br/>
								 <br/>
								 <div class="underlined">
								 <th><b><c>JOB OFFER AS STAFF AT UNIVERSITI TUN HUSSEIN ONN MALAYSIA (UTHM)</c></b><th>
								 </br>
								 </div>
								  <br/>
								 <br/>
								 <th><b> Kindly be informed that this university agrees to offer you the following positions:</b></th>
								 <br/>
								 <br/>
                                <table class="table" width="25%" border="0">
                                    <tbody>
                                   <tr>
                                             <th scope="col" >Gred/Job Position</th>
											 <td><input class="form-control" type="text" name="dear" value="<?php echo $_GET['app_post1'];?>"></td>
										</tr>
										
										</tr>
                                             <th scope="col" style="width:50%" >Service Scheme</th>
											 <td scope="col" style="width:50%">University lecturer</td>
										</tr>
                                             <th scope="col" style="width:50%">Service Classification</th>
											 <td scope="col" style="width:50%">Education Service</td>
										</tr>
										
										</tr>
                                             <th scope="col" style="width:50%">Service Group</th> 
											 <td scope="col" style="width:50%">Management and Professional</td>
										</tr>
										
										</tr>
                                             <th scope="col" style="width:50%">Job Position Status</th>
											 <td scope="col" style="width:50%">Temporary</td>
										</tr>
										
										</tr>
                                             <th scope="col" style="width:50%">Salary</th>
											 <td scope="col" <?php 
											 $qlist = "SELECT * FROM job_requirement WHERE Job_Post_Nama='".$_GET['app_post1']."'";
								  $reslist = $db->query($qlist);
									$row = $reslist->fetch_assoc();
							
							if($row['Job_Post_Nama']=='DS45 LECTURER'){
								echo "<td style='width:10%'>". $row["Job_Post_Salary"]. "<br>"."</td>";
							}
							else if($row['Job_Post_Nama']=='DS51 SENIOR LECTURER'){
							echo "<td style='width:10%'>". $row["Job_Post_Salary"]. "<br>"."</td>";}
							else if($row['Job_Post_Nama']=='DS53 PROFESOR MADYA'){
							echo "<td style='width:10%'>". $row["Job_Post_Salary"]. "<br>"."</td>";}
							   echo "</tr>";
								?></tD>
										</tr>
										
										</tr>
                                             <th scope="col" >Faculty</th>
											 <td><input class="form-control" type="text" name="dear" value="<?php echo $_GET['faculty'];?>"></td>
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
		

