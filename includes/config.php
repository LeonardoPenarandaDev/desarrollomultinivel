<?php
$host = "localhost";
$user = "root";  // Cambiar si es necesario
$password = "1234";
$database = "login_db";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>
