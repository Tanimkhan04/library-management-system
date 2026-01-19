<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$user = "root";
$password = "";     
$database = "library_db";
$conn = new mysqli(hostname: $host, username: $user, password: $password, database: $database);
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected successfully";

}


session_start();
?>
