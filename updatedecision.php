<?php
$Decision_Id = null;
if ( !empty($_GET['Decision_Id'])) {
	$Decision_Id = $_REQUEST['Decision_Id'];
}


//including the database connection file
include_once("config.php");
 $db = db_connect();
session_start();

if(isset($_POST['update'])) { 


					$Status_1 = $_POST['Status_1'];
					$Status_2 = $_POST['Status_2'];
					$Officer_Name = $_POST['Officer_Name'];
					$date_Officer = $_POST['date_Officer'];
	
	// checking empty fields
    if(empty($Status_1) || empty($Officer_Name) || empty($date_Officer) ) {                
        if(empty($Status_1)) {
            echo "<script>alert('Status 1 field is empty.')</script>";
        }	
        
        if(empty($Officer_Name)) {
            echo "<script>alert('Officer Name field is empty.')</script>";
			
        }
		
		if(empty($date_Officer)) {
            echo "<script>alert('Date officer field is empty.')</script>";
			
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
       $result = mysqli_query($mysqli, "UPDATE decision SET Status_1='$Status_1',Status_2='$Status_2',Officer_Name='$Officer_Name',date_Officer='$date_Officer' WHERE Decision_Id=$Decision_Id");
        //display success message
		echo "<script>alert ('Data update successfully.')</script>";
		echo "<script> location.href='appList.php'</script>";
		exit;
    }
}		
?>


<?php

$link = mysqli_connect("localhost", "root", "");

	mysqli_connect("localhost","root","")or die(mysqli_connect_error());
	mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");
		//selecting data associated with this particular id
	$sql = "SELECT * FROM decision WHERE Decision_Id='$Decision_Id'";
    $result = mysqli_query($link, $sql) or die( mysqli_error($link));
	
	while($res = mysqli_fetch_array($result))
	{
		
		$Status_1 = $res['Status_1'];
        $Status_2 = $res['Status_2'];
	    $Officer_Name = $res['Officer_Name'];
		$date_Officer = $res['date_Officer'];
	   
	
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


<form class="form-inline" action="updatedecision.php?Decision_Id=<?php echo $Decision_Id?>" method="post" enctype="multipart/form-data">
         <div class="content mt-3">
		     <div class="animated">
		         
	                <div class="modal-dialog modal-lg" role="document">
	                     <div class="modal-content">
	                        <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Edit Data</h5>
                               
                            </div>
							<div class="modal-body">
                                <div class="card-body">
								<p>(To be filled by the officer who is in service with government / statutory body / local authority)</p>
								<p> I confirm that the information above is correct. I decided </p>
                                <table class="table" width="25%" border="0">
                                    <tbody>
												 
											<tr>
												  <th scope="col" ><input class="form-control" type="radio" name="Status_1" value="Interview" <?php if (isset($Status_1) && $Status_1=="Interview") echo "checked";?></th>
												 
													 <th scope="col" ><label for="interview">interview</label></th>
													
													
													
													 <th scope="col" ><input class="form-control" type="radio" name="Status_1"  value="Waiting List" <?php if (isset($Status_1) && $Status_1=="Waiting List") echo "checked";?>" ></th>
													
													 <th scope="col" ><label for="waitingList">Waiting List</label></th>
													 
													  <th scope="col" ><input class="form-control" type="radio" name="Status_1"  value="Rejected" <?php if (isset($Status_1) && $Status_1=="Rejected") echo "checked";?></th>
													
													 <th scope="col" ><label for="waitingList">Rejected</label></th>
													
													
													 <th scope="col" ><label for="waitingList"><input class="form-control" type="text" name="Status_2" maxlength="50" size="30" ></label></th>
																							</tr>
									</table>
										<p>for <?php echo $_GET['Applicant_Name'];
										
?></p>
									<table class="table">
																			
										<tbody>
											<tr>
												      <th scope="col" ><label for="Officer_Name">Officer Name</label></th>
													 <th scope="col" ><label for="Officer_Name"><input class="form-control" type="text" name="Officer_Name" value="<?php echo $Officer_Name;?>" size="10" ></label></th> 
													 <th scope="col" ><label for="date_Officer">Date</label></th>
													 <th scope="col" ><input class="form-control" type="date" name="date_Officer" value="" min="1999-01-01" max="2018-12-31" /></label></th> 
											</tr>
											</tbody>
											</table>
											
								</div>
                            </div>
                            <div class="modal-footer">
							<input style="border-radius: 8px;" type="submit" name="update" value="Update" class="btn btn-success" /><a style="border-radius: 8px;"class="btn btn-primary" href="appList.php?Decision_Id=<?php echo $_GET['Decision_Id'] ?>">Back</a>
							
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .animated -->
			
        </div><!-- .content -->
  
       
    
           
</body>
</html>

