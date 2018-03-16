<?php
session_start();
include('connection.php');
 $owner = $_SESSION["uid"];
 $id = $_GET["id"];
 
 $result=mysql_query("update  books set status=1,takenby='$owner',tdate=now() where id=$id");
 if($result)
 {
	 header("Location:home.php?msg=1");
              
 }
 else
 {
	   header("Location:home.php?msg=2");
              
 }
?>