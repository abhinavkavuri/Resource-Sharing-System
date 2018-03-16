<?php
session_start();
include('connection.php');
$uid = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT * FROM user where email='".$uid."' and password='".$password."'";
if($result = mysql_query($sql))
{

                       if ($row = mysql_fetch_assoc($result)) {
    
        $_SESSION["uid"] =$uid;
        $_SESSION["name"]=$row["name"];
        $_SESSION["imgData"]=$row["imgData"];
        header("Location:home.php");
        
        }
 else {
       header("Location:login.php?msg=1");
 }
                       }    
	
?>              
    