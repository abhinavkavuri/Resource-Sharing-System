<?php

if(!mysql_connect("localhost","root","tiger")){
  die('oops connection problem! -->'.mysql_error());}
if(!mysql_select_db("getbooks")){
    die('oops database selection problem! --> '.mysql_error());}
?>