<?php
// Incluir la conexión a la base de datos
include 'db.php';

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // Validar que no haya campos vacíos
    if (!empty($nombre) && !empty($apellido) && !empty($email) && !empty($telefono)) {
        // Preparar la consulta SQL
        $sql = "INSERT INTO reserva (`name`, apellido, email, telefono) VALUES (?, ?, ?, ?)";

        // Usar sentencias preparadas para evitar inyección SQL
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $nombre, $apellido, $email, $telefono);

        if ($stmt->execute()) {
            echo "Reserva guardada exitosamente.";
        } else {
            echo "Error al guardar la reserva: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Por favor, completa todos los campos.";
    }

    // Cerrar la conexión
    $conn->close();
}
?>
