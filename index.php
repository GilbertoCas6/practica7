<?php
$servername = "mysql";
$username = "root";
$password = "rootpassword";
$database = "testdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Hola Mundo desde PHP con conexión a MySQL ";
