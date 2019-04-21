	<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();

$id1 =$_REQUEST['user_Ic'];	 

$Applicant_Id = null;
if ( !empty($_GET['Applicant_Id'])) {
	$Applicant_Id = $_REQUEST['Applicant_Id'];
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


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                  <a class="navbar-brand" href="officer.php"><img src="images/images/uthm.jpeg" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="SignUp1Officer.php"> </i>Officer Registration </a>
                    </li>
					 <li class="active">
                        <a href="finallist.php"> </i>Final List Applicant</a>
                    </li>
					 <li class="active">
                        <a href="report.php"> </i>Generate Report</a>
                    </li>
					 
					
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
     <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

							<div class="col-sm-7">
								<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
								<div class="header-left">
								</div>
							</div>
							<div class="col-sm-5">
								<div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </a>

								</div>

							</div>
						</div>

        </header><!-- /header -->

        <!-- Header-->
       <div class="breadcrumbs">
           
        </div>
  <center><strong style="font-size:px;">APPLICATION FORM</strong></center>
 
<form class="form-inline" method="post" enctype="multipart/form-data" >

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
						
                            <div class="card-header">
							 <i class="mr-2 fa fa-align-justify"></i>
                                <strong class="card-title" style="font-size:px;">Job position to be applied (according to the priority of applicant)</strong>
                            </div>
							<div class="card-body">
                                <table class="table">
                                    <tbody>
		
                         <?php
							
                          
							$qlist = 'SELECT * FROM position WHERE user_Ic= "'.$id1.'"';
								  $reslist = $db->query($qlist);

							while($rowlist = $reslist->fetch_assoc()) {   
							echo "<tr>";
                             				
									echo "<td style='width:10%'>"."<strong>". "Faculty : "."</strong>" . $rowlist["faculty"]. "<br>"."</td>";
									 echo "</tr>";
									 echo "<tr>";
									echo "<td style='width:10%'>"."<strong>". "Position 1 : "."</strong>" . $rowlist["app_post1"]. "<br>"."</td>";
									
							   echo "</tr>";
								}

						?>
					</tbody>
				</table>
			</div>
          </div>
						
                   <div class="card">
					 <div class="card-header">
					  <i class="mr-2 fa fa-align-justify"></i>
                                <strong class="card-title" style="font-size:px;">1. PERSONAL INFORMATION</strong>
                            </div>
							
                               <div class="card-body">
                                <table class="table">
                                    <tbody>
									<?php
									
									
										$qlist = 'SELECT * FROM applicant WHERE user_Ic= "'.$id1.'"';
								  $reslist = $db->query($qlist);
											  
									while($rowlist = $reslist->fetch_assoc()) {   
                                    echo "<tr>";
                                    echo "<td style='width:10%'>"."<strong>"."Full Name (Capital Letter) : "."</strong>". $rowlist["Applicant_Name"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>"."No Identity Card : "."</strong>". $rowlist["user_Ic"]. "<br>"."</td>";
                                     echo "</tr>";    
                                    
                                    echo "<tr>";
                                    echo "<td style='width:10%'>"."<strong>"."Age : "."</strong>". $rowlist["Applicant_Age"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>"."Gender : "."</strong>". $rowlist["Applicant_gender"]. "<br>"."</td>";
                                    echo "</tr>"; 
									 
									echo "<tr>";
                                    echo "<td style='width:10%'>"."<strong>"."Date Of Birth : "."</strong>". $rowlist["Applicant_DOB"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>"."Place Of Birth : "."</strong>". $rowlist["Applicant_POB"]. "<br>"."</td>";
                                     echo "</tr>";
									 
									 echo "<tr>";
                                    echo "<td style='width:10%'>"."<strong>"."Citizen : "."</strong>". $rowlist["Applicant_Citizen"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>"."Religion : "."</strong>". $rowlist["Applicant_Religion"]. "<br>"."</td>";
                                     echo "</tr>";
									 
									 echo "<tr>";
                                    echo "<td style='width:10%'>"."<strong>"."Nation : "."</strong>". $rowlist["Applicant_Nation"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>"."Marital Status : "."</strong>". $rowlist["Applicant_MaritalStatus"]. "<br>"."</td>";
                                     echo "</tr>";
									 
									  echo "<tr>";
                                    echo "<td style='width:10%'>"."<strong>"."Height : "."</strong>". $rowlist["Applicant_Height"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>"."Weight : "."</strong>". $rowlist["Applicant_Weight"]. "<br>"."</td>";
                                     echo "</tr>";
									 
									   echo "<tr>";
                                    echo "<td style='width:10%'>"."<strong>"."Vehicle License (Class) : "."</strong>". $rowlist["Applicant_VLC"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>"."Email : "."</strong>". $rowlist["Applicant_Email"]. "<br>"."</td>";
                                     echo "</tr>";
									 
									  echo "<tr>";
                                    echo "<td style='width:10%'>"."<strong>"."Address : "."</strong>". $rowlist["Applicant_Add"]. "<br>"."</td>";
                                     echo "</tr>";
									 
									  
									   echo "<tr>";
                                    echo "<td style='width:10%'>"."<strong>"."Telephone No (Home) : "."</strong>". $rowlist["Applicant_NoTel"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>"."Telephone No (H/P) : "."</strong>". $rowlist["Applicant_NoHP"]. "<br>"."</td>";
                                     echo "</tr>";
									 
									  echo "<tr>";
                                    echo "<td style='width:10%'>"."<strong>"."Couple : "."</strong>". $rowlist["Spouse_name"]. "<br>"."</td>";
                                     echo "</tr>";
									 
									   echo "<tr>";
                                    echo "<td style='width:10%'>"."<strong>"."Mother's Name : "."</strong>". $rowlist["Mom_Name"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>"."No Identity Card : "."</strong>". $rowlist["Mom_Ic"]. "<br>"."</td>";
                                     echo "</tr>";
									 
									   echo "<tr>";
                                    echo "<td style='width:10%'>"."<strong>"."Father's Name : "."</strong>". $rowlist["Dad_Name"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>"."No Identity Card : "."</strong>". $rowlist["Dad_Ic"]. "<br>"."</td>";
                                     echo "</tr>";
									}
					?>
                                    </tbody>
                                </table>
                            </div>
						</div>
                    				
							<div class="card">
							<?php  	  
							

							 $qlist = 'SELECT * FROM education WHERE user_Ic= "'.$id1.'"';
								  $reslist = $db->query($qlist);
							  //echo "<span align='center'>Selamat Datang,</br>" .$row["FirstName"]." ".$row["LastName"]."</span><br>";

							 
							  
							?>
	
                    <div class="card-header">
                        <i class="mr-2 fa fa-align-justify"></i>
                        <strong class="card-title" style="font-size:px;">2. EDUCATION LEVEL</strong>
                    </div>
                    <div class="card-body">
								<table class="table">
									<tbody>
									<tr >
									
									<th rowspan="2" scope="col" ><label for="education1">Education Level</label></th>
									<th rowspan="2" scope="col" ><label for="school">School Name/Name of Institution & Branch</label></th>
									<th rowspan="2" scope="col" ><label for="year">Year End</label></th>
									<th rowspan="2" scope="col" ><label for="level">Grade/CGPA</label></th>
                                    <th rowspan="2" scope="col" ><label for="specialize">Specialization Area</label></th>
									<th colspan="2" scope="col"><label for="award">Award (Convocation)</label></th>
									<th rowspan="2" scope="col" ><label for="cert">Attach Result Certificate</label></th>
									

									</tr>
									
									<tr>
									<th scope="col"><label for="uni_status">Status</label></th> 
                                    <th scope="col"><label for="uni_date">Date</label></th> 
									</tr>
								  <?php 
								//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
								while($rowlist = $reslist->fetch_assoc()) {        
									echo "<tr>";
									echo "<td style='width:10%'>".$rowlist['Edu_Type']."</td>";
									echo "<td style='width:10%'>".$rowlist['Edu_School']."</td>";
									echo "<td style='width:10%'>".$rowlist['Edu_Year']."</td>";    
									echo "<td style='width:5%'>".$rowlist['Edu_Level']."</td>";
									echo "<td style='width:10%'>".$rowlist['Edu_Specialize']."</td>";
									echo "<td style='width:10%'>".$rowlist['Edu_Status']."</td>";
									echo "<td style='width:10%'>".$rowlist['Edu_Date']."</td>";
									echo "<td style='width:5%'>".$rowlist['Edu_Cert']."</td>";
								   
								}
								?>
	
                 
								
                                  </tbody>
                              </table>
                            </div>
							</div>
							
							<div class="card">
							<?php  	  
							
							 $qlist = 'SELECT * FROM cocuriculum WHERE user_Ic= "'.$id1.'"';
								  $reslist = $db->query($qlist);
							  //echo "<span align='center'>Selamat Datang,</br>" .$row["FirstName"]." ".$row["LastName"]."</span><br>";

							 
							  
							?>
							<div class="card-header">
								<i class="mr-2 fa fa-align-justify"></i>
								<strong class="card-title" style="font-size:px;">3. COCURICULUM LEVEL</strong>
							</div>
							<div class="card-body">
											<table class="table">
												<tbody>
													<tr>
													    
													     <th scope="col" ><label for="coco">Cocuriculum Level</label></th>
														 <th scope="col"><label for="year">Year</label></th>
														 <th scope="col" ><label for="koko">Activity</label></th>
														 <th scope="col"><label for="file">File Uploaded</label></th>
														
													</tr>
											<?php 
												//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
												while($rowlist = $reslist->fetch_assoc()) {        
													echo "<tr>";
													echo "<td style='width:20%'>".$rowlist['coco_level']."</td>";
													echo "<td style='width:10%'>".$rowlist['Koko_Activity_Year']."</td>";
													echo "<td style='width:10%'>".$rowlist['Koko_Activity_name']."</td>";    
													echo "<td style='width:10%'>".$rowlist['Koko_Activity_Cert']."</td>";
											   
												}
												?>
												</tbody>
											</table>
										</div>
							</div>
							
							  <div class="card">
							  <?php  	  
								
								 $qlist = 'SELECT * FROM work_experience WHERE user_Ic= "'.$id1.'"';
								$reslist = $db->query($qlist);
								  
								 
  
						?>
                    <div class="card-header">
                        <i class="mr-2 fa fa-align-justify"></i>
                        <strong class="card-title" style="font-size:px;">4. WORK EXPERIENCES</strong>
                    </div>
                    <div class="card-body">
							  
                                <table class="table">
                                    <tbody>
                                        <tr style="height: 20px;">
									<th scope="col" colspan="8"><label for="experience">List the experience details</label></th>
									</tr>

									<tr >
									 
									  <th scope="col" rowspan="2" ><label for="Employer_Name_Add">Employer's Name and Address</label></th>
									  <th scope="col" rowspan="2" ><label for="Applicant_Post">Position</label></th>
									  <th scope="col" rowspan="2" ><label for="Applicant_Month_Salary">Basic Salary per Month (RM)</label></th>
									  <th scope="col" colspan="2" ><label for="date">Date</label></th>
									  <th scope="col" rowspan="2"><label for="Work_Contract">Fixed / Contract and Others</label></th>
									  <th scope="col" rowspan="2" ><label for="Reason_Stop">Reason Stop</label></th>
									 
									  
									</tr>
          
										<tr style="height: 20px;"> 
										  <th scope="col"><label for="Work_Start_Date">Date Start</label></th></th> 
										  <th scope="col"><label for="Work_End_Date">Date End</label></th> 
										  
										</tr>       
								   <?php 
										//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
										while($rowlist = $reslist->fetch_assoc()) {        
											echo "<tr>";
											
											echo "<td style='width:10%'>".$rowlist['Employer_Name_Add']."</td>";
											echo "<td style='width:10%'>".$rowlist['Applicant_Post']."</td>";
											echo "<td style='width:10%'>".$rowlist['Applicant_Month_Salary']."</td>";    
											echo "<td style='width:10%'>".$rowlist['Work_Start_Date']."</td>";
											echo "<td style='width:10%'>".$rowlist['Work_End_Date']."</td>";
											echo "<td style='width:10%'>".$rowlist['Work_Contract']."</td>";
											echo "<td style='width:10%'>".$rowlist['Reason_Stop']."</td>";
												  
										}
										?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
						
						<div class="card">
						<?php  	  
						

						 $qlist = 'SELECT * FROM training WHERE user_Ic= "'.$id1.'"';
						$reslist = $db->query($qlist);
						  //echo "<span align='center'>Selamat Datang,</br>" .$row["FirstName"]." ".$row["LastName"]."</span><br>";

						 
						  
						?>
    
                    <div class="card-header">
                        <i class="mr-2 fa fa-align-justify"></i>
                        <strong class="card-title" style="font-size:px;">5. TRAINING RECORD</strong>
                    </div>
                    <div class="card-body">
							  
                                <table class="table">
                                    <tbody>
                                        <tr style="height: 20px;">
  
										  <th scope="col"><label for="Training_Name">Course Name</label></th>
										  <th scope="col"><label for="Training_date_start">Start Date</label></th>
										  <th scope="col"><label for="Training_date_end">End Date</label></th>
										  <th scope="col"><label for="Training_Organizer">Organizer</label></th>
										  <th scope="col"><label for="Training_Place">Place</label></th>
										  <th scope="col"><label for="Training_Result">Results</label></th>

										</tr>
							 <?php 
									//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
									while($rowlist = $reslist->fetch_assoc()) {        
										echo "<tr>";
									
										echo "<td style='width:10%'>".$rowlist['Training_Name']."</td>";
										echo "<td style='width:10%'>".$rowlist['Training_date_start']."</td>";
										echo "<td style='width:10%'>".$rowlist['Training_date_end']."</td>";    
										echo "<td style='width:10%'>".$rowlist['Training_Organizer']."</td>";
										echo "<td style='width:10%'>".$rowlist['Training_Place']."</td>";
										echo "<td style='width:10%'>".$rowlist['Training_Result']."</td>";
											
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

							<div class="card">
								<div class="card-header">
								 <i class="mr-2 fa fa-align-justify"></i>
									<strong class="card-title" style="font-size:px;">6. SELF REFERENCES</strong>
								</div>
								<div class="card-body">
									<table class="table">
										<tbody>
							<?php
							
							$qlist = 'SELECT * FROM self_reference WHERE user_Ic= "'.$id1.'"';
								  $reslist = $db->query($qlist);

							while($rowlist = $reslist->fetch_assoc()) {   
							echo "<tr>"; 
							echo "<td style='width:10%'>"."<strong>". "Person 1 "."</strong>". "<br>"."</td>";    							
									echo "<td style='width:10%'>"."<strong>". "Name : "."</strong>" . $rowlist["person1"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>". "Address : "."</strong>" . $rowlist["add1"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>". "Job : " ."</strong>". $rowlist["job1"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>". "H/P Number : " ."</strong>". $rowlist["tel1"]. "<br>"."</td>";
							   echo "</tr>";
							   
							   echo "<tr>";    
							echo "<td style='width:10%'>"."<strong>". "Person 2 "."</strong>". "<br>"."</td>";							   
									echo "<td style='width:10%'>"."<strong>". "Name : "."</strong>" . $rowlist["person2"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>". "Address : "."</strong>" . $rowlist["add2"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>". "Job : " ."</strong>". $rowlist["job2"]. "<br>"."</td>";
									echo "<td style='width:10%'>"."<strong>". "H/P Number : " ."</strong>". $rowlist["tel2"]. "<br>"."</td>";
							   echo "</tr>";
								}

						?>
										</tbody>
									</table>
								</div>
							</div>
						
						
						
						<div class="card">
								<div class="card-header">
								 <i class="mr-2 fa fa-align-justify"></i>
									<strong class="card-title" style="font-size:px;">7. ACKNOWLEDGEMENT OF THE APPLICANT</strong>
								</div>
								<div class="card-body">
								<p>Under section 5, the Service Commission Act 1957 (Revision 1989), an applicant who gives false or misleading information
										in the application form for an employment, is liable to be jailed for 2 years or fined two thousand Ringgit of Malaysia or both.</p>

									<p>I hereby declare that I am:</p>
									<table class="table">
								
										<tbody>
										<?php
										
										$qlist = 'SELECT * FROM acknowledgement WHERE user_Ic= "'.$id1.'"';
											  $reslist = $db->query($qlist);

										while($rowlist = $reslist->fetch_assoc()) {   
										echo "<tr>";     
												echo "<td style='width:10%'>"."<strong>". "Do not have any criminal record : "."</strong>" . $rowlist["acknowledgement_1"]. "<br>"."</td>";
												echo "<td style='width:10%'>"."<strong>". "Never stopped / dismissed by the government : "."</strong>" . $rowlist["acknowledgement_2"]. "<br>"."</td>";
												echo "<td style='width:10%'>"."<strong>". "Not a drug addict : " ."</strong>". $rowlist["acknowledgement_3"]. "<br>"."</td>";
												echo "<td style='width:10%'>"."<strong>". "Has no foreign citizenship : "."</strong>" . $rowlist["acknowledgement_4"]. "<br>"."</td>";
												echo "<td style='width:10%'>"."<strong>". "Not a bankrupt : " ."</strong>". $rowlist["acknowledgement_5"]. "<br>"."</td>";
										   echo "</tr>";
										}

										?>
											
										</tbody>
									</table>
								</div>
							</div>
							<p> I declare that the information given is correct. I agree that if this information is found to be false,this application will be revoked and if I have served, my service will be terminated immediately.<p>
                  
					
						<div class="modal-footer">
							<a style="border-radius: 8px;" class="btn btn-primary" href='javascript:history.back(1);'>Back</a>
							
                            </div>		     
                    </div>
					
								
                </div>
            </div><!-- .animated -->
			
        </div><!-- .content -->
  

   </form>

   
   <br/>
   <br/>

<script>
function myFunction() {
  window.print();
  alert('Print successfully');
}
</script>
   </body>
   </html>