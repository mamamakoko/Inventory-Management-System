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
                    <td class='stock-button'><button id='plus'>
                        <a href=\"process\increment.php?incrementID=$id\">+</a></button>
                            " .$stock. "
                        <button id='minus'><a href=\"process\decrement.php?decrementID=$id\">-</a></button></td>

                    <td>
                        <button><a href=\"process\deletion.php?deleteID=$id\">Delete</a></button>
                        <button><a href=\"process\modification.php?updateID=$id\">Edit</a></button>
                    </td>
                </tr>
            ";
    }
}
