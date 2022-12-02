<!-- Creates Textbox for user input and button -->
<form action = "insert_display.php" target = "_blank" method = "POST">
    <input type = 'text' name = "WID" placeholder = "Enter a 3-digit Number">
    <br>
    <button type = "submit" name = "submit">Submit</button>
    <br>
</form>

<!-- Creates Headerline label and Table for current warehouse data -->
<h1>Current Data in Warehouse Table</h1>
<table border="1" >
        <tr>
            <td>WID</td>
            <td>Location</td>
        </tr>
        <?php

        // start connection to DB
        include_once("connection.php");

        // execute SELECT query
        $query = $conn->query("Select * from warehouse");

        // display current data from warehouse table
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


