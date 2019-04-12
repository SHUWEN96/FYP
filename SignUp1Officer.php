
<?php
     $link = mysqli_connect("localhost", "root", "");
     if($_SERVER["REQUEST_METHOD"]=="POST")
	 {
     
     $name = mysqli_real_escape_string($link,$_POST['name']);
	 $user_Ic = mysqli_real_escape_string($link,$_POST['user_Ic']);
     $emailAdd = mysqli_real_escape_string($link,$_POST['emailAdd']);
    $password = mysqli_real_escape_string ($link,(md5($_POST['password'])));
     $confirmpassword = mysqli_real_escape_string ($link,(md5($_POST['confirmpassword'])));
	 $selected_val = mysqli_real_escape_string ($link,$_POST['usertype']);
     $bool = true;

     mysqli_connect("localhost","root","")or die(mysqli_connect_error());
     mysqli_select_db($link,"final_year_project") or die("Cannot connect to database");
     $query = mysqli_query($link,"Select * from userlist");
	 
     while($row = mysqli_fetch_array($query))
    {
         $table_userlist = $row['name'];
         if ($name == $table_userlist)
        {
	       $bool = false;
	       Print '<script>alert("(username has been taken!");</script>';
	       Print '<script>window.location.assign("registerOff.php");</script>';
        }
	}
	
    if($bool)
    {
	    if($password == $confirmpassword)
	    {
		$encrypted_password=md5($password);
		mysqli_query($link,"INSERT INTO userlist (name, user_Ic, emailAdd, password, confirmpassword, selected_val) VALUES ('$name','$user_Ic','$emailAdd','$password','$confirmpassword','$selected_val')");
		Print '<script>alert("Successfuly Registered!");</script>';
		Print '<script>window.location.assign("registerOff.php");</script>';
	    }
	else
	{
		Print '<script>alert("Password and Confirm Password are different!");</script>';
		Print '<script>window.location.assign("registerOff.php");</script>';
	}
}}?>



