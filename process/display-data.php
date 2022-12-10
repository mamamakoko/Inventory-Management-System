<?php
$displaySql = 'SELECT * FROM inventory;';
$result = mysqli_query($connection, $displaySql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['itemID'];
        $name = $row['itemName'];
        $date = $row['date'];
        $stock = $row['stocks'];
        echo "<tr>
                    <td>" .$id. "</td>
                    <td>" .$name. "</td>
                    <td>" .$date. "</td>
                    <td class='stock-button'><button id='plus'>+</button>" .$stock. "<button id='minus'>-</button></td>

                    <td>
                    <a href=\"deletion.php?ID=$id\">Delete</a>
                    </td>
                </tr>
            ";
    }
}
