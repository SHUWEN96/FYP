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
						  INNER JOIN acknowledgement ON userlist.user_Ic = acknowledgement.user_Ic 
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
								<li class="active">Acknowledgement of the Applicant</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		<form class="form-inline" action="know.php" method="post" enctype="multipart/form-data"  onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
			<div class="content mt-3">
			
				<div class="animated fadeIn">
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
								 <i class="mr-2 fa fa-align-justify"></i>
									<strong class="card-title" style="font-size:px;">7. ACKNOWLEDGEMENT OF THE APPLICANT</strong>
									<?php
								
									while($rowlist = $reslist2->fetch_assoc()) {        
										echo "<tr>";
									
										echo "<td ><a href=\"updateAck.php?acknowledgement_id=$rowlist[acknowledgement_id]\">Edit</a> | <a href=\"deleteAck.php?acknowledgement_id=$rowlist[acknowledgement_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>| <a href=\"verifyAck.php?acknowledgement_id=$rowlist[acknowledgement_id]\">Verify</a> </td>";      
									}
									?>
								</div>
								<div class="card-body">
								<p>Under section 5, the Service Commission Act 1957 (Revision 1989), an applicant who gives false or misleading information
									 in the application form for an employment, is liable to be jailed for 2 years or fined two thousand Ringgit of Malaysia or both.</p>

									<p>I hereby declare that I am:</p>
									
									<table class="table">
									<input type="hidden" class="form-control" name="user_Ic" id="disabledInput" type="text" placeholder="<?php echo $_SESSION['SESS_NOIC'] ?>" readonly>
										<tbody>
											<tr>
												 <th scope="col"><label for="Criteria">Criteria</th>
												 <th scope="col" ><label for="ya">YES</label></th>
												 <th scope="col"><label for="no">NO</label></th>
											</tr>
											</tbody>
											<tr >
											
												 <td scope="col" >i)&nbsp;Do not have any criminal record</label></td>
												 <td scope="col"><center><input class="form-control" type="radio"   name="acknowledgement_1" <?php if (isset($acknowledgement_1) && $acknowledgement_1=="Yes") echo "checked";?> value="yes" <?php echo $row["Ack_checklist"] ==1? "disabled ":""?>/></center></td>
												 <td scope="col"><center><input class="form-control" type="radio"  name="acknowledgement_1" <?php if (isset($acknowledgement_1) && $acknowledgement_1=="No") echo "checked";?> value="no" <?php echo $row["Ack_checklist"] ==1? "disabled ":""?>/></center></td>

											</tr>
											
											<tr >
												 <td scope="col" >ii)&nbsp;Never stopped / dismissed by the government</label></td>
												 <td scope="col" ><center><input class="form-control" type="radio"  name="acknowledgement_2" <?php if (isset($acknowledgement_2) && $acknowledgement_2=="Yes") echo "checked";?> value="yes" <?php echo $row["Ack_checklist"] ==1? "disabled ":""?>/></center></td>
												 <td scope="col"><center><input class="form-control" type="radio"   name="acknowledgement_2" <?php if (isset($acknowledgement_2) && $acknowledgement_2=="No") echo "checked";?> value="no" <?php echo $row["Ack_checklist"] ==1? "disabled ":""?>/></center></td>
											</tr>
											
											<tr >
												 <td scope="col" >iii)&nbsp;Not a drug addict</label></td>
												 <td scope="col" ><center><input class="form-control" type="radio"  name="acknowledgement_3" <?php if (isset($acknowledgement_3) && $acknowledgement_3=="Yes") echo "checked";?> value="yes" <?php echo $row["Ack_checklist"] ==1? "disabled ":""?>/></center></td>
												 <td scope="col"><center><input class="form-control" type="radio"   name="acknowledgement_3" <?php if (isset($acknowledgement_3) && $acknowledgement_3=="No") echo "checked";?> value="no" <?php echo $row["Ack_checklist"] ==1? "disabled ":""?>/></center></td>
											</tr>
											
										 
											<tr >
												 <td scope="col" >iv)&nbsp;Has no foreign citizenship</label></td>
												 <td scope="col" ><center><input class="form-control" type="radio"  name="acknowledgement_4" <?php if (isset($acknowledgement_4) && $acknowledgement_4=="Yes") echo "checked";?> value="yes" <?php echo $row["Ack_checklist"] ==1? "disabled ":""?>/></center></td>
												 <td scope="col"><center><input class="form-control" type="radio"   name="acknowledgement_4" <?php if (isset($acknowledgement_4) && $acknowledgement_4=="No") echo "checked";?> value="no" <?php echo $row["Ack_checklist"] ==1? "disabled ":""?>/></center></td>
											</tr>
											
											<tr >
												 <td scope="col" >v)&nbsp;Not a bankrupt</label></td>
												 <td scope="col" ><center><input class="form-control" type="radio" name="acknowledgement_5" <?php if (isset($acknowledgement_5) && $acknowledgement_5=="Yes") echo "checked";?> value="yes" <?php echo $row["Ack_checklist"] ==1? "disabled ":""?>/></center></td>
												 <td scope="col"><center><input class="form-control" type="radio"  name="acknowledgement_5" <?php if (isset($acknowledgement_5) && $acknowledgement_5=="No") echo "checked";?> value="no" <?php echo $row["Ack_checklist"] ==1? "disabled ":""?>/></center></td>
											</tr>
										
									</table>
									
								</div>
							</div>
						</div>
						
						<p><input type="checkbox" name="checkbox" value="check" id="agree" /> I declare that the information given is correct. I agree that if this information is found to be false,this application will be revoked and if I have served, my service will be terminated immediately.<p>
						
					</div>
				</div><!-- .animated -->
				<div style='float: left;'><input style="border-radius: 8px;" type="submit" class="btn btn-success" value="Insert" name="Insert"<?php echo $row["Ack_checklist"] ==1? "disabled ":""?>/></div>
				<div style='float:right;'><nav aria-label="...">
  <ul class="pagination">
   <li class="page-item"><a class="page-link" href="i.php">1</a></li>
    <li class="page-item"><a class="page-link" href="1.php">2</a></li>
	<li class="page-item"><a class="page-link" href="education.php">3</a></li>
	 <li class="page-item"><a class="page-link" href="cocuriculum.php">4</a></li>
	 <li class="page-item"><a class="page-link" href="4.php">5</a></li>
    <li class="page-item"><a class="page-link" href="5.php">6</a></li>
	<li class="page-item"><a class="page-link" href="6.php">7</a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">
        8
        <span class="sr-only">(current)</span>
      </span>
    </li>
	
	

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


