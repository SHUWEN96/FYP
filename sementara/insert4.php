
 <?php
//insert.php;

if(isset($_POST["uni_level"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=final_year_project", "root", "");

 for($count = 0; $count < count($_POST["uni_level"]); $count++)
 {  
  $query = "INSERT INTO university 
  ( uni_level, uni_institution, uni_branch, uni_status, uni_date, uni_specialize, uni_cgpa) 
  VALUES (:uni_level, :uni_institution, :uni_branch, :uni_status, :uni_date, :uni_specialize, :uni_cgpa)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    
    ':uni_level'  => $_POST["uni_level"][$count], 
    ':uni_institution' => $_POST["uni_institution"][$count], 
    ':uni_branch'  => $_POST["uni_branch"][$count],
	':uni_status'  => $_POST["uni_status"][$count],
	':uni_date'  => $_POST["uni_date"][$count],
	':uni_specialize'  => $_POST["uni_specialize"][$count],
	':uni_cgpa'  => $_POST["uni_cgpa"][$count]
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
 echo 'Insert Successfully';
 }
}
?>

