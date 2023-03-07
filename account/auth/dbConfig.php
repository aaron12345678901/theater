<?php


$hn = "localhost";
$un = "aaron";
$pw = "2Ha(cGmxV1NOtoyQ";
$db = "theatre";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>