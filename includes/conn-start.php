<?php
require_once("db-config.php");

// Create connection
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// This is needed in order to show greek text properly
$conn->query("SET NAMES 'utf8'");
?>
