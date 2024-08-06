<?php

//This php file is entirely used for connecting with the database
// Create connection
/* $con=mysqli_connect("p3nlmysql107plsk.secureserver.net","nowlink","","richiesoft_nowlink");

  // Check connection
  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); exit;
  } */
$DomainNameOfHost = "http://0bc.xyz/";
$con=mysqli_connect("50.62.209.147:3306","N8d9pla92","xgAs2?45","ZERO");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}
?>