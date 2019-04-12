		<?php
		//including the database connection file
		include_once("config.php");
		 
		//fetching data in descending order (lastest entry first)
		//$result = mysql_query("SELECT * FROM cocuriculum ORDER BY id DESC"); // mysql_query is deprecated
		$result = mysqli_query($mysqli, "SELECT * FROM cocuriculum ORDER BY Cocuriculum_Id DESC"); // using mysqli_query instead
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


			<!-- Left Panel -->

			<aside id="left-panel" class="left-panel">
				<nav class="navbar navbar-expand-sm navbar-default">

					<div class="navbar-header">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fa fa-bars"></i>
						</button>
						<a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
						<a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
					</div>

					<div id="main-menu" class="main-menu collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="i.html"> </i>Choose Position </a>
							</li>
							 <li class="active">
								<a href="1.html"> </i>Personal Information</a>
							</li>
							 <li class="active">
								<a href="a.php"> </i>Education level</a>
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
							
							<li class="menu-item-has-children dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cocuriculum</a>
								<ul class="sub-menu children dropdown-menu">
									<li><i class="menu-icon fa fa-fort-awesome"></i><a href="3.php">School/University Level</a></li>
									<li><i class="menu-icon ti-themify-logo"></i><a href="koko1.php">After graduation</a></li>
								</ul>
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
									<img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
								</a>

								<div class="user-menu dropdown-menu">
									<a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

									<a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

									<a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

									<a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
								</div>
							</div>

							<div class="language-select dropdown" id="language-select">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
									<i class="flag-icon flag-icon-us"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="language">
									<div class="dropdown-item">
										<span class="flag-icon flag-icon-fr"></span>
									</div>
									<div class="dropdown-item">
										<i class="flag-icon flag-icon-es"></i>
									</div>
									<div class="dropdown-item">
										<i class="flag-icon flag-icon-us"></i>
									</div>
									<div class="dropdown-item">
										<i class="flag-icon flag-icon-it"></i>
									</div>
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
									<li class="active">Cocuriculum</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			<form class="form-inline" action="addkoko.php" method="post" enctype="multipart/form-data" >
				 <div class="content mt-3">
					<div class="animated">

						<div class="card">
							<div class="card-header">
								<i class="mr-2 fa fa-align-justify"></i>
								<strong class="card-title" style="font-size:px;">a.School/University =Level</strong>
							</div>
							<div class="card-body">
									  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mediumModal">Add New Data</button>
										<table class="table">
											<tbody>
												<tr>
													 <th scope="col"><label for="year">YEAR</label></th>
													 <th scope="col" ><label for="koko">ACTIVITY</label></th>
													 <th scope="col"><label for="file">FILE UPLOADED</label></th>
													 <th scope="col"><label for="update">UPDATE</label></th>
												</tr>
									  
											<?php 
											//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
											while($res = mysqli_fetch_array($result)) {         
											echo "<tr>";
											echo "<th scope='col'>".$res['Koko_Activity_Year_before']."</td>";
											echo "<th scope='col'>".$res['Koko_Activity_name_before']."</td>";
											echo "<th scope='col'>".$res['Koko_Activity_before_Cert']."</td>";    
											echo "<th scope='col'><a href=\"editkoko.php?Cocuriculum_Id=$res[Cocuriculum_Id]\">Edit</a> | <a href=\"deletekoko.php?Cocuriculum_Id=$res[Cocuriculum_Id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
											}
											?>
											</tbody>
										</table>
									</div>
								</div>
							 </div><!-- .animated -->
					
				</div><!-- .content -->
						
							<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="mediumModalLabel">Add Data</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
										   <div class="card-body">
											<table class="table" width="25%" border="0">
												<tbody>
													<tr>
														 <th scope="col"><label for="year">YEAR</label></th>
														 <th scope="col" ><input class="form-control" type="number" name="Koko_Activity_Year_before" min="1990" max="2018" /></th>
													
													</tr>
													
													<tr>
														 <th scope="col"><label for="activity">ACTIVITY</label></th>
														 <th scope="col" ><input class="form-control" type="text" name="Koko_Activity_name_before"></th>
													
													</tr>
													
													<tr>
														 <th scope="col"><label for="file">FILE UPLOADED</label></th>
														 <th scope="col" ><input class="form-control" type="file" name="Koko_Activity_before_Cert"></th>
													
													</tr>
												</tbody>
											</table>
										</div>
										</div>
										<div class="modal-footer">
										<input type="submit" name="Submit" value="Add" class="btn btn-success" /><a class="btn btn-primary" href="3.php">Back</a><br/><br/></td>
										
									
									</div>
								</div>
							</div>
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

		</body>

		</html>
