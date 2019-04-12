<?php

$self_reference_id = null;
if ( !empty($_GET['acknowledgement_id'])) {
	$acknowledgement_id = $_REQUEST['acknowledgement_id'];
}

//including the database connection file
include_once("config.php");
 $db = db_connect();
session_start();
if(isset($_POST['Update'])) { 
       
$acknowledgement_1 = $_POST['acknowledgement_1'];
$acknowledgement_2 = $_POST['acknowledgement_2'];
$acknowledgement_3 = $_POST['acknowledgement_3'];
$acknowledgement_4 = $_POST['acknowledgement_4'];
$acknowledgement_5 = $_POST['acknowledgement_5'];
	
	// checking empty fields
    if(empty($acknowledgement_1) || empty($acknowledgement_2) || empty($acknowledgement_3)|| empty($acknowledgement_4)|| empty($acknowledgement_5) ) {                
        if(empty($acknowledgement_1)) {
            echo "<script>alert('acknowledgement 1 field is empty.')</script>";
        }
        
        if(empty($acknowledgement_2)) {
            echo "<script>alert('acknowledgement 2 field is empty.')</script>";
		}	
    
		
		if(empty($acknowledgement_3)) {
            echo "<script>alert('acknowledgement 3 field is empty.')</script>";
			
        }
		
		 if(empty($acknowledgement_4)) {
            echo "<script>alert('acknowledgement 4 field is empty.')</script>";
        }
        
        if(empty($acknowledgement_5)) {
            echo "<script>alert('acknowledgement 5 field is empty.')</script>";
		}	
    
		
		
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
       $result = mysqli_query($mysqli, "UPDATE acknowledgement SET acknowledgement_1='$acknowledgement_1',acknowledgement_2='$acknowledgement_2',acknowledgement_3='$acknowledgement_3',acknowledgement_4='$acknowledgement_4',acknowledgement_5='$acknowledgement_5' WHERE acknowledgement_id=$acknowledgement_id");
        //display success message
       $message = "Update Successfully.Application Form fill up successfully and refered your status from officer decision within 1 week";
		echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> location.href='applicant.php'</script>";
       
    }
}		
?>

<?php

$link = mysqli_connect("localhost", "root", "");

mysqli_connect("localhost","root","")or die(mysqli_connect_error());
mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");
	//selecting data associated with this particular id
	$sql = "SELECT * FROM acknowledgement WHERE acknowledgement_id=$acknowledgement_id";
    $result = mysqli_query($link, $sql) or die( mysqli_error($link));
	
	while($res = mysqli_fetch_array($result))
	{
		$acknowledgement_1 = $res['acknowledgement_1'];
		$acknowledgement_2 = $res['acknowledgement_2'];
		$acknowledgement_3 = $res['acknowledgement_3'];
		$acknowledgement_4 = $res['acknowledgement_4'];
		$acknowledgement_5 = $res['acknowledgement_5'];
	
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
							<a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
							<a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
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

<?php  	  
$link = mysqli_connect("localhost", "root", "");

mysqli_connect("localhost","root","")or die(mysqli_connect_error());
mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

 $qlist = "SELECT * FROM userlist 
	  INNER JOIN acknowledgement ON userlist.user_Ic = acknowledgement.user_Ic 
	  WHERE user_id='".$_SESSION['SESS_USER_ID']."'";
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
								
								<li><a href="#">Application Form</a></li>
								<li class="active">Acknowledgement of the Applicant</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		<form class="form-inline" action="updateAck.php?acknowledgement_id=<?php echo $acknowledgement_id?>" method="post" enctype="multipart/form-data"  onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
			<div class="content mt-3">
			
				<div class="animated fadeIn">
					<div class="row">
						<div class="col-lg-12">
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
									<input type="hidden" class="form-control" name="user_Ic" id="disabledInput" type="text" placeholder="<?php echo $_SESSION['SESS_NOIC'] ?>" readonly>
										<tbody>
											<tr>
												 <th scope="col"><label for=""></th>
												 <th scope="col" ><label for="ya">YES</label></th>
												 <th scope="col"><label for="no">NO</label></th>
											</tr>
											
											<tr>
												 <th scope="col"><label for="acknowledgement_1">i)&nbsp;Do not have any criminal record</label></th>
												 <th scope="col" ><input class="form-control" type="radio"  name="acknowledgement_1" <?php if (isset($acknowledgement_1) && $acknowledgement_1=="Yes") echo "checked";?> value="yes" /></th>
												 <th scope="col"><input class="form-control" type="radio"  name="acknowledgement_1" <?php if (isset($acknowledgement_1) && $acknowledgement_1=="No") echo "checked";?> value="no" /></th>
											</tr>
											
											<tr>
												 <th scope="col"><label for="acknowledgement_2">ii)&nbsp;Never stopped / dismissed by the government</label></th>
												 <th scope="col" ><input class="form-control" type="radio"  name="acknowledgement_2" <?php if (isset($acknowledgement_2) && $acknowledgement_2=="Yes") echo "checked";?> value="yes" /></th>
												 <th scope="col"><input class="form-control" type="radio"  name="acknowledgement_2" <?php if (isset($acknowledgement_2) && $acknowledgement_2=="No") echo "checked";?> value="no" /></th>
											</tr>
											
											<tr>
												 <th scope="col"><label for="acknowledgement_3">iii)&nbsp;Not a drug addict</label></th>
												 <th scope="col" ><input class="form-control" type="radio"  name="acknowledgement_3" <?php if (isset($acknowledgement_3) && $acknowledgement_3=="Yes") echo "checked";?> value="yes" /></th>
												 <th scope="col"><input class="form-control" type="radio"  name="acknowledgement_3" <?php if (isset($acknowledgement_3) && $acknowledgement_3=="No") echo "checked";?> value="no" /></th>
											</tr>
										 
											<tr>
												 <th scope="col"><label for="acknowledgement_4">iv)&nbsp;Has no foreign citizenship</label></th>
												 <th scope="col" ><input class="form-control" type="radio"  name="acknowledgement_4" <?php if (isset($acknowledgement_4) && $acknowledgement_4=="Yes") echo "checked";?> value="yes" /></th>
												 <th scope="col"><input class="form-control" type="radio"  name="acknowledgement_4" <?php if (isset($acknowledgement_4) && $acknowledgement_4=="No") echo "checked";?> value="no" /></th>
											</tr>
											
											<tr>
												 <th scope="col"><label for="acknowledgement_5">v)&nbsp;Not a bankrupt</label></th>
												 <th scope="col" ><input class="form-control" type="radio"  name="acknowledgement_5" <?php if (isset($acknowledgement_5) && $acknowledgement_5=="Yes") echo "checked";?> value="yes" /></th>
												 <th scope="col"><input class="form-control" type="radio"  name="acknowledgement_5" <?php if (isset($acknowledgement_5) && $acknowledgement_5=="No") echo "checked";?> value="no" /></th>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						
						<p><input type="checkbox" name="checkbox" value="check" id="agree" /> I declare that the information given is correct. I agree that if this information is found to be false,this application will be revoked and if I have served, my service will be terminated immediately.<p>
						
					</div>
				</div><!-- .animated -->
								<input style="border-radius: 8px;" type="submit" class="btn btn-info" value="Update" name="Update"/>
								<div style="float:right">
								<a style="border-radius: 8px;" class="btn btn-primary" href="7.php">Back</a>
								</div>
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


