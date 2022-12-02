<form action = "submit.php" target = "_blank" method = "POST">
    <input type = 'text' name = "location" placeholder = "location">
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
        include_once("config.php");
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


