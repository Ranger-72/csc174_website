<?php
        include_once("connection.php");
        $query = $conn->query("Select * from warehouse");
        while($row = $query->fetch_assoc()){
            echo "<tr>
            <td>{$row['warehouseID']}</td>
            <td>{$row['location']}</td>
            </tr>";
        }
        mysqli_close($conn);
?>