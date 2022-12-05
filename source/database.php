<?php

$dbServer = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "ims";

$connection = mysqli_connect($dbServer, $dbUserName, $dbPassword, $dbName);

if (!$connection) {
    die("Could not connect to database");
}

?>