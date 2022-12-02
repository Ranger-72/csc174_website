<form action = "insert_display.php" target = "_blank" method = "POST">
    <input type = 'text' name = "WID" placeholder = "Please enter a 3 digit Number">
    <br>
    <button type = "submit" name = "submit">Submit</button>
    <br>
</form>

<h1>Current Data in Warehouse Table</h1>
<table border="1" >
        <tr>
            <td>WID</td>
            <td>Location</td>
        </tr>
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
</table>


