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

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<style>
	body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  font-size:14px;
}
	</style>

 

</head>
<!-- Left Panel -->

   <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                 <a class="navbar-brand" href="manager.php"><img src="images/images/uthm.jpeg" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="registerOff.php"> </i>Officer Registration </a>
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
           
            <div class="col-sm-12">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            
                            <li class="active">Final List Applicant</li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    <form class="form-inline"  method="post" enctype="multipart/form-data" >
         <div class="content mt-3">
            <div class="animated">

                <div class="card">
                    <div class="card-header">
                        <i class="mr-2 fa fa-align-justify"></i>
                        <strong class="card-title" style="font-size:px;"> FINAL APPLICANT LIST</strong>
                    </div>
					
                    <div class="card-body">
							   <p scope="col"><select id='app_post1' class="form-control" name='app_post'>
                                                 <option value="">Select Position Level</option>
												 <option value="1">DS45 LECTURER</option>
                                                 <option value="2">DS51 SENIOR LECTURER</option>
                                                 <option value="3">DS53 PROFESOR MADYA</option>
                                                
                                                 </select>
												  <button id='verify' style="border-radius: 8px;" class="btn btn-success">Select</button> 
										    </p>
											
                                <table class="table">
								<div class="card-header">
								<strong class="card-title" style="font-size:px;"> DS53 PROFESOR MADYA</strong>			
								</div>
								
                                    <tbody>
									<tr >
									  <th scope="col" ><label for="no">No</label></th>
									  <th scope="col" ><label for="Applicant_Name">Applicant Name</label></th>
									  <th scope="col" ><label for="user_Ic">Applicant IC</label></th>
									  <th scope="col" ><label for="faculty">Faculty</label></th>
									   <th scope="col" ><label for="app_post1">Job Position</label></th>
									  <th scope="col" ><label for="status">Status</label></th>
									  <th scope="col" ><label for="AppForm">Application Form</label></th>
									  <th scope="col" ><label for="approve">Approval</label></th>
									  <th scope="col" ><label for="interviewStatus">Interview Status</label></th>
									  <th scope="col" ><label for="offerletter">Offer Letter</label></th>
									  
									</tr>
									<?php  	  
									
									$qlist = "SELECT * FROM decision WHERE Is_active='1' AND app_post1='DS53 PROFESOR MADYA'";
									
									$reslist = $db->query($qlist);
									
									$count=0;
									 while($rowlist = $reslist->fetch_assoc()) { 
												
											   $user_Ic=$rowlist["user_Ic"];
										
											$count++; 
											
											    echo "<tr>";
													echo"<td style='width:5%' align='center'>" .$count."</td>";
													echo"<td style='width:10%' align='center'>" .$rowlist['Applicant_Name']." </td>";
													echo"<td style='width:10%' align='center'>" .$rowlist['user_Ic']."</td>";
													echo"<td style='width:10%' align='center'>" .$rowlist['faculty']."</td>";
													echo"<td style='width:20%' align='center'>" .$rowlist['app_post1']."</td>";
													if ($rowlist['Status_1'] == 'Interview') {
													  // do something
													  echo"<td style='width:10%' align='center'>" .$rowlist['Status_1']."</td>";	
													} else {
													  echo"<td style='width:10%' align='center'>" .$rowlist['Status_1']."<br/>".$rowlist['Status_2']."</td>";	
											}		
											echo"<td style='width:15%' align='center'><a style='border-radius: 8px;' class='btn btn-info btn-sm' href ='viewlistM.php?user_Ic=$rowlist[user_Ic]'>View</a></td>";
													echo"<td style='width:10%' align='center'><a style='border-radius: 8px;' class='btn btn-primary btn-sm' href ='approve.php?Decision_Id=$rowlist[Decision_Id]'>Approve</a></td>";
													if ($rowlist['Status_1'] == 'Interview') {
													echo"<td style='width:20%' align='center'><a style='border-radius: 8px;' class='btn btn-info btn-sm' href ='DecisionIvM.php?Applicant_Name=$rowlist[Applicant_Name] & user_Ic=$rowlist[user_Ic] '>View</a></td>";
													
													echo"<td style='width:5%' align='center'><a style='border-radius: 8px;' class='btn btn-success btn-sm' href ='offerletter.php?Applicant_Name=$rowlist[Applicant_Name] & user_Ic=$rowlist[user_Ic] & app_post1=$rowlist[app_post1] & & faculty=$rowlist[faculty]'>Send</a></td>";
													}
													
													echo "</tr>";										
											
										}			
									

									?>
                                    </tbody>
                                </table>
										
									
								</div>
				</div>
							</div><!-- .animated -->
							<div class="modal-footer">
							<a style="border-radius: 8px;" class="btn btn-primary" href="manager.php">OK</a>
							
                            </div>	
				</div><!-- .content -->
				
		
			
			
			</div>
	
	   </form>
	   <br>
		</div><!-- /#right-panel -->

		<!-- Right Panel -->

		<!-- Right Panel -->

		<script src="vendors/jquery/dist/jquery.min.js"></script>
		<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
		<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="assets/js/main.js"></script>


		<script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
		<script src="assets/js/dashboard.js"></script>
		<script src="assets/js/widgets.js"></script>
		<script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
		<script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
		<script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
		<script>
			(function($) {
				"use strict";

				jQuery('#vmap').vectorMap({
					map: 'world_en',
					backgroundColor: null,
					color: '#ffffff',
					hoverOpacity: 0.7,
					selectedColor: '#1de9b6',
					enableZoom: true,
					showTooltip: true,
					values: sample_data,
					scaleColors: ['#1de9b6', '#03a9f5'],
					normalizeFunction: 'polynomial'
				});
			})(jQuery);
		</script>
		
<script>
$('#verify').click(function(){
	var page_type = $('#app_post1').val();
	
	if(page_type==1){
		window.location.href='finallist.php'
	}else if(page_type==2){
		window.location.href='finallist1.php'
	}else if(page_type==3){
		window.location.href='finallist2.php'
	}
return false;
}
)
</script>
	</body>

	</html>

