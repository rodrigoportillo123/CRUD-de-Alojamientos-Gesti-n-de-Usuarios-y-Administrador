<?php
$servername = "localhost";
$username = "root"; // Cambia según tu configuración
$password = "";     // Agrega tu contraseña aquí
$dbname = "LoginSystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
