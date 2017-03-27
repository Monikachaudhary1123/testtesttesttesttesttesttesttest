<?php
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "acessories";
 
 
 $con = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $con -> error);
 
 
 return $conn;
 }
 
function CloseCon($con)
 {
 $con -> close();
 
 }
   
?>