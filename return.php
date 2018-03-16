<?php
session_start();
include('connection.php');
 $owner = $_SESSION["uid"];
 $id = $_GET["id"];
 
 $result=mysql_query("update  books set status=0,takenby='',tdate='' where id=$id");
 if($result)
 {
	 header("Location:mybooks.php?msg=1");
              
 }
 else
 {
	   header("Location:mybooks.php?msg=2");
              
 }
?>