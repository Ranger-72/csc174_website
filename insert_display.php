<h1>Updated Data in Warehouse Table</h1>
<table border="1" >
        <tr>
            <td>WID</td>
            <td>Location</td>
        </tr>
        <?php
        include_once("connection.php");

        $location = mysqli_real_escape_string($conn, $_POST['location']);
        $wID = '333';
        
        $sql = "INSERT INTO warehouse (warehouseID, location) VALUES (?,?);";
        $stmt = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($stmt,$sql)){
            echo "Prepared Statement Failed";
        }
        else{
            mysqli_stmt_bind_param($stmt,"ss", $wID, $location);
            mysqli_stmt_execute($stmt);
        }
        include_once(select.php);
        ?>
</table>

