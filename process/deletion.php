<?php

include "../source/database.php";

// if (isset($_GET['ID'])) {
//     $deleteID = $_GET['ID'];

//     $sqlDelete = "DELETE FROM inventory WHERE itemID = $deleteID";
//     mysqli_query($connection, $sqlDelete);
// }

//getting id of the data from url
$id = $_GET['ID'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM users WHERE itemID=$id");

header("location: ../dashboard.php");
exit;
