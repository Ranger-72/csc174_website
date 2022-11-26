<html>
    <head>
        <title>Madrigal Employee DB</title>
    </head>
    <body>
    <table>
       <tr>
        <th> WID </th>
        <th> Location </th>
       </tr>
       <?php
         $conn = pg_connect("host = ec2-34-235-198-25.compute-1.amazonaws.com  
         port = 5432 
         dbname = d438kslsstlh9v 
         user = ikovqwtdqjkzap
         password = 8d7d901015587862c8e4ca6f15e3ab3d91faea63fdb994e0045470b2c8f40981")

         if (!$conn) {
            echo "An error occurred.\n";
          }
          else{
            echo "Good\n";
          }

       ?>
    <table>
    </body>
</html>