<?php
include("config.php");
$query = $conn->query("Select * from warehouse");
?>

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
    </tr";
}
?>
</table>
