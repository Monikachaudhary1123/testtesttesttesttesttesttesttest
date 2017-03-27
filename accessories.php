<?php

//Connect to database
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "acessories";
 
 
 $con = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $con -> error);
 

  
 //Insert record
  $brand= $_POST['brand'];
  $product_code = $_POST['product_code'];
  $price = $_POST['price'];
  $review = $_POST['review'];

  $sql = "INSERT INTO `$brand` (`product_code`, `price`, `review`) VALUES ('$product_code', '$price', '$review')";
  $result = mysqli_query($con,$sql);

  if(!$result) {
      echo("An error occured while inserting into the table!");
  } else {
        echo("Data inserted successfully!");
  }
  
//Close database
  $con -> close();
 
 
?>