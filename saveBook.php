<?php

session_start();
include('connection.php');
$owner =$_SESSION["uid"];
 $name =filter_input(INPUT_POST, 'name'); // $_POST["name"];
 $author =filter_input(INPUT_POST, 'author'); // $_POST["author"];
 $amt = filter_input(INPUT_POST, 'amt'); //$_POST["amt"];

 echo $name."  ".$author;
 $imagename=$_FILES["im"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['im']['tmp_name']));
$imagename." ".$imagetmp;

 $result=mysql_query("INSERT INTO books(owner,name,author,amount,status,imgData) VALUES('$owner','$name', '$author',$amt,0,'$imagetmp')");
 if($result)
 {
	 header("Location:uploadBook.php?msg=1");
              
 }
 else
 {
	   header("Location:uploadBook.php?msg=2");
              
 }
?>