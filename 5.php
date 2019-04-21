<?php
//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();
 $Training_Id = null;
    if ( !empty($_GET['Training_Id'])) {
        $Training_Id = $_REQUEST['Training_Id'];
    }
	
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM work_experience ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM training ORDER BY Training_Id DESC"); // using mysqli_query instead
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
									<a href="verify.php"> </i>Verification</a>
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
						  INNER JOIN training ON userlist.user_Ic = training.user_Ic 
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
                            <li class="active">Training Record</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    <form class="form-inline" action="AddTraining.php?Training_Id=<?php echo $Training_Id?>" method="post" enctype="multipart/form-data" >
         <div class="content mt-3">
            <div class="animated">

                <div class="card">
                    <div class="card-header">
                        <i class="mr-2 fa fa-align-justify"></i>
                        <strong class="card-title" style="font-size:px;">5. TRAINING RECORD</strong>
							<?php
								
									echo "<td ><a href=\"verifyTrain.php?Training_Id=$row[Training_Id]\">Verify</a> "
								
								?>	
                    </div>
                    <div class="card-body">
							   <button style="border-radius: 8px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#mediumModal" <?php echo $row["Training_checklist"] ==1? "disabled ":""?>>Add New Data</button>
							  <br/>
							  <br/>
                                <table class="table">
                                    <tbody>
                                        <tr style="height: 20px;">
  
  <th scope="col"><label for="Training_Name">Course Name</label></th>
  <th scope="col"><label for="Training_date_start">Start Date</label></th>
  <th scope="col"><label for="Training_date_end">End Date</label></th>
  <th scope="col"><label for="Training_Organizer">Organizer</label></th>
  <th scope="col"><label for="Training_Place">Place</label></th>
  <th scope="col"><label for="Training_Result">Results</label></th>
  <th scope="col"><label for="action">Action</label></th>
</tr>

        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($rowlist = $reslist2->fetch_assoc()) {        
            echo "<tr>";
			
            echo "<td style='width:20%' align='center'>".$rowlist['Training_Name']."</td>";
            echo "<td style='width:10%' align='center'>".$rowlist['Training_date_start']."</td>";
            echo "<td style='width:10%' align='center'>".$rowlist['Training_date_end']."</td>";    
			echo "<td style='width:20%' align='center'>".$rowlist['Training_Organizer']."</td>";
            echo "<td style='width:10%' align='center'>".$rowlist['Training_Place']."</td>";
            echo "<td style='width:10%' align='center'>".$rowlist['Training_Result']."</td>";
            echo "<td style='width:20%' align='center'><a href=\"editTraining.php?Training_Id=$rowlist[Training_Id]\">Edit</a> | <a href=\"deleteTraining.php?Training_Id=$rowlist[Training_Id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> </td>";      
        }
        ?>
       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                
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
                                <table class="table"  border="0">
								<input type="hidden" class="form-control" name="user_Ic" id="disabledInput" type="text" placeholder="<?php echo $_SESSION['SESS_NOIC'] ?>" readonly>
                                    <tbody>
										
                                        <tr>
                                             <th scope="col">Course Name</th>
                                             <th scope="col" ><input class="form-control" type="text" name="Training_Name"  required></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">Start Date</th>
                                             <th scope="col" ><input class="form-control" type="date" name="Training_date_start" required></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">End Date</th>
                                             <th scope="col" ><input class="form-control" type="date" name="Training_date_end" required></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">Organizer</th>
                                             <th scope="col" ><input class="form-control" type="text" name="Training_Organizer" required></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">Place</th>
                                             <th scope="col" ><input class="form-control" type="text" name="Training_Place" required></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">Results</th>
                                             <th scope="col" ><input class="form-control" type="text" name="Training_Result" required></th>
                                        
                                        </tr>
									
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            <div class="modal-footer">
							<input style="border-radius: 8px;" type="submit" class="btn btn-success" value="Add" name="Submit"/>
							<a style="border-radius: 8px;" class="btn btn-primary" href="5.php">Back</a><br/><br/>
							
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
			
				<div style='float:right;'><nav aria-label="...">
  <ul class="pagination">
   <li class="page-item"><a class="page-link" href="i.php">1</a></li>
    <li class="page-item"><a class="page-link" href="1.php">2</a></li>
	<li class="page-item"><a class="page-link" href="education.php">3</a></li>
	 <li class="page-item"><a class="page-link" href="cocuriculum.php">4</a></li>
	 <li class="page-item"><a class="page-link" href="4.php">5</a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">
        6
        <span class="sr-only">(current)</span>
      </span>
    </li>
	 
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
