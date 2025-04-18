<?php
session_start();
require '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $stored_password);
        $stmt->fetch();

        // Comparar la contraseña directamente (sin password_verify)
        if ($password === $stored_password) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header("Location: ../vistas/dashboard.php");
            exit();
        } else {
            $_SESSION['error'] = "Contraseña incorrecta.";
        }
    } else {
        $_SESSION['error'] = "Usuario no encontrado.";
    }
    header("Location: ../index.php");
    exit();
}

?>
