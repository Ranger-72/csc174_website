<?php
// database credentials
$db_host = "us-cdbr-east-06.cleardb.net";
$db_username = "bd89af7da4faac";
$db_password = "0f0686de";
$db_name = "heroku_524216f6fad8cbf";

// create connection and check if connection is successful
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die ("DB connection error");
?>