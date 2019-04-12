<?php

$Applicant_Id = null;
if ( !empty($_GET['Applicant_Id'])) {
	$Applicant_Id = $_REQUEST['Applicant_Id'];
}

//including the database connection file
include_once("config.php");
 $db = db_connect();
session_start();
if(isset($_POST['Update'])) { 
       
    $Applicant_Name = $_POST['name'];
$Applicant_Add = $_POST['add'];
$Applicant_Email = $_POST['email'];
$Applicant_NoTel = $_POST['tel'];
$Applicant_Age = $_POST['age'];
$Applicant_gender= $_POST['gender'];
$Applicant_DOB = $_POST['DOB'];
$Applicant_POB = $_POST['POB'];
$Applicant_Citizen = $_POST['citizen'];
$Applicant_Religion = $_POST['religion'];
$Applicant_Nation = $_POST['nation'];
$Applicant_MaritalStatus = $_POST['marryStatus'];
$Applicant_Height = $_POST['height'];
$Applicant_Weight = $_POST['weight'];
$Applicant_NoHP = $_POST['HpNo'];
$Applicant_VLC = $_POST['VLC'];
$Mom_Name = $_POST['mom'];
$Mom_Ic = $_POST['momIC'];
$Dad_Name = $_POST['dad'];
$Dad_Ic = $_POST['dadIC'];
$Spouse_name = $_POST['couple'];
	
	// checking empty fields
    if(empty($Applicant_Name) || empty($Applicant_Add) || empty($Applicant_Email)|| empty($Applicant_NoTel)|| empty($Applicant_Age)|| empty($Applicant_gender) || empty($Applicant_DOB) ||empty($Applicant_POB) ||empty($Applicant_Citizen) ||empty($Applicant_Religion) ||empty($Applicant_Nation) ||empty($Applicant_MaritalStatus) ||empty($Applicant_Height) ||empty($Applicant_Weight) ||empty($Applicant_NoHP) ||empty($Applicant_VLC) ||empty($Mom_Name) ||empty($Mom_Ic) ||empty($Dad_Name) ||empty($Dad_Ic) ||empty($Spouse_name) ) {                
        if(empty($Applicant_Name)) {
            echo "<script>alert('Applicant name field is empty.')</script>";
        }
        
        if(empty($Applicant_Add)) {
            echo "<script>alert('Applicant address field is empty.')</script>";
		}	
    
		
		if(empty($Applicant_Email)) {
            echo "<script>alert('Applicant Email field is empty.')</script>";
			
        }
		
		if(empty($Applicant_NoTel)) {
            echo "<script>alert('Applicant NoTel field is empty.')</script>";
			
        }
		
		if(empty($Applicant_Age)) {
            echo "<script>alert('Applicant Age field is empty.')</script>";
			
        }
		
		if(empty($Applicant_gender)) {
            echo "<script>alert('Applicant gender field is empty.')</script>";
			
        }
		
		   if(empty($Applicant_DOB)) {
            echo "<script>alert('Applicant date of birth field is empty.')</script>";
			
        }
		
		if(empty($Applicant_POB)) {
            echo "<script>alert('Applicant place of birth field is empty.')</script>";
			
        }
		
		if(empty($Applicant_Citizen)) {
            echo "<script>alert('Applicant Citizen field is empty.')</script>";
			
        }
		
		if(empty($Applicant_Religion)) {
            echo "<script>alert('Applicant Religion field is empty.')</script>";
			
        }
		
		if(empty($Applicant_Nation)) {
            echo "<script>alert('Applicant Nation field is empty.')</script>";
			
        }
		
		if(empty($Applicant_MaritalStatus)) {
            echo "<script>alert('Applicant Marital Status field is empty.')</script>";
			
        }
		
		if(empty($Applicant_Height)) {
            echo "<script>alert('Applicant Height field is empty.')</script>";
			
        }
		
		if(empty($Applicant_Weight)) {
            echo "<script>alert('Applicant Weight field is empty.')</script>";
			
        }
		
		   if(empty($Applicant_NoHP)) {
            echo "<script>alert('Applicant No HP field is empty.')</script>";
			
        }
		
		if(empty($Applicant_VLC)) {
            echo "<script>alert('Applicant Vehicle license field is empty.')</script>";
			
        }
		
		if(empty($Mom_Name)) {
            echo "<script>alert('Applicant mom name field is empty.')</script>";
			
        }
		
		if(empty($Mom_IC)) {
            echo "<script>alert('Applicant mom IC field is empty.')</script>";
			
        }
		
		if(empty($Dad_Name)) {
            echo "<script>alert('Applicant dad name field is empty.')</script>";
			
        }
		
		if(empty($Dad_IC)) {
            echo "<script>alert('Applicant dad IC field is empty.')</script>";
			
        }
		
		if(empty($Spouse_Name)) {
            echo "<script>alert('Spouse Name field is empty.')</script>";
			
        }
        
        
        
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
       $result = mysqli_query($mysqli, "UPDATE applicant SET Applicant_Name='$Applicant_Name',Applicant_Add='$Applicant_Add',Applicant_Email='$Applicant_Email',Applicant_NoTel='$Applicant_NoTel',Applicant_Age='$Applicant_Age',Applicant_gender='$Applicant_gender',Applicant_DOB='$Applicant_DOB',
Applicant_POB='$Applicant_POB',Applicant_Citizen='$Applicant_Citizen',Applicant_Religion='$Applicant_Religion',Applicant_Nation='$Applicant_Nation',Applicant_MaritalStatus='$Applicant_MaritalStatus',Applicant_Height='$Applicant_Height',Applicant_Weight='$Applicant_Weight',Applicant_NoHP='$Applicant_NoHP',
Applicant_VLC='$Applicant_VLC',Mom_Name='$Mom_Name',Mom_Ic='$Mom_Ic',Dad_Name='$Dad_Name',Dad_Ic='$Dad_Ic',Spouse_name='$Spouse_name' WHERE Applicant_Id=$Applicant_Id");
        //display success message
        echo "<script>alert ('Data update successfully.')</script>";
       
    }
}		
?>

<?php

$link = mysqli_connect("localhost", "root", "");

mysqli_connect("localhost","root","")or die(mysqli_connect_error());
mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");
	//selecting data associated with this particular id
	$sql = "SELECT * FROM applicant WHERE Applicant_Id=$Applicant_Id";
    $result = mysqli_query($link, $sql) or die( mysqli_error($link));
	
	while($res = mysqli_fetch_array($result))
	{
		$user_Ic = $res['user_Ic'];
		$Applicant_Name = $res['Applicant_Name'];
		$Applicant_Add = $res['Applicant_Add'];
		$Applicant_Email = $res['Applicant_Email'];
		$Applicant_NoTel = $res['Applicant_NoTel'];
		$Applicant_Age = $res['Applicant_Age'];
		$Applicant_gender= $res['Applicant_gender'];
		$Applicant_DOB = $res['Applicant_DOB'];
		$Applicant_POB = $res['Applicant_POB'];
		$Applicant_Citizen = $res['Applicant_Citizen'];
		$Applicant_Religion = $res['Applicant_Religion'];
		$Applicant_Nation = $res['Applicant_Nation'];
		$Applicant_MaritalStatus = $res['Applicant_MaritalStatus'];
		$Applicant_Height = $res['Applicant_Height'];
		$Applicant_Weight = $res['Applicant_Weight'];
		$Applicant_NoHP = $res['Applicant_NoHP'];
		$Applicant_VLC = $res['Applicant_VLC'];
		$Mom_Name = $res['Mom_Name'];
		$Mom_Ic = $res['Mom_Ic'];
		$Dad_Name = $res['Dad_Name'];
		$Dad_Ic = $res['Dad_Ic'];
		$Spouse_name = $res['Spouse_name'];

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
	  INNER JOIN applicant ON userlist.user_Ic = applicant.user_Ic 
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
                            <li class="active">Personal Information</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    <form class="form-inline" action="updatePersonal.php?Applicant_Id=<?php echo $Applicant_Id?>" method="post" enctype="multipart/form-data" >
        <div class="content mt-3">
		
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
							 <i class="mr-2 fa fa-align-justify"></i>
                                <strong class="card-title" style="font-size:px;">1. PERSONAL INFORMATION</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="col"><label for="name">Full Name (Capital Letter)</label></th>
                                            <th scope="col"><input class="form-control" type="text" id="name" value="<?php echo $Applicant_Name;?>" name="name" required></th>
                                             <th scope="col"><label for="user_Ic">No Identity Card</th>
                                             <th scope="col" ><input class="form-control" name="user_Ic" id="disabledInput" type="text" 
											 placeholder="<?php echo $_SESSION['SESS_NOIC'] ?>" readonly></th>
                                       </tr>
                                        <tr>
                                            <th scope="col"><label for="age">Age</label></th>
                                            <th scope="col"><input class="form-control" type="text" id="age" value="<?php echo $Applicant_Age;?>" name="age" required></th>
                                            <th scope="col"><label for="gender">Gender </label></th>
											<th style="width: 120px; height: 20px;">
                                            <select name="gender" class="form-control" value="<?php echo $Applicant_gender;?>" required>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            </select></th>
                                        </tr>
                                        <tr>
                                            <th scope="col"><label for="DOB">Date Of Birth </label></th>
                                            <th scope="col"><input class="form-control" type="date" value="<?php echo $Applicant_DOB;?>" name="DOB" required></th>
                                            <th scope="col"><label for="POB">Place Of Birth </label></th>
                                            <th scope="col"><input class="form-control" type="text" id="POB" value="<?php echo $Applicant_POB;?>" name="POB" required></th>
                                        </tr>
                                        <tr style="height: 20px;">
                                        <th scope="col"><label for="citizen">Citizen</label></th>
                                        <th scope="col"><input class="form-control" type="text" id="citizen" value="<?php echo $Applicant_Citizen;?>" name="citizen" required></th>
                                        <th scope="col"><label for="religion">Religion</th></label></th>
                                        <th scope="col"><input class="form-control" type="text" id="religion" value="<?php echo $Applicant_Religion;?>" name="religion" required></th>
                                        </tr>
  
                                        <tr >
                                        <th scope="col"><label for="nation">Nation</label></th>
                                        <th scope="col"><input class="form-control" type="text" id="nation" value="<?php echo $Applicant_Nation;?>" name="nation" required></th>
                                        <th scope="col"><label for="marryStatus">Marital Status</th></label></th>
                                        <th scope="col"><input class="form-control" type="text" id="marryStatus" value="<?php echo $Applicant_MaritalStatus;?>" name="marryStatus"></th>
                                        </tr>

                                        <tr >
                                        <th scope="col"><label for="height">Height</label></th>
                                        <th scope="col"><input class="form-control" type="text" value="<?php echo $Applicant_Height;?>" name="height" maxlength="20"  required>&nbsp;cm</th>
                                        <th scope="col"><label for="weight">Weight</th></label></th>
                                        <th scope="col"><input class="form-control" type="text" value="<?php echo $Applicant_Weight;?>" name="weight" maxlength="20"  required>&nbsp;kg</th>
                                        </tr>
   
                                        <tr >
                                        <th scope="col"><label for="VLC">Vehicle License (Class)</label></th>
                                        <th scope="col"><input class="form-control" type="text" id="VLC" value="<?php echo $Applicant_VLC;?>" name="VLC" required></th>
                                        <th scope="col"><label for="email">Email</th></label></th>
                                        <th scope="col"><input class="form-control" type="text" id="email" value="<?php echo $Applicant_Email;?>" name="email" required></th>
                                        </tr>
 
                                       <tr >
                                       <th scope="col"><label for="address">Address </label></th>
                                       <th colspan="4" scope="col"><input class="form-control" type="text" id="add" value="<?php echo $Applicant_Add;?>" name="add" size="60" required></th>
                                       </tr>

                                        <tr >
                                        <th scope="col"><label for="tel">Telephone No (Home)</label></th>
                                        <th scope="col"><input class="form-control" type="text" id="tel" name="tel" value="<?php echo $Applicant_NoTel;?>" ></th>
                                        <th scope="col"><label for="HpNo">Telephone No (H/P)</label></th>
                                        <th scope="col"><input class="form-control" type="text" id="HpNo" value="<?php echo $Applicant_NoHP;?>" name="HpNo" required></th>
                                        </tr>
                                        
                                        <tr >
                                        <th scope="col"><label for="couple">Couple Name (If married) </label></th>
                                        <th colspan="4" scope="col"><input class="form-control" type="text" id="couple" value="<?php echo $Spouse_name;?>" name="couple"></th>
                                        </tr>

                                        <tr >
                                        <th scope="col"><label for="mother">Mother's Name </label></th>
                                        <th scope="col"><input class="form-control" type="text" id="mom" value="<?php echo $Mom_Name;?>" name="mom" required></th>
                                        <th scope="col"><label for="momIC">No Identity Card</th></label></th>
                                        <th scope="col"><input class="form-control" type="text" id="momIC" value="<?php echo $Mom_Ic;?>" name="momIC" required></th>
                                        </tr>

                                        <tr >
                                        <th scope="col"><label for="father">Father's Name </label></th>
                                        <th scope="col"><input class="form-control" type="text" id="dad" value="<?php echo $Dad_Name;?>" name="dad" required></th>
                                        <th scope="col"><label for="dadIC">No Identity Card</th></label></th>
                                        <th scope="col"><input class="form-control" type="text" id="dadIC" value="<?php echo $Dad_Ic;?>" name="dadIC" required></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
			<input style="border-radius: 8px;" type="submit" class="btn btn-info" value="Update" name="Update"/>
			<div style='float: right;'>
			<a style="border-radius: 8px;" class="btn btn-primary" href="1.php">Back</a>
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
