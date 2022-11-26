<?php
echo "Hello World\r\n";
$conn = $conn = pg_connect("host=ec2-34-235-198-25.compute-1.amazonaws.com  
                            port=5432 
                            dbname=d438kslsstlh9v 
                            user=ikovqwtdqjkzap
                            password=8d7d901015587862c8e4ca6f15e3ab3d91faea63fdb994e0045470b2c8f40981")
if (!$conn)
{
    echo "Connection Failed\r\n";
}
else {
    echo "Connection Good\r\n";
}
?>