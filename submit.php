<table border="1" >
<tr>
    <td>WID</td>
    <td>Location</td>
</tr>
</table>

<?php
include_once("config.php");

$location = mysqli_real_escape_string($conn, $_POST['location']);
$wID = '754';

$sql = "INSERT INTO warehouse (warehouseID, location) VALUES (?,?);"
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt,$sql)){
    echo "Prepared Statement Failed";
}
else{
    mysqli_stmt_bind_param($stmt,"ss", $wID, $location);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
        <td>{$row['warehouseID']}</td>
        <td>{$row['location']}</td>
        </tr>";
    }
}
?>