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

					 $qlist = "SELECT * FROM userlist 
						  INNER JOIN self_reference ON userlist.user_Ic = self_reference.user_Ic 
						  WHERE user_id='".$_SESSION['SESS_USER_ID']."'";
					$reslist = $db->query($qlist);
					$reslist2 = $db->query($qlist);
					   $row = $reslist->fetch_assoc();

					 
					  
					?>
			</header><!-- /header -->
			<!-- Header-->
		   <div class="breadcrumbs">
			   
				<div class="col-sm-12">
					<div class="page-header float-right">
						<div class="page-title">
							<ol class="breadcrumb text-right">
								
								<li><a href="#">Application Form</a></li>
								<li class="active">Self References</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		<form class="form-inline" action="self.php" method="post" enctype="multipart/form-data" >
			<div class="content mt-3">
			<input type="hidden" class="form-control" name="user_Ic" id="disabledInput" type="text" placeholder="<?php echo $_SESSION['SESS_NOIC'] ?>" readonly>
										
				<div class="animated fadeIn">
					<div class="row">
					
						<div class="col-lg-6">

							<div class="card">
							 <div class="card-header">
                        <i class="mr-2 fa fa-align-justify"></i>
                        <strong class="card-title" style="font-size:px;">6. SELF REFERENCE</strong>
						<?php 
        while($rowlist = $reslist2->fetch_assoc()) {        
            echo "<tr>";
		
            echo "<td ><a href=\"updateSelf.php?self_reference_id=$rowlist[self_reference_id]\">Edit</a> | <a href=\"deleteSelf.php?self_reference_id=$rowlist[self_reference_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> |<a href=\"verifySelf.php?self_reference_id=$rowlist[self_reference_id]\">Verify</a> </td>";      
        }
        ?>
                    </div>
								<div class="card-body">
								<strong class="card-title" style="font-size:px;">Person 1</strong>
								<br/>
								<br/>
									<table class="table">
										<tbody>
											<tr>
												 <th scope="col"><label for="person1">Name</label></th>
												 <th scope="col" ><input class="form-control" type="text" id="person1" name="person1" size="10" required <?php echo $row["self_checklist"] ==1? "disabled ":""?>></label></th>
											
											</tr>
											
											<tr>
												 <th scope="col"><label for="add1">Address</label></th>
												 <th scope="col" ><input class="form-control" type="text" id="add1" name="add1" size="30" required <?php echo $row["self_checklist"] ==1? "disabled ":""?>></label></th>
											
											</tr>
											
											<tr>
												 <th scope="col"><label for="job1">Job</label></th>
												 <th scope="col" ><input class="form-control" type="text" id="job1" name="job1" size="10" required <?php echo $row["self_checklist"] ==1? "disabled ":""?>></label></th>
											
											</tr>
											
											<tr> 
												 <th scope="col"><label for="tel1">H/P Number</label></th>
												 <th scope="col"><input class="form-control" type="text" id="tel1" name="tel1" size="10" required <?php echo $row["self_checklist"] ==1? "disabled ":""?>></label></th>
											 </tr>
										 
											<tr> 
										</tbody>
									</table>
								</div>
							</div>
						</div>
						
						 <div class="col-lg-6">
							<div class="card">
									 <div class="card-header">
                        <br/>
						
                    </div>
								<div class="card-body">
								<strong class="card-title" style="font-size:px;">Person 2</strong>
								<br/>
								<br/>
									<table class="table">
										<tbody>
											<tr>
												 <th scope="col"><label for="person2">Name</label></th>
												 <th scope="col" ><input class="form-control" type="text" id="person2" name="person2" size="10" required <?php echo $row["self_checklist"] ==1? "disabled ":""?>></label></th>
											
											</tr>
											
											<tr>
												 <th scope="col"><label for="add2">Address</label></th>
												 <th scope="col" ><input class="form-control" type="text" id="add2" name="add2" size="30" required <?php echo $row["self_checklist"] ==1? "disabled ":""?>></label></th>
											
											</tr>
											
											<tr>
												 <th scope="col"><label for="job2">Job</label></th>
												 <th scope="col" ><input class="form-control" type="text" id="job2" name="job2" size="10" required <?php echo $row["self_checklist"] ==1? "disabled ":""?>></label></th>
											
											</tr>
											
											<tr> 
												 <th scope="col"><label for="tel2">H/P Number</label></th>
												 <th scope="col"><input class="form-control" type="text" id="tel2" name="tel2" size="10" required <?php echo $row["self_checklist"] ==1? "disabled ":""?>></label></th>
											 </tr>
										 
											<tr> 
										</tbody>
									</table>
								</div>
							</div>
						</div>
						
					</div>
				</div><!-- .animated -->
				<div style='float: left;'><input style="border-radius: 8px;" type="submit" class="btn btn-success" value="Insert" name="Insert" <?php echo $row["self_checklist"] ==1? "disabled ":""?>/></div>
				<div style='float:right;'><nav aria-label="...">
  <ul class="pagination">
   <li class="page-item"><a class="page-link" href="i.php">1</a></li>
    <li class="page-item"><a class="page-link" href="1.php">2</a></li>
	<li class="page-item"><a class="page-link" href="education.php">3</a></li>
	 <li class="page-item"><a class="page-link" href="cocuriculum.php">4</a></li>
	 <li class="page-item"><a class="page-link" href="4.php">5</a></li>
    <li class="page-item"><a class="page-link" href="5.php">6</a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">
        7
        <span class="sr-only">(current)</span>
      </span>
    </li>
	
	<li class="page-item"><a class="page-link" href="7.php">8</a></li>
   
  </ul>
</nav></div>
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
