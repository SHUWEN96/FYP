
 <?php
include_once("config.php");
$db = db_connect();
session_start();

$qlist = "SELECT * FROM userlist WHERE user_id='".$_SESSION['SESS_USER_ID'] ."'";
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        
           $user_Ic=$rowlist["user_Ic"];
        }

	if(isset($_POST['Insert'])) { 	
/* Get input from form using post method*/
$faculty = $_POST['faculty'];
$app_post1 = $_POST['app_post1'];


    $faculty = stripcslashes($faculty);
	$app_post1 = stripcslashes($app_post1);

	
    // Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
	
 $sql = "INSERT INTO position (user_Ic,faculty,app_post1)VALUES('$user_Ic','$faculty','$app_post1')";
 $result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
 
 $message = "Insert Successfully.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> location.href='i.php'; </script>";
	
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
				<?php  	  

				 $qlist = "SELECT * FROM userlist 
					  INNER JOIN position ON userlist.user_Ic = position.user_Ic 
					  WHERE user_id='".$_SESSION['SESS_USER_ID']."'";
				$reslist = $db->query($qlist);
				$reslist2 = $db->query($qlist);
				  $row = $reslist->fetch_assoc();
				 
				?>

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
									<a href="6.html"> </i>Self References </a>
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

        </header><!-- /header -->
        <!-- Header-->
       <div class="breadcrumbs">
           
            <div class="col-sm-12">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            
                            <li><a href="#">Application Form</a></li>
                            <li class="active">Choose Position</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		<form class="form-inline" method="post" enctype="multipart/form-data" >
        <div class="content mt-3">
		
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
							 <i class="mr-2 fa fa-align-justify"></i>
                                <strong class="card-title" style="font-size:px;">Job position to be applied (according to the priority of applicant)</strong>
								
									
								<?php
								//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
								while($rowlist = $reslist2->fetch_assoc()) { 
								
									echo "<tr>";
									echo "<td ><a href=\"updatePosition.php?Choose_Position_Id=$rowlist[Choose_Position_Id]\" >Edit</a> | <a href=\"deletePosition.php?Choose_Position_Id=$rowlist[Choose_Position_Id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
									|<a href=\"verifyPost.php?Choose_Position_Id=$rowlist[Choose_Position_Id]\">Verify</a> 
									
									</td>";      
								}
								?>
								
						 </div>
                            <div class="card-body">
                                <table class="table">
								<input type="hidden" class="form-control" name="user_Ic" id="disabledInput" type="text" placeholder="<?php echo $_SESSION['SESS_USER_ID'] ?>" readonly>
                                    
									<tbody>
									
                                        <tr>
                                            <th scope="col"><label for="faculty">Faculty</label></th>
                                            <th scope="col"><select name="faculty" class="form-control"  <?php echo $row["Position_checklist"] ==1? "disabled ":""?> >
                                                                 <option value=""></option>
                                                                 <option value="FKAAS">Faculty of Civil and Environmental Engineering (FKAAS)</option>
                                                                 <option value="FKEE">Faculty of Electrical and Electronic Engineering (FKEE)</option>
                                                                 <option value="FKMP">Faculty of Mechanical and Manufacturing Engineering (FKMP)</option>
                                                                 <option value="FPTP">Faculty of Technology Management and Business (FPTP)</option>
                                                                 <option value="FPTV">Faculty of Technical and Vocational Education (FPTV)</option>
                                                                 <option value="FSKTM">Faculty of Computer Science and Information Technology (FSKTM)</option>
                                                                 <option value="FAST">Faculty of Applied Sciences and Technology (FAST)</option>
                                                                 <option value="FTK">Faculty of Engineering Technology (FTK)</option>
                                                            </select></th>
                                        </tr>
                              
                                        <tr>
                                            <th rowspan="2" scope="col"><label for="grade">Grade/Job Position</label></th>
                                            <th scope="col"><select id="app_post1" class="form-control" name="app_post1" <?php echo $row["Position_checklist"] ==1?"disabled ":""?>>
                                                 <option value=""></option>
												 <option value="DS45 LECTURER">DS45 LECTURER</option>
                                                 <option value="DS51 SENIOR LECTURER">DS51 SENIOR LECTURER</option>
                                                 <option value="DS53 PROFESOR MADYA">DS53 PROFESOR MADYA</option>
                                                
                                                 </select></th>
												 
                                        </tr>
										
										
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
			<div style='float: left;'><input style="border-radius: 8px;" type="submit" class="btn btn-success" id="Insert" value="Insert" name="Insert" <?php echo $row["Position_checklist"] ==1?"disabled ":""?>/></div>
				<div style='float:right;'><nav aria-label="...">
  <ul class="pagination">
   
    <li class="page-item active" aria-current="page">
      <span class="page-link">
        1
        <span class="sr-only">(current)</span>
      </span>
    </li>
	 <li class="page-item"><a class="page-link" href="1.php">2</a></li>
    <li class="page-item"><a class="page-link" href="education.php">3</a></li>
	<li class="page-item"><a class="page-link" href="cocuriculum.php">4</a></li>
    <li class="page-item"><a class="page-link" href="4.php">5</a></li>
	<li class="page-item"><a class="page-link" href="5.php">6</a></li>
    <li class="page-item"><a class="page-link" href="6.php">7</a></li>
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
