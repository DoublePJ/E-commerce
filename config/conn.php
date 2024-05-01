<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_shop";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "connect Failde: " . $e->getMessage();
}
