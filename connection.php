<?php

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctor_db";

// Create connection
$database = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}

?>