<?php
session_start();
include('connection.php');
 $name = $_SESSION["uid"];
 
 $email = $_POST["email"];
 $message = $_POST["message"];
 
 $result=mysql_query("INSERT INTO message(femail,temail,mess,tdate) VALUES('$name', '$email','$message',now())");
 if($result)
 {
	 header("Location:compose.php?msg=1");
              
 }
 else
 {
	   header("Location:compose.php?msg=2");
              
 }
?>