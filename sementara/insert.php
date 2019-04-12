

 
 <?php

if(isset($_POST["Insert"])){ }    //VE: didnt include {}
/* Get input from form using post method*/
$school = $_POST['school'];
$year = $_POST['year'];
$level = $_POST['level'];
$type_id = $_POST['edu'];


if(isset($_POST["subject"])){		//VE: subject & gred value is not compulsory. Need to validate the value with isset
	$subject = $_POST['subject'];	//VE: also, both value are array.
}
if(isset($_POST["gred"])){
	$gred = $_POST['gred'];
}

/*Prevent sql injection*/
	$school = stripcslashes($school);
	$year = stripcslashes($year);
	$level = stripcslashes($level);
	

	// Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
    
	//VE: depends on your value to insert into db. either want it in array to loop, or insert 1 time.
	if(isset($_POST["subject"])){
		foreach (array_combine($_POST['subject'], $_POST['gred']) as $nsub => $ngred) {
			// $sql = "SELECT type_id FROM subject";
			$sql = "INSERT INTO subject(type_id,subject,gred)VALUES('$type_id','$nsub','$ngred')";
			$result = mysqli_multi_query($link, $sql)or die("Failed to query database".mysqli_error($link));
			
			//$sql2 = "SELECT subject_id FROM subject INNER JOIN education ON education.subject_id = subject.subject_id";-->
		echo $sql2 = "INSERT INTO education(subject_id,school, year, level) VALUES ('$subject_id','$school','$year','$level')";
		//$result2 = mysqli_multi_query($link, $sql2)or die("Failed to query database".mysqli_error($link));
			
		}
	}else{
		
		echo 'fail';
		
	}
    
// if successfully insert data into database, displays message "Successful". 
$result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
$message = "Insert Successfully.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> location.href='a.php'; </script>";
		exit;
?>
