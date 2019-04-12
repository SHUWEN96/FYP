
 <?php

if(isset($_POST["submit"])){}     //VE: didnt include {}
/* Get input from form using post method*/
$secondary2_school = $_POST['school3'];
$secondary2_year = $_POST['year3'];
$secondary2_level = $_POST['level3'];

if(isset($_POST["subject3"])){		//VE: subject & gred value is not compulsory. Need to validate the value with isset
	$subject3 = $_POST['subject3'];	//VE: also, both value are array.
}
if(isset($_POST["gred3"])){
	$gred3 = $_POST['gred3'];
}

/*Prevent sql injection*/
	$secondary2_school = stripcslashes($secondary2_school);
	$secondary2_year = stripcslashes($secondary2_year);
	$secondary2_level = stripcslashes($secondary2_level);
	//$subject1 = stripcslashes($subject1);	
	//$gred1 = stripcslashes($gred1);

	// Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "final_year_project")or die("cannot select DB");
    
	//VE: depends on your value to insert into db. either want it in array to loop, or insert 1 time.
	if(isset($_POST["subject3"])){
		foreach (array_combine($_POST['subject3'], $_POST['gred3']) as $nsub3 => $ngred3) {
			$sql = "INSERT INTO secondary2(secondary2_school,secondary2_year,secondary2_level,subject3,gred3)VALUES('$secondary2_school','$secondary2_year','$secondary2_level','$nsub3','$ngred3')";
			$result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
		}
	}else{
		$sql = "INSERT INTO secondary2(secondary2_school,secondary2_year,secondary2_level)VALUES('$secondary2_school','$secondary2_year','$secondary2_level')";
		$result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
	}
    


// if successfully insert data into database, displays message "Successful". 
if($result)
{ 
Print '<script>alert("Insert Successfully");</script>';
Print '<script>window.location.assign("d.php");</script>';
} 
else { 
echo "ERROR"; } 
?>
