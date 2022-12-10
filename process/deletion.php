<?php

include "../source/database.php";

//getting id of the data from url
$id = $_GET['deleteID'];

//deleting the row from table
$result = mysqli_query($connection, "DELETE FROM inventory WHERE itemID=$id");

header("location: ../dashboard.php");
exit;