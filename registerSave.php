<?php
session_start();
include('connection.php');
 $name = $_POST["name"];
 $number = $_POST["number"];
 $email = $_POST["email"];
 $password = $_POST["password"];
 
 $result=mysql_query("INSERT INTO user(name,phone,email,password) VALUES('$name', '$number', '$email','$password')");
 if($result)
 {
	 header("Location:register.php?msg=1");
              
 }
 else
 {
	   header("Location:register.php?msg=2");
              
 }
?>