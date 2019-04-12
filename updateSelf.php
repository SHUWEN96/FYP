<?php

$self_reference_id = null;
if ( !empty($_GET['self_reference_id'])) {
	$self_reference_id = $_REQUEST['self_reference_id'];
}

//including the database connection file
include_once("config.php");
 $db = db_connect();
session_start();
if(isset($_POST['Update'])) { 
       
$person1 = $_POST['person1'];
$person2 = $_POST['person2'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$job1 = $_POST['job1'];
$job2 = $_POST['job2'];
$tel1= $_POST['tel1'];
$tel2 = $_POST['tel2'];
	
	// checking empty fields
    if(empty($person1) || empty($person2) || empty($add1)|| empty($add2)|| empty($job1)|| empty($job2)|| empty($tel1)|| empty($tel2) ) {                
        if(empty($person1)) {
            echo "<script>alert('Person 1 field is empty.')</script>";
        }
        
        if(empty($person2)) {
            echo "<script>alert('Person 2 field is empty.')</script>";
		}	
    
		
		if(empty($add1)) {
            echo "<script>alert('Address 1 field is empty.')</script>";
			
        }
		
		 if(empty($add2)) {
            echo "<script>alert('Address 2 field is empty.')</script>";
        }
        
        if(empty($job1)) {
            echo "<script>alert('Job 1 field is empty.')</script>";
		}	
    
		
		if(empty($job2)) {
            echo "<script>alert('Job 2 field is empty.')</script>";
			
        }
		
		 if(empty($tel1)) {
            echo "<script>alert('Tel 1 field is empty.')</script>";
		}	
    
		
		if(empty($tel2)) {
            echo "<script>alert('Tel 2 field is empty.')</script>";
			
        }
		
		
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
       $result = mysqli_query($mysqli, "UPDATE self_reference SET person1='$person1',person2='$person2',add1='$add1',add2='$add2',job1='$job1',job2='$job2',tel1='$tel1',tel2='$tel2' WHERE self_reference_id=$self_reference_id");
        //display success message
        echo "<script>alert('Data update successfully.')</script>";
       
    }
}		
?>

<?php

$link = mysqli_connect("localhost", "root", "");

mysqli_connect("localhost","root","")or die(mysqli_connect_error());
mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");
	//selecting data associated with this particular id
	$sql = "SELECT * FROM self_reference WHERE self_reference_id=$self_reference_id";
    $result = mysqli_query($link, $sql) or die( mysqli_error($link));
	
	while($res = mysqli_fetch_array($result))
	{
		$person1 = $res['person1'];
		$person2 = $res['person2'];
		$add1 = $res['add1'];
		$add2 = $res['add2'];
		$job1 = $res['job1'];
		$job2 = $res['job2'];
		$tel1 = $res['tel1'];
		$tel2 = $res['tel2'];
		
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
	  INNER JOIN self_reference ON userlist.user_Ic = self_reference.user_Ic 
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
								<li class="active">Self References</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		<form class="form-inline" action="updateSelf.php?self_reference_id=<?php echo $self_reference_id?>" method="post" enctype="multipart/form-data" >
			<div class="content mt-3">
			<input type="hidden" class="form-control" name="user_Ic" id="disabledInput" type="text" placeholder="<?php echo $_SESSION['SESS_NOIC'] ?>" readonly>
										<br/>
										<br/>
				<div class="animated fadeIn">
					<div class="row">
					
						<div class="col-lg-6">

							<div class="card">
							 <div class="card-header">
                        <i class="mr-2 fa fa-align-justify"></i>
                        <strong class="card-title" style="font-size:px;">6. SELF REFERENCE</strong>
						<?php
								//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($rowlist = $reslist->fetch_assoc()) {        
            echo "<tr>";
		
            echo "<td ><a href=\"updateSelf.php?self_reference_id=$rowlist[self_reference_id]\">Edit</a> | <a href=\"deleteSelf.php?self_reference_id=$rowlist[self_reference_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";      
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
												 <th scope="col" ><input class="form-control" type="text" id="person1" name="person1" size="10" value="<?php echo $person1;?>" required></label></th>
											
											</tr>
											
											<tr>
												 <th scope="col"><label for="add1">Address</label></th>
												 <th scope="col" ><input class="form-control" type="text" id="add1" name="add1" size="30" value="<?php echo $add1;?>" required></label></th>
											
											</tr>
											
											<tr>
												 <th scope="col"><label for="job1">Job</label></th>
												 <th scope="col" ><input class="form-control" type="text" id="job1" name="job1" size="10" value="<?php echo $job1;?>" required></label></th>
											
											</tr>
											
											<tr> 
												 <th scope="col"><label for="tel1">H/P Number</label></th>
												 <th scope="col"><input class="form-control" type="text" id="tel1" name="tel1" size="10" value="<?php echo $tel1;?>" required></label></th>
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
												 <th scope="col" ><input class="form-control" type="text" id="person2" name="person2" size="10" value="<?php echo $person2;?>" required></label></th>
											
											</tr>
											
											<tr>
												 <th scope="col"><label for="add2">Address</label></th>
												 <th scope="col" ><input class="form-control" type="text" id="add2" name="add2" size="30" value="<?php echo $add2;?>" required></label></th>
											
											</tr>
											
											<tr>
												 <th scope="col"><label for="job2">Job</label></th>
												 <th scope="col" ><input class="form-control" type="text" id="job2" name="job2" size="10" value="<?php echo $job2;?>" required></label></th>
											
											</tr>
											
											<tr> 
												 <th scope="col"><label for="tel2">H/P Number</label></th>
												 <th scope="col"><input class="form-control" type="text" id="tel2" name="tel2" size="10" value="<?php echo $tel2;?>" required></label></th>
											 </tr>
										 
											<tr> 
										</tbody>
									</table>
								</div>
							</div>
						</div>
						
					</div>
				</div><!-- .animated -->
				<input style="border-radius: 8px;" type="submit" class="btn btn-info" value="Update" name="Update"/>
				<div style="float:right">
				<a style="border-radius: 8px;" class="btn btn-primary" href="6.php">Back</a>
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
