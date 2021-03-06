
<?php
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();

session_start();

$connect = mysqli_connect("localhost", "root", "", "final_year_project");
$query = 'SELECT * FROM report';


$result = mysqli_query($connect, $query);


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

<style type="text/css" media="print">
   .no-print { display: none; }
</style>
	
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Job Postion', 'Interview','Waiting List','Rejected'],
		<?php
        while($row = mysqli_fetch_array($result))
{
  echo "['".$row['app_post1']."', ".$row['Interview'].",".$row['WaitingList'].",".$row['Rejected']."],";   
}
?>
      ]);
		
		var options = {
        width: 1150,
        height: 500,
        legend: { position: 'top', maxLines: 3 },
          chart: { title: 'Applicant Status',
                   subtitle: 'Total Applicant Applied at UTHM Batu Pahat' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'bottom', label: 'Total Applicant'} // Top x-axis.
            }
          },
        bar: { groupWidth: '50%' },
        isStacked: true
      };
	  
	     var options_stacked = {
          isStacked: true,
          height: 300,
          legend: {position: 'top', maxLines: 3},
          hAxis: {minValue: 0}
        };
    
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</head>
<body>


     <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                 <a class="navbar-brand" href="manager.php"><img src="images/images/uthm.jpeg" alt="Logo"></a>
            </div>
			<div class="no-print">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="registerOff.php"> </i>Officer Registration </a>
                    </li>
					 <li class="active">
                        <a href="finallist.php"> </i>Final List Applicant</a>
                    </li>
					 <li class="active">
                        <a href="report.php"> </i>Generate Report</a>
                    </li>
					 
					
                </ul>
            </div><!-- /.navbar-collapse -->
			</div>
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
    
        <!-- Header-->
		<div class="no-print">
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
                            
                          <li class="active">Generate Report</li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		</div>
		
   <form class="form-inline" action="reporttotal.php" name="listForm" method="post" enctype="multipart/form-data">
         <div class="content mt-3">
            <div class="animated">

                <div class="card">
                    <div class="card-header">
                        <i class="mr-2 fa fa-align-justify"></i>
                        <strong class="card-title" style="font-size:px;">GENERATE REPORT</strong>
								
                    </div>
                    <div class="card-body">
							  <table class="table">
                                    <tbody>
									<tr >
									 
									  <th scope="col" ><label for="app_post1">Job position</label></th>
									  <th scope="col" ><label for="Interview">Interview</label></th>
									  <th scope="col" ><label for="WaitingList">Waiting List</label></th>
									  <th scope="col" ><label for="Rejected">Rejected</label></th>
									  <th scope="col" ><label for="total">Total Applicant</label></th>
									 
									</tr>
									       	 
											<?php 
											 $qlist = "SELECT * FROM report ORDER BY Report_Id DESC";
						                     $reslist = $db->query($qlist);
											//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
											while($rowlist = $reslist->fetch_assoc()) {        
												echo "<tr>";
												
												echo "<td style='width:20%' align='justify'>".$rowlist['app_post1']."</td>";
												echo "<td style='width:20%' align='center'>".$rowlist['Interview']."</td>";
												echo "<td style='width:20%' align='center'>".$rowlist['WaitingList']."</td>";
												echo "<td style='width:20%' align='center'>".$rowlist['Rejected']."</td>";
												echo "<td style='width:20%' align='center'>".$rowlist['total']."</td>";
												 
											}
											?>
                                    </tbody>
                                </table>
								</br>
								<p align="center"><strong>Bar Chart</strong></p>
								 <div class="card-header">
							<div id="top_x_div" ></div>
							</br>
							</br>
							<div class="no-print">
							<div class="modal-footer">
							<div style='float:left'>
							  <input type="submit" style="border-radius: 12px;" class="btn btn-success" value="Update" name="Submit" />
								</div>
							<div style='float:right'>
							 <input type="button" style="border-radius: 12px;" class="btn btn-primary" value="Generate Report" onclick="window.print()" /> 
								</div>
								</div>
								</div>
                            </div>
                          </div>
						</div>
					</div><!-- .animated -->
				 <br>
    </div><!-- /#right-panel -->
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

