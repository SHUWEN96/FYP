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
.indent{ padding-left: 86.5em }
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
						  INNER JOIN applicant ON userlist.user_Ic = applicant.user_Ic 
						  WHERE user_id='".$_SESSION['SESS_USER_ID']."'";
					$reslist = $db->query($qlist);
					$reslist2 = $db->query($qlist);
						$row = $reslist->fetch_assoc();;

					 
					  
					?>


       
       

        </header><!-- /header -->
        <!-- Header-->
       <div class="breadcrumbs">
           
            <div class="col-sm-12">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            
                            <li><a href="#">Application Form</a></li>
                            <li class="active">Personal Information</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    <form class="form-inline" action="personal.php" method="post" enctype="multipart/form-data" >
        <div class="content mt-3">
		
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
							 <i class="mr-2 fa fa-align-justify"></i>
                                <strong class="card-title" style="font-size:px;">1. PERSONAL INFORMATION</strong>
								 <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($rowlist = $reslist2->fetch_assoc()) {        
            echo "<tr>";
		
            echo "<td ><a href=\"updatePersonal.php?Applicant_Id=$rowlist[Applicant_Id]\">Edit</a> | <a href=\"deletePersonal.php?Applicant_Id=$rowlist[Applicant_Id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>| <a href=\"verifyPersonal.php?Applicant_Id=$rowlist[Applicant_Id]\" >Verify</a></td>";      
        }
        ?>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="col"><label for="name">Full Name (Capital Letter)</label></th>
                                            <th scope="col"><input class="form-control" type="text" id="name" placeholder="Enter name" name="name" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                             <th scope="col"><label for="user_Ic">No Identity Card</th>
                                             <th scope="col" ><input class="form-control" name="user_Ic" id="disabledInput" type="text" 
											 placeholder="<?php echo $_SESSION['SESS_NOIC'] ?>" readonly></th>
                                       </tr>
                                        <tr>
                                            <th scope="col"><label for="age">Age</label></th>
                                            <th scope="col"><input class="form-control" type="text" id="age" placeholder="Enter age" name="age" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                            <th scope="col"><label for="gender">Gender </label></th>
											<th style="width: 120px; height: 20px;" <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> >
                                            <select name="gender" class="form-control" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> >
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            </select></th>
                                        </tr>
                                        <tr>
                                            <th scope="col"><label for="DOB">Date Of Birth </label></th>
                                            <th scope="col"><input class="form-control" type="date" name="DOB" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                            <th scope="col"><label for="POB">Place Of Birth </label></th>
                                            <th scope="col"><input class="form-control" type="text" id="POB" placeholder="Enter Place of Birth" name="POB" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        </tr>
                                        <tr style="height: 20px;">
                                        <th scope="col"><label for="citizen">Citizen</label></th>
                                        <th scope="col"><input class="form-control" type="text" id="citizen" placeholder="Enter citizen" name="citizen" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        <th scope="col"><label for="religion">Religion</th></label></th>
                                        <th scope="col"><input class="form-control" type="text" id="religion" placeholder="Enter religion" name="religion" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        </tr>
  
                                        <tr >
                                        <th scope="col"><label for="nation">Nation</label></th>
                                        <th scope="col"><input class="form-control" type="text" id="nation" placeholder="Enter nation" name="nation" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        <th scope="col"><label for="marryStatus">Marital Status</th></label></th>
                                        <th scope="col"><input class="form-control" type="text" id="marryStatus" placeholder="Enter marryStatus" name="marryStatus" <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        </tr>

                                        <tr >
                                        <th scope="col"><label for="height">Height</label></th>
                                        <th scope="col"><input class="form-control" type="text" placeholder="Enter height" name="height" maxlength="20" required &nbsp;cm <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        <th scope="col"><label for="weight">Weight</th></label></th>
                                        <th scope="col"><input class="form-control" type="text" placeholder="Enter weight" name="weight" maxlength="20"  required &nbsp;kg <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        </tr>
   
                                        <tr >
                                        <th scope="col"><label for="VLC">Vehicle License (Class)</label></th>
                                        <th scope="col"><input class="form-control" type="text" id="VLC" placeholder="Enter Vehicle License class" name="VLC" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        <th scope="col"><label for="email">Email</th></label></th>
                                        <th scope="col"><input class="form-control" type="text" id="email" placeholder="Enter email" name="email" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        </tr>
 
                                       <tr >
                                       <th scope="col"><label for="address">Address </label></th>
                                       <th colspan="4" scope="col"><input class="form-control" type="text" id="add" placeholder="Enter address" name="add" size="60" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                       </tr>

                                        <tr >
                                        <th scope="col"><label for="tel">Telephone No (Home)</label></th>
                                        <th scope="col"><input class="form-control" type="text" id="tel" placeholder="Enter tel" name="tel" <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        <th scope="col"><label for="HpNo">Telephone No (H/P)</label></th>
                                        <th scope="col"><input class="form-control" type="text" id="HpNo" placeholder="Enter HpNo" name="HpNo" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        </tr>
                                        
                                        <tr >
                                        <th scope="col"><label for="couple">Couple Name (If married) </label></th>
                                        <th colspan="4" scope="col"><input class="form-control" type="text" id="couple" placeholder="Enter couple name" name="couple" <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        </tr>

                                        <tr >
                                        <th scope="col"><label for="mother">Mother's Name </label></th>
                                        <th scope="col"><input class="form-control" type="text" id="mom" placeholder="Enter mom name" name="mom" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        <th scope="col"><label for="momIC">No Identity Card</th></label></th>
                                        <th scope="col"><input class="form-control" type="text" id="momIC" placeholder="Enter momIC" name="momIC" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        </tr>

                                        <tr >
                                        <th scope="col"><label for="father">Father's Name </label></th>
                                        <th scope="col"><input class="form-control" type="text" id="dad" placeholder="Enter dad name" name="dad" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        <th scope="col"><label for="dadIC">No Identity Card</th></label></th>
                                        <th scope="col"><input class="form-control" type="text" id="dadIC" placeholder="Enter dadIC" name="dadIC" required <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
			<div style='float: left;'><input style="border-radius: 8px;" type="submit" class="btn btn-success" value="Insert" name="Insert" <?php echo $row["Applicant_checklist"] ==1? "disabled ":""?> ></div>
				<div style='float:right;'><ul class="pagination">
    <li class="page-item"><a class="page-link" href="i.php">1</a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
    </li>
	
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
