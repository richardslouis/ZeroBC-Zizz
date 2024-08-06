<?php

//This php file is entirely used for connecting with the database
// Create connection
/* $con=mysqli_connect("p3nlmysql107plsk.secureserver.net","nowlink","","richiesoft_nowlink");

  // Check connection
  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); exit;
  } */
$DomainNameOfHost = "https://zizz.cloud/";
$con=mysqli_connect("50.62.209.147:3306","UD8gd7H9p","Qhtc80%5","ZIZZ");
//$con=mysqli_connect("localhost","root","","ABC");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}
?>