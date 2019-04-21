<?php
	
$Education_detail_Id = null;
if ( !empty($_GET['Education_detail_Id'])) {
	$Education_detail_Id = $_REQUEST['Education_detail_Id'];
	
}

//including the database connection file
include '../../Final Year Project/sufee-master/config.php';
$db = db_connect();
session_start();
$link = mysqli_connect("localhost", "root", "");

mysqli_connect("localhost","root","")or die(mysqli_connect_error());
mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");

$query = mysqli_query($link,"Select * from education WHERE Education_detail_Id='$Education_detail_Id'");

$exists = mysqli_num_rows($query);

if($exists > 0)
{  
$data = mysqli_fetch_assoc($query);
$_SESSION['SESS_EDU_ID']= $data['Education_detail_Id'];
$_SESSION['SESS_EDU_TYPE']= $data['Edu_Type'];
}

$result = mysqli_query($mysqli, "SELECT * FROM subject ORDER BY subject_id DESC"); // using mysqli_query instead
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
<?php  	  

 $qlist = "SELECT * FROM subject WHERE Edu_Type='".$_GET['Edu_Type'] ."'";
$reslist = $db->query($qlist);

?>

    <br/><br/>
    <form class="form-inline" method="post" action="AddSub.php"  enctype="multipart/form-data">
         <div class="content mt-3">
		     <div class="animated">
		         
	                <div class="modal-dialog modal-lg" role="document">
	                     <div class="modal-content">
	                        <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Subject</h5> 
                            </div>
							<div class="modal-body">
							 <button style="border-radius: 8px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#smallModal">Add New Data</button>
                                <div class="card-body">
							 
                                <table class="table">
                                    <tbody>

										<tr >
										
											<th scope="col" ><label for="subject">Subject</label></th>
											<th scope="col"><label for="gred">Gred</label></th>
											<th scope="col" ><label for="action">Action</label></th>
  
										</tr>
									
	    <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($rowlist = $reslist->fetch_assoc()) {        
            echo "<tr>";
			if ($rowlist['user_Ic'] == $_SESSION['SESS_NOIC']) {
			if ($rowlist['Edu_Type'] == $_GET['Edu_Type']) {
		    // do something
			echo"<td style='width:30%'>" .$rowlist['subject']."</td>";
	        echo "<td style='width:10%'>".$rowlist['gred']."</td>"; 
 echo "<td style='width:20%'><a href=\"editSub.php?subject_id=$rowlist[subject_id] & Edu_Type=$rowlist[Edu_Type]\">Edit</a> | <a href=\"deleteSub.php?subject_id=$rowlist[subject_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 													 
		    echo "</tr>"; }           
        }
		}
        ?>
	
                                     </tbody>
                                </table>
								</div>
							</div>
						<div class="modal-footer">
							<a style="border-radius: 8px;" class="btn btn-primary" href="education.php">OK</a>
						</div>
                 
				
				<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Add Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
									
																	
									
                                </button>
                            </div>
                            <div class="modal-body">
                               <div class="card-body">
                                <table class="table" width="25%" border="0">
                                    <tbody>
								    <input type="hidden" class="form-control" name="user_Ic" id="disabledInput" type="text" placeholder="<?php echo $_SESSION['SESS_NOIC'] ?>" readonly>
									<tr>
									
									<th scope="col">Education Level</th>
                                             <th scope="col" ><input class="form-control" name="Edu_Type" id="disabledInput" type="text" 
											 placeholder="<?php echo $_GET['Edu_Type'] ?>" value="<?php echo $_GET['Edu_Type'] ?>" readonly></th>
											 
									</tr>
										
                                        <tr>
                                             <th scope="col">Subject</th>
                                             <th scope="col" ><input class="form-control" type="text" name="subject"  /></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">Gred</th>
                                            <th scope="col"><select name="gred" class="form-control" id="gred" name="gred">
                                                                 <option value=""></option>
                                                                 <option value="A+">A+</option>
                                                                 <option value="A">A</option>
                                                                 <option value="A-">A-</option>
                                                                 <option value="B+">B+</option>
                                                                 <option value="B">B</option>
                                                                 <option value="B-">B-</option>
                                                                 <option value="C+">C+</option>
                                                                 <option value="C">C</option>
																 <option value="C-">C-</option>
																 <option value="D">D</option>
																 <option value="E">E</option>
                                                            </select></th>
                                        
                                        </tr>
									
                                    </tbody>
									
                                </table>
                            </div>
                            </div>
                             <div class="modal-footer">
							<input style="border-radius: 8px;" type="submit" class="btn btn-success" value="Add" name="Submit"/>
							<a style="border-radius: 8px;" class="btn btn-primary" href="subject.php?Edu_Type=<?php echo $_GET['Edu_Type'] ?>">Back</a>
							
							
                            </div>
                        </div>
                    </div>
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

