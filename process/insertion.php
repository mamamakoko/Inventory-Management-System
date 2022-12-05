<?php

include_once '../source/database.php';

$name = $_POST['item-name'];
$stock = $_POST['item-stock'];

if (empty($name) || empty($stock)) {
    echo 'All fields are required';
} else {
    $sql = "SELECT * FROM inventory WHERE itemName = '$name'";
    $uniqueValues = mysqli_query($connection, $sql);

    if (mysqli_num_rows($uniqueValues)) {
        echo 'Opps! The Item Name you entered might already exist in the database, please fill a unique name';
    } else {
        $sql = "INSERT INTO inventory (itemID, itemName, date, stocks)
                VALUES ('$id', '$name', CURDATE(), '$stock');";
        mysqli_query($connection, $sql);
        
        header("Location: ../dashboard.php?newproduct=success");
        exit();
    }
}




