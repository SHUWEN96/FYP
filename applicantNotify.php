	<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();

$qlist = "SELECT * FROM decision";
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        
           $user_Ic=$rowlist["user_Ic"];
		   $Applicant_Name=$rowlist["Applicant_Name"];
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
                 <a class="navbar-brand" href="applicant.php"><img src="images/images/uthm.jpeg" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="i.php"> </i>Application Form </a>
                    </li>
					 <li class="active">
                        <a href="JobSearch.php"> </i>Search Job</a>
                    </li>
					 <li class="active">
                        <a href="viewlist.php"> </i>Print Application Form </a>
                    </li>
					 <li class="active">
                        <a href="applicantNotify.php"> </i>Notification</a>
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
                            
                            <li><a href="#">Main Menu</a></li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
     <form class="form-inline" method="post" enctype="multipart/form-data">
         <div class="content mt-3">
		     <div class="animated">
		         
	                <div class="modal-dialog modal-lg" role="document">
	                     <div class="modal-content">
	                        <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Notify Message</h5>
                               
                            </div>
							<div class="modal-body">
                                <div class="card-body">
                                <table class="table" width="25%" border="0">
                                    <tbody>
                                      
									 
										<?php  	  
									
									 $qlist = "SELECT * FROM userlist 
										  INNER JOIN notify ON userlist.user_Ic = notify.user_Ic 
										  WHERE user_id='".$_SESSION['SESS_USER_ID']."'";
										$reslist = $db->query($qlist);
										 $qlist1 = "SELECT * FROM userlist 
										  INNER JOIN notify ON userlist.user_Ic = notify.user_Ic 
										  WHERE user_id='".$_SESSION['SESS_USER_ID']."'";
										$reslist = $db->query($qlist);
														
									$reslist = $db->query($qlist);
									
									 while($rowlist = $reslist->fetch_assoc()) { 
					
											   $user_Ic=$rowlist["user_Ic"];
								
									echo "<tr>";     
									echo "<td style='width:50%' align='justify'>"."<strong>". "Subject : "."</strong>"."<br>"."</td>";
									echo "<td style='width:50%' align='justify' >"."Notify for Interview/Waiting List/Rejected"."<br>"."</td>";
									echo "</tr>"; 
									
									echo "<tr>";     
									echo "<td style='width:50%' align='justify'>"."<strong>". "Dear : "."</strong>"."<br>"."</td>";
									echo "<td style='width:50%' align='justify' >". $rowlist["Applicant_Name"]."<br>"."</td>";
									echo "</tr>"; 
									
									
									echo "<tr>";     
									echo "<td style='width:50%' align='justify'>"."<strong>". "Message : "."</strong>"."<br>"."</td>";
									echo "<td style='width:50%' align='justify' >". $rowlist["message"]."<br>"."</td>";
									echo "</tr>"; 
									
										echo "<tr>";     
									echo "<td style='width:50%' align='justify'>"."<strong>". "Interview Date : "."</strong>"."<br>"."</td>";
									echo "<td style='width:50%' align='justify' >". $rowlist["interview_date"]."<br>"."</td>";
									echo "</tr>"; 
									
								
													
									 }
									 
									?>
										
                                    </tbody>
                                </table>
                                </div>
                            </div>
							<div class="modal-footer">

							<a style="border-radius: 8px;" class="btn btn-primary" href="applicant.php">OK</a>
							
                            </div>	
                        </div>
                    </div>
					</div>
					</div>
                </form>
			

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
