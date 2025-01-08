<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'register') {
        // Registro
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']); // Encriptación simple, mejorar con bcrypt
        $role = $_POST['role']; // admin o user

        $sql = "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $password, $role);

        if ($stmt->execute()) {
            echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión.'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error al registrar: " . $conn->error . "'); window.location.href='index.php';</script>";
        }
    } elseif (isset($_POST['action']) && $_POST['action'] == 'login') {
        // Inicio de sesión
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $_SESSION['user'] = $user;

            if ($user['role'] == 'admin') {
                header("Location: admin.php");
            } else {
                header("Location: usuario.php");
            }
        } else {
            echo "<script>alert('Correo o contraseña incorrectos.'); window.location.href='index.php';</script>";
        }
    }
}
?>
