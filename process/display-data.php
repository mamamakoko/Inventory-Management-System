<?php
    $displaySql = 'SELECT * FROM inventory;';
    $result = mysqli_query($connection, $displaySql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['itemID'] . "</td><td>" . $row['itemName'] . "</td><td>" . $row['date'] . "</td><td>" . $row['stocks'] . "</td></tr>"; 
        
        }
    }
?>