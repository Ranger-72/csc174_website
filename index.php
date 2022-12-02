<form action = "insert_display.php" target = "_blank" method = "POST">
    <input type = 'text' name = "location" placeholder = "Please enter a location">
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
        include_once("select.php");
        ?>
</table>


