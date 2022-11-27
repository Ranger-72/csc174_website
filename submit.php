<?php
include_once("config.php");

$loaction = mysqli_real_escape_string($conn, $_POST['location']);

$sql = "INSERT INTO warehouse (warehouseID, location) VALUES (warehouseID,?);"
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt,$sql)){
    echo "Prepared Statement Failed";
}
else{
    mysqli_stmt_bind_param($stmt,"s", $data);
    mysqli_stmt_exexcute($stmt);
    $result = mysqli_stmt_get_result($stmt);
}
?>

<table border="1">
<tr>
    <td>WID</td>
    <td>Location</td>
</tr>
<?php

// $query = $conn->query("Select * from warehouse");
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>{$row['warehouseID']}</td>
    <td>{$row['location']}</td>
    </tr>";
}
?>
</table>