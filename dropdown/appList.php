<?php
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();

session_start();

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
	<?php 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['selected_val']==""){
		header("location:login.php?pesan=gagal");
	}
 
	?>
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
                        <a href="appList.php"> </i>Applicant List </a>
                    </li>
					 <li class="active">
                        <a href="JobRequirement.php"> </i>Job Requirement</a>
                    </li>
					  <li class="active">
                        <a href="shortlist.php"> </i>Short List Applicant </a>
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
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                   <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </a>

                        <div class="user-menu dropdown-menu">
                           

                            
                        </div>
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
                            
                            <li><a href="#">Applicant List</a></li>
                           
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
                        <strong class="card-title" style="font-size:px;"> APPLICANT LIST</strong>
                    </div>
					
					<div class="card-header">
                       
                        <strong class="card-title" style="font-size:px;"> DS45 LECTURER</strong>
                    </div>
                    <div class="card-body">
							
                                <table class="table">
                                    <tbody>
										<tr >
										  <th scope="col" ><label for="no">No</label></th>
										  <th scope="col" ><label for="Applicant_Name">Applicant Name</label></th>
										  <th scope="col" ><label for="user_Ic">Applicant IC</label></th>
										  <th scope="col" ><label for="faculty">Faculty</label></th>
										  <th colspan="3" scope="col" ><label for="action">Action</label></th>
										  
										</tr>
										<?php  	  
								$link = mysqli_connect("localhost", "root", "");

								mysqli_connect("localhost","root","")or die(mysqli_connect_error());
								mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");
								$qlist = "SELECT * FROM position LEFT JOIN applicant ON position.user_Ic = applicant.user_Ic;";
								$reslist = $db->query($qlist);
							    $count=0;
								 while($rowlist = $reslist->fetch_assoc()) { 
								 	
										    
										   $user_Ic=$rowlist["user_Ic"];
												if ($rowlist['app_post1'] == 'DS45 LECTURER'){
										       $count++;
										   echo "<tr>";
												echo"<td style='width:5%'>" .$count."</td>";
												echo"<td style='width:25%' align='center'>" .$rowlist['Applicant_Name']." </td>";
												echo"<td style='width:25%' align='center'>" .$rowlist['user_Ic']."</td>";
												echo"<td style='width:10%' align='center'>" .$rowlist['faculty']."</td>";
												echo"<td style='width:10%' align='center'><a style='border-radius: 8px;' class='btn btn-info btn-sm' href ='viewlistOff.php?user_Ic=$rowlist[user_Ic]'>View</a></td>";
												echo"<td style='width:10%' align='center'><a style='border-radius: 8px;' class='btn btn-primary btn-sm' href ='officerdecision.php?Applicant_Name=$rowlist[Applicant_Name] & user_Ic=$rowlist[user_Ic] '>Approval</a></td>";
												
												echo "</tr>";
										       
										   }
										 
								 }
								 
										?>
                                    </tbody>
                                </table>
								
                            </div>
							
							<br/>
					<br/>
					<div class="card-header">
                       
                        <strong class="card-title" style="font-size:px;"> DS51 SENIOR LECTURER</strong>
                    </div>
                    <div class="card-body">
							
                                <table class="table">
                                    <tbody>
										<tr >
										  <th scope="col" ><label for="no">No</label></th>
										  <th scope="col" ><label for="Applicant_Name">Applicant Name</label></th>
										  <th scope="col" ><label for="user_Ic">Applicant IC</label></th>
										   <th scope="col" ><label for="faculty">Faculty</label></th>
										  <th colspan="3" scope="col" ><label for="action">Action</label></th>
										  
										</tr>
									<?php  	  
								$link = mysqli_connect("localhost", "root", "");

								mysqli_connect("localhost","root","")or die(mysqli_connect_error());
								mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");
								$qlist = "SELECT * FROM position LEFT JOIN applicant ON position.user_Ic = applicant.user_Ic;";
								$reslist = $db->query($qlist);
							$count=0;
								 while($rowlist = $reslist->fetch_assoc()) { 
								 	
										    
										   $user_Ic=$rowlist["user_Ic"];
												if ($rowlist['app_post1'] == 'DS51 SENIOR LECTURER'){
										       $count++;
										   echo "<tr>";
												echo"<td style='width:5%'>" .$count."</td>";
												echo"<td style='width:25%'>" .$rowlist['Applicant_Name']." </td>";
												echo"<td style='width:25%'>" .$rowlist['user_Ic']."</td>";
												echo"<td style='width:10%'>" .$rowlist['Faculty']."</td>";
												echo"<td style='width:15%'><a href ='viewlistOff.php?user_Ic=$rowlist[user_Ic]'>View</a></td>";
												echo"<td style='width:15%'><a href ='officerdecision.php?Applicant_Name=$rowlist[Applicant_Name] & user_Ic=$rowlist[user_Ic] '>Approval</a></td>";
												echo"<td style='width:15%'><a href ='updatedecision.php?Applicant_Name=$rowlist[Applicant_Name] & user_Ic=$rowlist[user_Ic] '>Update</a></td>";
												echo "</tr>";
										       
										   }
										  
								 }
								 
										?>
											</tbody>
										</table>
																		
						</div>
						
					<br/>
					<br/>
					<div class="card-header">
                       
                        <strong class="card-title" style="font-size:px;"> DS53 PROFESOR MADYA</strong>
                    </div>
                    <div class="card-body">
							
                                <table class="table">
                                    <tbody>
								<tr >
								  <th scope="col" ><label for="no">No</label></th>
								  <th scope="col" ><label for="Applicant_Name">Applicant Name</label></th>
								  <th scope="col" ><label for="user_Ic">Applicant IC</label></th>
								   <th scope="col" ><label for="faculty">Faculty</label></th>
								  <th colspan="3" scope="col" ><label for="action">Action</label></th>
								  
								</tr>
								<?php  	  
								$link = mysqli_connect("localhost", "root", "");

								mysqli_connect("localhost","root","")or die(mysqli_connect_error());
								mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");
								$qlist = "SELECT * FROM position LEFT JOIN applicant ON position.user_Ic = applicant.user_Ic;";
								$reslist = $db->query($qlist);
							$count=0;
								 while($rowlist = $reslist->fetch_assoc()) { 
								 	
										   $user_Ic=$rowlist["user_Ic"];
												if ($rowlist['app_post1'] == 'DS53 PROFESOR MADYA'){
										       $count++;
										   echo "<tr>";
												echo"<td style='width:5%'>" .$count."</td>";
												echo"<td style='width:25%'>" .$rowlist['Applicant_Name']." </td>";
												echo"<td style='width:25%'>" .$rowlist['user_Ic']."</td>";
												echo"<td style='width:10%'>" .$rowlist['Faculty']."</td>";
												echo"<td style='width:15%'><a href ='viewlistOff.php?user_Ic=$rowlist[user_Ic]'>View</a></td>";
												echo"<td style='width:15%'><a href ='officerdecision.php?Applicant_Name=$rowlist[Applicant_Name] & user_Ic=$rowlist[user_Ic] '>Approval</a></td>";
												echo"<td style='width:15%'><a href ='updatedecision.php?Applicant_Name=$rowlist[Applicant_Name] & user_Ic=$rowlist[user_Ic] '>Update</a></td>";
												echo "</tr>";
										       
										   }
										  
								 }
								 
										?>
                                    </tbody>
                                </table>
								
                    </div>
							
				    
																	
																	
						
					
                </div>
                 
            </div><!-- .animated -->
			
        </div><!-- .content -->
  
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

</body>

</html>
