<?php

define('BASE_URL', '/e-ticketing-lawas-express/');

// Database credentials
$database_host = "localhost";
$database_username = "root";
$database_password = "";
$database_name = "e_ticketing_lawas_express";

// Create a connection
$conn = new mysqli($database_host, $database_username, $database_password, $database_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
