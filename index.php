<?php
$conn = pg_connect(getenv("postgres://ikovqwtdqjkzap:8d7d901015587862c8e4ca6f15e3ab3d91faea63fdb994e0045470b2c8f40981@ec2-34-235-198-25.compute-1.amazonaws.com:5432/d438kslsstlh9v"));
{
    echo "Connection Failed";
}
else {
    echo "Connection Good";
}
?>