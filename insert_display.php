<?php 
 // start connection to DB
 include_once("connection.php");

 // obtain and set user input (WID) and set fixed location values  
 $wID = mysqli_real_escape_string($conn, $_POST['WID']);
 $location = 'Sacramento';
 
 // create and initailize prepared statement
 $sql = "INSERT INTO warehouse (warehouseID, location) VALUES (?,?);";
 $stmt = mysqli_stmt_init($conn);
 
 // check prepared statement for execution 
 if (!mysqli_stmt_prepare($stmt,$sql)){
     echo "Prepared Statement Failed";
 }
 else{
     // bind variables to prepared statement as parameters
     mysqli_stmt_bind_param($stmt,"ss", $wID, $location);

     // execute prepared statement
     mysqli_stmt_execute($stmt);
 }
?>

<!-- Creates Headerline label and Table for updated warehouse data -->
<h1>Updated Data in Warehouse Table</h1>
<table border="1" >
        <tr>
            <td>WID</td>
            <td>Location</td>
        </tr>
        <?php

        // execute SELECT query
        $query = $conn->query("Select * from warehouse");
         
        // display updated data from warehouse table 
        while($row = $query->fetch_assoc()){
             echo "<tr>
             <td>{$row['warehouseID']}</td>
             <td>{$row['location']}</td>
             </tr>";
         }

         // close connection
         mysqli_close($conn);
        ?>
</table>

