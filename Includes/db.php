<?php
// Assigning values to the individual keys in the array $db
  $db['db_host'] = "localhost";
  $db['db_user'] = "root";
  $db['db_pass'] = "";
  $db['db_name'] = "book_store";
 
//looping through the array $db and converting its key into UpperCase
  foreach($db as $key => $value){
      //converting every key and its value into a constant.
    define(strtoupper($key),$value);
      
  }
    $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//  if($connection){
//      echo"<script>alert('Connection Successful')</script>";
//  }else{
//      die("Connection not successful" . mysqli_error());
//  }

?>