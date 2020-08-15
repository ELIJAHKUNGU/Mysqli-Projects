<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "ecommerece";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("An error occured when connecting to the database: " . mysqli_connect_error());
}


?>
