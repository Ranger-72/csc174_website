<?php 
 include_once("connection.php");

 $wID = mysqli_real_escape_string($conn, $_POST['WID']);
 $location = 'Sacramento';
 
 $sql = "INSERT INTO warehouse (warehouseID, location) VALUES (?,?);";
 $stmt = mysqli_stmt_init($conn);
 
 if (!mysqli_stmt_prepare($stmt,$sql)){
     echo "Prepared Statement Failed";
 }
 else{
     mysqli_stmt_bind_param($stmt,"ss", $wID, $location);
     mysqli_stmt_execute($stmt);
 }
?>

<h1>Updated Data in Warehouse Table</h1>
<table border="1" >
        <tr>
            <td>WID</td>
            <td>Location</td>
        </tr>
        <?php

        $query = $conn->query("Select * from warehouse");
         
        while($row = $query->fetch_assoc()){
             echo "<tr>
             <td>{$row['warehouseID']}</td>
             <td>{$row['location']}</td>
             </tr>";
         }

         mysqli_close($conn);
        ?>
</table>

