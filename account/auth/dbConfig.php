<?php


$hn = "localhost";
$un = "theater-admin";
$pw = "Xk2@U.N85ljMlayh";
$db = "theatre";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>