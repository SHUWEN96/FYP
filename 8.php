			<?php
			//including the database connection file
					include_once("config.php");
					$db = db_connect();
					session_start();
					
			$Decision_Id = null;
if ( !empty($_GET['Decision_Id'])) {
	$Decision_Id = $_REQUEST['Decision_Id'];
}
$result = mysqli_query($mysqli, "SELECT * FROM decision ORDER BY decision_Id "); 
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
						  <a class="navbar-brand" href="applicant.php"><img src="images/images/uthm.jpeg" alt="Logo"></a>
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
									<a href="6.php"> </i>Self References </a>
								</li>
								<li class="active">
									<a href="7.php"> </i>Acknowledgment of the Applicant</a>
								</li>
								<li class="active">
									<a href="verify.php"> </i>Applicant Verification</a>
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
								
								<li><a href="#">Application Form</a></li>
								<li class="active">Officer Decision</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
    <form class="form-inline"  method="post" action="8.php?Decision_Id=<?php echo $Decision_Id?>" enctype="multipart/form-data" >
         <div class="content mt-3">
            <div class="animated">
				<?php  	  
				
				 $qlist = "SELECT * FROM userlist a 
					  INNER JOIN decision d ON a.user_Ic = d.user_Ic 
					  WHERE a.user_id='".$_SESSION['SESS_USER_ID']."' AND d.Is_active='1'";
				$reslist = $db->query($qlist);
				?>
                <div class="card">
							
								<div class="card-header">
								 <i class="mr-2 fa fa-align-justify"></i>
								<strong class="card-title" style="font-size:px;">8. OFFICER DECISION</strong>
						
								</div>
								<div class="card-body">
								
									<table class="table">
							         
										<tbody>
										<input type="hidden" class="form-control" name="user_Ic" id="disabledInput" type="text" placeholder="<?php echo $_SESSION['SESS_NOIC'] ?>" readonly>
								<?php
							while($rowlist = $reslist->fetch_assoc()) { 
                            
							echo "<tr >"; 
							echo "<center >"; 
							if($rowlist['Status_1']=='In Process'){							
									echo "<h2 style='background-color:rgb(255, 99, 71);' >"."<div class='upper'>"."<strong>". "STATUS : "."</strong>" . $rowlist["Status_1"]."<br>". "</h2>"."</h2>";
									 echo "</tr>";
							}
							else {	
									echo "<h2 style='background-color:rgb(255, 99, 71);' >"."<div class='upper'>"."<strong>". "STATUS : "."</strong>" . $rowlist["Status_1"]."<br>". "</h2>"."</h2>";
									 echo "</tr>";
									echo "<tr>";     
									echo "<td style='width:50%' >"."<strong>". "Officer Name : "."</strong>" . $rowlist["Officer_Name"]. "<br>"."</td>";
									
									echo "<td style='width:50%'>"."<strong>". "Date  : "."</strong>" . $rowlist["date_Officer"]. "<br>"."</td>";
									echo "</tr>";
							}
								}
							
								?>
										
										</tbody>	
									</table>
									
								</div>
				</div>
							</div>
							<div class="modal-footer">
							<a style="border-radius: 8px;" class="btn btn-primary" href="applicant.php">OK</a>
							
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


