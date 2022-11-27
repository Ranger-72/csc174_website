<?php
include_once("config.php");
$query = $conn->query("Select * from warehouse");
?>

<!-- <form action = "submit.php" method = "POST">
    <input type = 'text' name = "location" placeholder = "Location">
    <br><br>
    <button type = "submit" name = "submit">Submit</button>
    <br>
</form> -->

<table border="1">
<tr>
    <td>WID</td>
    <td>Location</td>
</tr>

<?php
while($row = $query->fetch_assoc()){
    echo "<tr>
    <td>{$row['warehouseID']}</td>
    <td>{$row['location']}</td>
    </tr>";
}
?>
</table>
