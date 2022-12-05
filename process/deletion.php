<?php

// Then we include the databse connnecyion.
include_once '../source/database.php';

// Get the data from the modal.
$itemID = $_POST['item-id'];

// Checks if input is empty.
if (empty($itemID)) {
    echo 'All fields are required';
} else {

    // Select the specified row and checks if the input is unique.
    $sql = "SELECT * FROM inventory WHERE itemID = '$itemID'";
    $uniqueValues = mysqli_query($connection, $sql);

    // Checks if the input is unique.
    if (mysqli_num_rows($uniqueValues)) {

        // If true, delete the row.
        $sql = "DELETE FROM inventory WHERE itemID = '$itemID';";
        mysqli_query($connection, $sql);

        // Then go back to dashboard and exit. 
        header("Location: ../dashboard.php?newproduct=success");
        exit();
    } else {
        // If false, display the error message.
        echo 'Opps! The product does not exist.';
    }
}
