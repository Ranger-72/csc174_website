<?php
include_once("config.php");

$location = mysqli_real_escape_string($conn, $_POST['location']);
$wID = '754';

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

<table border="1" >
<tr>
    <td>WID</td>
    <td>Location</td>
</tr>
</table>
