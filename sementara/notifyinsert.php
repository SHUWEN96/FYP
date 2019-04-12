<?php
//insert.php
if(isset($_POST["Notify_Subject"]))
{
 include("connect.php");
 $Notify_Subject = mysqli_real_escape_string($connect, $_POST["Notify_Subject"]);
 $Notify_Msg = mysqli_real_escape_string($connect, $_POST["Notify_Msg"]);
 $query = "
 INSERT INTO comments(Notify_Subject, Notify_Msg)
 VALUES ('$subject', '$Notify_Msg')
 ";
 mysqli_query($connect, $query);
}
?>