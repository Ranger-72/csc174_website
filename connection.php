<?php
// database credentials
$db_host = "us-cdbr-east-06.cleardb.net";
$db_username = "bd89af7da4faac";
$db_password = "0f0686de";
$db_name = "heroku_524216f6fad8cbf";

// create connection
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name) 

// check if connection is successful
if (!conn){
  die ("Database connection error:" . mysqli_connect_error());
}
?>