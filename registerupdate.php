<?php
session_start();
include('connection.php');
 $name = $_POST["name"];
 $number = $_POST["number"];
 $email = $_POST["email"];
 $uid = $_SESSION["uid"];
 $password = $_POST["password"];
 if($uid==$email)
 {
     
 
 $result=mysql_query("update  user set name='$name',password='$password',phone='$number' where email='$email'");
 if($result)
 {
	 header("Location:editProfile.php?msg=1");
              
 }  else {
     
 
	   header("Location:editProfile.php?msg=2");
              
 }
 }
 else {
 
	   header("Location:editProfile.php?msg=2");
     
}
