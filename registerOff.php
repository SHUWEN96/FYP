			<?php
			//including the database connection file
			include '../../Final Year Project/sufee-master/config.php';
			$db = db_connect();
			session_start();
			
			$result = mysqli_query($mysqli, "SELECT * FROM userlist ORDER BY user_id DESC"); // using mysqli_query instead
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

<?php  	  
$link = mysqli_connect("localhost", "root", "");

mysqli_connect("localhost","root","")or die(mysqli_connect_error());
mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

 $qlist = "SELECT * FROM userlist WHERE selected_val='officer'";
      $reslist = $db->query($qlist);
  //echo "<span align='center'>Selamat Datang,</br>" .$row["FirstName"]." ".$row["LastName"]."</span><br>";

?>

					</header><!-- /header -->
					<!-- Header-->
				   <div class="breadcrumbs">
					   
						<div class="col-sm-12">
							<div class="page-header float-right">
								<div class="page-title">
									<ol class="breadcrumb text-right">
										
										<li class="active">Officer Registration</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				<form class="form-inline" action="SignUp1Officer.php" method="post" enctype="multipart/form-data" >
					 <div class="content mt-3">
						<div class="animated">

							<div class="card">
								<div class="card-header">
									<i class="mr-2 fa fa-align-justify"></i>
									<strong class="card-title" style="font-size:px;">OFFICER REGISTRATION</strong>
								</div>
								<div class="card-body">
										   <button style="border-radius: 8px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#mediumModal">Add New Officer</button>
							  <br/>
							  <br/>
											<table class="table">
												<tbody>
													<tr>
														 <th scope="col"><label for="Name">Name</label></th>
														 <th scope="col" ><label for="user_Ic">IC Number</label></th>
														 <th scope="col"><label for="emailAdd">Email address</label></th>
														 <th scope="col"><label for="update">Action</label></th>
													</tr>
										   <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($rowlist = $reslist->fetch_assoc()) {        
            echo "<tr>";
			
            echo "<td style='width:20%' align='center'>".$rowlist['name']."</td>";
            echo "<td style='width:10%' align='center'>".$rowlist['user_Ic']."</td>";
            echo "<td style='width:20%' align='center'>".$rowlist['emailAdd']."</td>";  
          echo "<td style='width:30%' align='center'><a href=\"editOff.php?user_id=$rowlist[user_id]\">Edit</a> | <a href=\"deleteOff.php?user_id=$rowlist[user_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";       
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
                                             <th scope="col">Name</th>
                                             <th scope="col" ><input class="form-control" type="text" name="name" required> </th>
                                        </tr>
										<tr>
                                             <th scope="col">IC Number</th>
                                             <th scope="col" ><input class="form-control" type="text" name="user_Ic"required></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">Email address</th>
                                             <th scope="col" ><input class="form-control" type="text" name="emailAdd"required></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">Password</th>
                                             <th scope="col" ><input class="form-control" type="password" name="password"required></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">Confirm Password</th>
                                             <th scope="col" ><input class="form-control" type="password" name="confirmpassword"required></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">User Type</th>
                                             <th scope="col" ><select name="usertype" class="form-control" id="usertype">
											  <option value="">Choose User Type</option>
											  <option value="officer">Officer</option>
											</select></th>
                                        
                                        </tr>
										
													</tbody>
												</table>
											</div>
											</div>
											<div class="modal-footer">
											<input style="border-radius: 8px;" type="submit" name="Submit" value="Add" class="btn btn-success" /><a style="border-radius: 8px;" class="btn btn-primary" href="registerOff.php">Back</a><br/><br/></td>
											
										
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
