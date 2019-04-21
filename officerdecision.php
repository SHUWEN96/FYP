			<?php
			//including the database connection file
					include_once("config.php");
					$db = db_connect();
					session_start();

$Applicant_Id = null;
if ( !empty($_GET['Applicant_Id'])) {
	$Applicant_Id = $_REQUEST['Applicant_Id'];
}
$_SESSION['SESS_APPNAME'] = $_GET['Applicant_Name'];

$Choose_Position_Id = null;
if ( !empty($_GET['Choose_Position_Id'])) {
	$Choose_Position_Id = $_REQUEST['Choose_Position_Id'];
}
$_SESSION['SESS_POST'] = $_GET['app_post1'];
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
				
                <a class="navbar-brand" href="officer.php"><img src="images/images/uthm.jpeg" alt="Logo"></a>
               
            </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="appList.php"> </i>Applicant List </a>
                    </li>
					 <li class="active">
                        <a href="JobRequirement.php"> </i>Job Requirement</a>
                    </li>
					  <li class="active">
                        <a href="shortlist.php"> </i>Short List Applicant </a>
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
                            
                            <li><a href="#">Applicant List</a></li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    <form class="form-inline"  action="officerdecisionInsert.php" method="post" enctype="multipart/form-data" >
         <div class="content mt-3">
            <div class="animated">

                <div class="card">
                    <div class="card-header">
                        <i class="mr-2 fa fa-align-justify"></i>
                        <strong class="card-title" style="font-size:px;">8. OFFICER DECISION</strong>
						
                    </div>
                    <div class="card-body">
							
							  <p>(To be filled by the officer who is in service with government / statutory body / local authority)</p>
								<p> I confirm that the information above is correct. I decided </p>
                                <table class="table">
                                    <tbody>
												
												 
											<tr>
												  <th scope="col" ><input class="form-control" type="radio" name="Status_1" value="Interview" <?php if (isset($Status_1) && $Status_1=="Interview") echo "checked";?></th>
												 
													 <th scope="col" ><label for="interview">interview</label></th>
													
													
													
													 <th scope="col" ><input class="form-control" type="radio" name="Status_1"  value="Waiting List" <?php if (isset($Status_1) && $Status_1=="Waiting List") echo "checked";?>" ></th>
													
													 <th scope="col" ><label for="waitingList">Waiting List</label></th>
													 
													  <th scope="col" ><input class="form-control" type="radio" name="Status_1"  value="Rejected" <?php if (isset($Status_1) && $Status_1=="Rejected") echo "checked";?></th>
													
													 <th scope="col" ><label for="Rejected">Rejected</label></th>
													
													
													 <th scope="col" ><label for="waitingList"><input class="form-control" type="text" name="Status_2" maxlength="50" size="30" ></label></th>
																							</tr>
									</table>
										<p>for <?php echo $_SESSION['SESS_APPNAME']; ?> with <?php echo $_SESSION['SESS_POST']; ?></p>

										
									<table class="table">
																			
										<tbody>
											<tr>
												      <th scope="col" ><label for="Officer_Name">Officer Name</label></th>
													 <th scope="col" ><label for="Officer_Name"><input class="form-control" type="text" name="Officer_Name" size="10" ></label></th> 
													 <th scope="col" ><label for="date_Officer">Date</label></th>
													 <th scope="col" ><input class="form-control" type="date" name="date_Officer" value="" min="1999-01-01" max="2018-12-31"  /></label></th> 
											</tr>
											</tbody>
                                </table>
                            </div>
							
                        </div>
                 
				<input style="border-radius: 8px;" type="submit" class="btn btn-success" value="Insert" name="Insert" />
							<div style="float:right">
							<a style="border-radius: 8px;" class="btn btn-primary" href='javascript:history.back(1);'>Done</a>
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
