<?php
$db_host = "us-cdbr-east-06.cleardb.net";
$db_user = "bd89af7da4faac";
$db_pass = "0f0686de";
$db_name = "heroku_524216f6fad8cbf";

$conn = mysqi_connect($db_host, $db_user, $db_pass, $db_name) or die ("DB connection error");
?>