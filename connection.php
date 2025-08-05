<?php
$host = "127.0.0.1:3307"; 
$user = "root";
$password = ""; 
$database = "cineluxe"; 

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
} else {
    echo "¡Conexión exitosa!";
}
?>