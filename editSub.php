
<?php

$subject_id = null;
if ( !empty($_GET['subject_id'])) {
	$subject_id = $_REQUEST['subject_id'];
}

//including the database connection file
include_once("config.php");
 $db = db_connect();
session_start();
if(isset($_POST['update'])) {    
    $subject = $_POST['subject'];
    $gred = $_POST['gred'];
	$Edu_Type = $_POST["Edu_Type"];
	
	// checking empty fields
    if(empty($subject) || empty($gred) ) {                
        if(empty($subject)) {
            echo "<script>alert('Subject field is empty.')</script>";
        }
        
        if(empty($gred)) {
            echo "<script>alert('Gred field is empty.')</script>";
		}	
        
       
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
       $result = mysqli_query($mysqli, "UPDATE subject SET subject='$subject',gred='$gred' WHERE subject_id=$subject_id");
        //display success message
        echo "<script>alert ('Data edit successfully.')</script>";
        echo "<br/><a href='subject.php?Edu_Type=".$Edu_Type."'>View Result</a>";
    }
}		
?>

<?php

	//selecting data associated with this particular id
	$result = mysqli_query($mysqli, "SELECT * FROM subject WHERE subject_id=$subject_id");
	
	while($res = mysqli_fetch_array($result))
	{
		$Edu_Type = $res['Edu_Type'];
		$subject = $res['subject'];
        $gred = $res['gred'];
	   
		
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
    <form class="form-inline" method="post" action="editSub.php?subject_id=<?php echo $subject_id?> & Edu_Type=<?php echo $Edu_Type?>" enctype="multipart/form-data">
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
									<input type="hidden" class="form-control" name="user_Ic" id="disabledInput" type="text" placeholder="<?php echo $_SESSION['SESS_NOIC'] ?>" readonly>
									<tr>
									
									<th scope="col">Education Level</th>
                                             <th scope="col" ><input class="form-control" name="Edu_Type" id="disabledInput" type="text" 
											 placeholder="<?php echo $_GET['Edu_Type'] ?>" value="<?php echo $_GET['Edu_Type'] ?>" readonly></th>
											 
									</tr>
									<tr>
                                             <th scope="col">Subject</th>
                                             <th scope="col" ><input class="form-control" type="text" name="subject" value="<?php echo $subject;?>"></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">Gred</th>
                                            <th scope="col"><select name="gred" class="form-control" id="gred" name="gred" value="<?php echo $gred;?>">
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
							<input style="border-radius: 8px;" type="submit" name="update" value="Update" class="btn btn-success" /><a style="border-radius: 8px;" class="btn btn-primary" href="subject.php?Edu_Type=<?php echo $_GET['Edu_Type'] ?>">Back</a>
							
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .animated -->
			
        </div><!-- .content -->
  
       
    
           
</body>
</html>

