<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();


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
									<a href="i.php"> </i>Choose Position </a>
								</li>
								 <li class="active">
									<a href="1.php"> </i>Personal Information</a>
								</li>
								<li class="active">
									<a href="education.php"> </i>Education level</a>
								</li>
								
								<!--<li class="menu-item-has-children dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Education level</a>
									<ul class="sub-menu children dropdown-menu">
										<li><i class="menu-icon fa fa-fort-awesome"></i><a href="a.php">Primary</a></li>
										<li><i class="menu-icon ti-themify-logo"></i><a href="b.php">SRP/PMR</a></li>
										 <li><i class="menu-icon fa fa-fort-awesome"></i><a href="c.php">SPM/SPVM</a></li>
										<li><i class="menu-icon ti-themify-logo"></i><a href="d.php">STPM/STAM</a></li>
										 <li><i class="menu-icon fa fa-fort-awesome"></i><a href="e.php">University/College
			  /Polytechnic</a></li>
									   
									</ul>-->
								</li>
								
								<li class="active">
									<a href="cocuriculum.php"> </i>Cocuriculum level</a>
								</li>
								 <li class="active">
									<a href="4.php"> </i>Experiences </a>
								</li>
								<li class="active">
									<a href="5.php"> </i>Training Record/Course </a>
								</li>
								<li class="active">
									<a href="6.html"> </i>Self References </a>
								</li>
								<li class="active">
									<a href="7.php"> </i>Acknowledgment of the Applicant</a>
								</li>
								<li class="active">
									<a href="verify.php"> </i>Verification</a>
								</li>
								<li class="active">
									<a href="8.php"> </i>Officer Decision </a>
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
                            
                            <li><a href="#">Application Form</a></li>
                            <li class="active">Verification</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		<form class="form-inline" action="verifyApp.php" name="listForm" method="post" enctype="multipart/form-data">
        <div class="content mt-3">
		
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
							 <i class="mr-2 fa fa-align-justify"></i>
                                <strong class="card-title" style="font-size:px;">Verification</strong>
							
                            </div>
							<div id="AppForm"> 
                            <div class="card-body">
                                <table class="table">
								<input type="hidden" class="form-control" name="user_Ic" id="disabledInput" type="text" placeholder="<?php echo $_SESSION['SESS_NOIC'] ?>" readonly>
                                    <div id="AppForm">
									
									<tbody>
									<input type="hidden" name="app_post1" placeholder="<?php echo $_SESSION['SESS_POST'] ?>" value="app_post1">
									<input type="hidden" name="Applicant_Name" placeholder="<?php echo $_SESSION['SESSAPP'] ?>" value="Applicant_Name">

                                        <tr>
                                            <th scope="col"><label for="part">Part</label></th>
											<td scope="col"><label for="a">Position</label></td>
											<td scope="col"><label for="b">Personal Information</label></td>
											<td scope="col"><label for="c">Education Level</label></td>
											<td scope="col"><label for="d">Cocuriculum Level</label></td>
											 <td scope="col"><label for="e">Work Experiences</label></td>
											 <td scope="col"><label for="f">Training Record/Courses</label></td>
											 <td scope="col"><label for="g">Self References</label></td>
                                            <td scope="col"><label for="h">Acknowledgement of Applicant</label>
											<th scope="col"><label for="verify">Verify</label></th>
										</tr>
										
										</td>
											<th scope="col"><label for="finish">Finish Status</label></th>
											<td scope="col">
											<?php
											 $Choose_Position_Id = null;
										if ( !empty($_GET['Choose_Position_Id'])) {
											$Choose_Position_Id = $_REQUEST['Choose_Position_Id'];
										}
										
										$link = mysqli_connect("localhost", "root", "");

										mysqli_connect("localhost","root","")or die(mysqli_connect_error());
										mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

							$qlist = "SELECT Position_checklist FROM position where user_Ic='".$_SESSION['SESS_NOIC'] ."'";
								  $reslist = $db->query($qlist);
								$rowlist = $reslist->fetch_assoc();
								if ($rowlist['Position_checklist'] == '1'){
									echo "<span class='badge badge-pill badge-success'>Verified</span>";
								}
									?>
											</td>
											<td scope="col">	<?php
											 $Applicant_Id = null;
										if ( !empty($_GET['Applicant_Id'])) {
											$Applicant_Id = $_REQUEST['Applicant_Id'];
										}
										
										$link = mysqli_connect("localhost", "root", "");

										mysqli_connect("localhost","root","")or die(mysqli_connect_error());
										mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

							$qlist = "SELECT Applicant_checklist FROM applicant WHERE user_Ic='".$_SESSION['SESS_NOIC'] ."'";
								  $reslist = $db->query($qlist);
								$rowlist = $reslist->fetch_assoc();
									if ($rowlist['Applicant_checklist'] == '1'){
									echo "<span class='badge badge-pill badge-success'>Verified</span>";
								}
							
									?></td>
											<td scope="col"><?php
											 $Education_detail_Id = null;
										if ( !empty($_GET['Education_detail_Id'])) {
											$Education_detail_Id = $_REQUEST['Education_detail_Id'];
										}
										
										$link = mysqli_connect("localhost", "root", "");

										mysqli_connect("localhost","root","")or die(mysqli_connect_error());
										mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

							$qlist = "SELECT Edu_checklist FROM education WHERE user_Ic='".$_SESSION['SESS_NOIC'] ."'";	
								  $reslist = $db->query($qlist);
								$rowlist = $reslist->fetch_assoc();
								if ($rowlist['Edu_checklist'] == '1'){
									echo "<span class='badge badge-pill badge-success'>Verified</span>";
								}
								
							
									?></td>
											<td scope="col"><?php
											 $Cocuriculum_Id = null;
										if ( !empty($_GET['Applicant_Id'])) {
											$Cocuriculum_Id = $_REQUEST['Cocuriculum_Id'];
										}
										
										$link = mysqli_connect("localhost", "root", "");

										mysqli_connect("localhost","root","")or die(mysqli_connect_error());
										mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

							$qlist = "SELECT Cocuriculum_checklist FROM cocuriculum WHERE user_Ic='".$_SESSION['SESS_NOIC'] ."'";	
								  $reslist = $db->query($qlist);
								$rowlist = $reslist->fetch_assoc();
								if ($rowlist['Cocuriculum_checklist'] == '1'){
									echo "<span class='badge badge-pill badge-success'>Verified</span>";
								}
									
							
									?></td>
											<td scope="col"><?php
											 $Work_Experience_Id = null;
										if ( !empty($_GET['Work_Experience_Id'])) {
											$Work_Experience_Id = $_REQUEST['Work_Experience_Id'];
										}
										
										$link = mysqli_connect("localhost", "root", "");

										mysqli_connect("localhost","root","")or die(mysqli_connect_error());
										mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

							$qlist = "SELECT Work_experience_checklist FROM work_experience WHERE user_Ic='".$_SESSION['SESS_NOIC'] ."'";
								  $reslist = $db->query($qlist);
								$rowlist = $reslist->fetch_assoc();
								if ($rowlist['Work_experience_checklist'] == '1'){
									echo "<span class='badge badge-pill badge-success'>Verified</span>";
								}
									
							
									?></td>
											<td scope="col"><?php
											 $Training_Id = null;
										if ( !empty($_GET['Training_Id'])) {
											$Training_Id = $_REQUEST['Training_Id'];
										}
										
										$link = mysqli_connect("localhost", "root", "");

										mysqli_connect("localhost","root","")or die(mysqli_connect_error());
										mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

							$qlist = "SELECT Training_checklist FROM training WHERE user_Ic='".$_SESSION['SESS_NOIC'] ."'";	
								  $reslist = $db->query($qlist);
								$rowlist = $reslist->fetch_assoc();
									if ($rowlist['Training_checklist'] == '1'){
									echo "<span class='badge badge-pill badge-success'>Verified</span>";
								}
									
									?></td>
											<td scope="col"><?php
											 $self_reference_id = null;
										if ( !empty($_GET['self_reference_id'])) {
											$self_reference_id = $_REQUEST['self_reference_id'];
										}
										
										$link = mysqli_connect("localhost", "root", "");

										mysqli_connect("localhost","root","")or die(mysqli_connect_error());
										mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

							$qlist = "SELECT self_checklist FROM self_reference WHERE user_Ic='".$_SESSION['SESS_NOIC'] ."'";	
								  $reslist = $db->query($qlist);
								$rowlist = $reslist->fetch_assoc();
								if ($rowlist['self_checklist'] == '1'){
									echo "<span class='badge badge-pill badge-success'>Verified</span>";
								}
									
							
									?></td>
											<td scope="col"><?php
											 $acknowledgement_id = null;
										if ( !empty($_GET['acknowledgement_id'])) {
											$acknowledgement_id = $_REQUEST['acknowledgement_id'];
										}
										
										$link = mysqli_connect("localhost", "root", "");

										mysqli_connect("localhost","root","")or die(mysqli_connect_error());
										mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

							$qlist = "SELECT Ack_checklist FROM acknowledgement WHERE user_Ic='".$_SESSION['SESS_NOIC'] ."'";
								  $reslist = $db->query($qlist);
								$rowlist = $reslist->fetch_assoc();
								if ($rowlist['Ack_checklist'] == '1'){
									echo "<span class='badge badge-pill badge-success'>Verified</span>";
								}
								
									?></td>
											<th scope="col"><input style="border-radius: 8px;" type="submit" class="btn btn-success" value="Verify" name="Submit"<?php 
											$link = mysqli_connect("localhost", "root", "");

										mysqli_connect("localhost","root","")or die(mysqli_connect_error());
										mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

										 $qlist = "SELECT * FROM decision 
											  WHERE user_Ic='".$_SESSION['SESS_NOIC']."'";
											  $reslist = $db->query($qlist);
											  $rowlist = $reslist->fetch_assoc();
											  echo $rowlist["Is_active"] ==1? "disabled ":""?>/></th>
                                         </tr>
                              
                                      
										
										
                                    </tbody>
									</div>
                                </table>
							
                            </div>
							</div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
		
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

 
}
</script>
<script type="text/javascript">
	function checkTotal() {
		document.listForm.total.value = '';
		var sum = 0;
		for (i=0;i<document.listForm.choice.lengtd;i++) {
		  if (document.listForm.choice[i].checked) {
		  	sum = sum + parseInt(document.listForm.choice[i].value);
		  }
		}
		document.listForm.total.value = sum;
	}
</script>
</body>

</html>
