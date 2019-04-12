
 <?php

if(isset($_POST["submit"])){}     //VE: didnt include {}
/* Get input from form using post method*/
$secondary1_school = $_POST['school2'];
$secondary1_year = $_POST['year2'];
$secondary1_level = $_POST['level2'];

if(isset($_POST["subject2"])){		//VE: subject & gred value is not compulsory. Need to validate the value with isset
	$subject2 = $_POST['subject2'];	//VE: also, both value are array.
}
if(isset($_POST["gred2"])){
	$gred2 = $_POST['gred2'];
}

/*Prevent sql injection*/
	$secondary1_school = stripcslashes($secondary1_school);
	$secondary1_year = stripcslashes($secondary1_year);
	$secondary1_level = stripcslashes($secondary1_level);
	//$subject1 = stripcslashes($subject1);	
	//$gred1 = stripcslashes($gred1);

	// Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
    
	//VE: depends on your value to insert into db. either want it in array to loop, or insert 1 time.
	if(isset($_POST["subject2"])){
		foreach (array_combine($_POST['subject2'], $_POST['gred2']) as $nsub2 => $ngred2) {
			$sql = "INSERT INTO secondary1(secondary1_school,secondary1_year,secondary1_level,subject2,gred2)VALUES('$secondary1_school','$secondary1_year','$secondary1_level','$nsub2','$ngred2')";
			$result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
		}
	}else{
		$sql = "INSERT INTO secondary1(secondary1_school,secondary1_year,secondary1_level)VALUES('$secondary1_school','$secondary1_year','$secondary1_level')";
		$result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
	}
    


// if successfully insert data into database, displays message "Successful". 
if($result)
{ 
Print '<script>alert("Insert Successfully");</script>';
Print '<script>window.location.assign("c.php");</script>';
} 
else { 
echo "ERROR"; } 
?>
