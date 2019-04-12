
 
 <?php

if(isset($_POST["submit"])){}     //VE: didnt include {}
/* Get input from form using post method*/
$secondary_school = $_POST['school1'];
$secondary_year = $_POST['year1'];
$secondary_level = $_POST['level1'];

if(isset($_POST["subject1"])){		//VE: subject & gred value is not compulsory. Need to validate the value with isset
	$subject1 = $_POST['subject1'];	//VE: also, both value are array.
}
if(isset($_POST["gred1"])){
	$gred1 = $_POST['gred1'];
}

/*Prevent sql injection*/
	$secondary_school = stripcslashes($secondary_school);
	$secondary_year = stripcslashes($secondary_year);
	$secondary_level = stripcslashes($secondary_level);
	//$subject1 = stripcslashes($subject1);	
	//$gred1 = stripcslashes($gred1);

	// Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
    
	//VE: depends on your value to insert into db. either want it in array to loop, or insert 1 time.
	if(isset($_POST["subject1"])){
		foreach (array_combine($_POST['subject1'], $_POST['gred1']) as $nsub1 => $ngred1) {
			$sql = "INSERT INTO secondary(secondary_school,secondary_year,secondary_level,subject1,gred1)VALUES('$secondary_school','$secondary_year','$secondary_level','$nsub1','$ngred1')";
			$result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
		}
	}else{
		$sql = "INSERT INTO secondary(secondary_school,secondary_year,secondary_level)VALUES('$secondary_school','$secondary_year','$secondary_level')";
		$result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
	}
    


// if successfully insert data into database, displays message "Successful". 
if($result)
{ 
Print '<script>alert("Insert Successfully");</script>';
Print '<script>window.location.assign("b.php");</script>';
} 
else { 
echo "ERROR"; } 
?>
