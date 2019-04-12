
<?php

$user_id = null;
if ( !empty($_GET['user_id'])) {
	$user_id = $_REQUEST['user_id'];
}

//including the database connection file
include_once("config.php");
 $db = db_connect();
session_start();
if(isset($_POST['update'])) {    
  
	$name = $_POST['name'];
    $user_Ic = $_POST['user_Ic'];
    $emailAdd = $_POST['emailAdd'];
        
    // checking empty fields
    if(empty($name) || empty($user_Ic) || empty($emailAdd)) {                
        if(empty($name)) {
            echo "<script>alert('Name field is empty.')</script>";
        }
        
        if(empty($user_Ic)) {
            echo "<script>alert('Ic Number field is empty.')</script>";
		}	
        
        if(empty($emailAdd)) {
            echo "<script>alert('Email Address field is empty.')</script>";
			
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
       $result = mysqli_query($mysqli, "UPDATE userlist SET name='$name',user_Ic='$user_Ic',emailAdd='$emailAdd' WHERE user_id=$user_id");
        //display success message
        echo "<script>alert ('Data edit successfully.')</script>";
        echo "<br/><a href='registerOff.php'>View Result</a>";
    }
}
?>
<?php

	//selecting data associated with this particular id
	$result = mysqli_query($mysqli, "SELECT * FROM userlist WHERE user_id=$user_id");
	
	while($res = mysqli_fetch_array($result))
	{
		$name = $res['name'];
		$user_Ic = $res['user_Ic'];
		$emailAdd = $res['emailAdd'];
	
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
    <br/><br/>
    <form class="form-inline" method="post" action="editOff.php?user_id=<?php echo $user_id?>" enctype="multipart/form-data">
         <div class="content mt-3">
		     <div class="animated">
		         
	                <div class="modal-dialog modal-lg" role="document">
	                     <div class="modal-content">
	                        <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Edit Data</h5>
                               
                            </div>
							<div class="modal-body">
                                <div class="card-body">
                                <table class="table" width="25%" border="0">
                                    <tbody>
										
										<tr>
                                             <th scope="col">Name</th>
                                             <th scope="col" ><input class="form-control" type="text" name="name" value="<?php echo $name;?>" required> </th>
                                        </tr>
										<tr>
                                             <th scope="col">IC Number</th>
                                             <th scope="col" ><input class="form-control" type="text" name="user_Ic"value="<?php echo $user_Ic;?>"required></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">Email address</th>
                                             <th scope="col" ><input class="form-control" type="text" name="emailAdd"value="<?php echo $emailAdd;?>"required></th>
                                        
                                        </tr>
										
										
													</tbody>
                                </table>
                                </div>
                            </div>
                            <div class="modal-footer">
							<input style="border-radius: 8px;" type="submit" name="update" value="Update" class="btn btn-success" /><a style="border-radius: 8px;" class="btn btn-primary" href="registerOff.php">Back</a>
							
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .animated -->
			
        </div><!-- .content -->
  
       
    
           
</body>
</html>