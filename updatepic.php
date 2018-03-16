<?php

session_start();
include('connection.php');
$uid=$_SESSION["uid"];
//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['im']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="update user set image='$imagetmp' where email='$uid'";

mysql_query($insert_image);

header("Location:home.php");
?>