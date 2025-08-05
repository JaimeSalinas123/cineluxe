<?php
session_start();
include __DIR__ . '/../connection.php';

// Depuración: Ver datos recibidos
error_log("Datos recibidos: " . print_r($_POST, true));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // 1. Validar campos requeridos
        $required = ['nombre', 'email', 'password', 'confirm_password', 'telefono', 'remember'];
        foreach ($required as $field) {
            if (empty($_POST[$field])) {
                throw new Exception("Por favor completa todos los campos");
            }
        }

        // 2. Validar checkbox de términos
        if ($_POST['remember'] !== 'on') {
            throw new Exception("Debes aceptar los términos y condiciones");
        }

        // 3. Validar contraseñas
        if ($_POST['password'] !== $_POST['confirm_password']) {
            throw new Exception("Las contraseñas no coinciden");
        }

        // 4. Validar formato email
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("El email no tiene un formato válido");
        }

        // 5. Asignar variables
        $nombre = $conn->real_escape_string($_POST['nombre']);
        $email = $conn->real_escape_string($_POST['email']);
        $telefono = $conn->real_escape_string($_POST['telefono']);
        $password = $_POST['password'];
        $estadoid = 1; // Estado "activo"

        // 6. Verificar email único
        $check_email = $conn->prepare("SELECT email FROM usuario WHERE email = ?");
        $check_email->bind_param("s", $email);
        $check_email->execute();
        $check_email->store_result();

        if ($check_email->num_rows > 0) {
            throw new Exception("Este email ya está registrado");
        }

        // 7. Hash de contraseña
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // 8. Insertar en BD
        $stmt = $conn->prepare("INSERT INTO usuario (nombre, email, contrasena, telefono, estadoid) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $nombre, $email, $hashed_password, $telefono, $estadoid);

        if ($stmt->execute()) {
            // Registro exitoso
            $_SESSION['user_id'] = $stmt->insert_id;
            $_SESSION['success'] = "¡Registro exitoso! Bienvenido/a " . htmlspecialchars($nombre);
            header("Location: ../index.php");
            exit();
        } else {
            throw new Exception("Error al registrar: " . $conn->error);
        }

    } catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
        header("Location: ../views/register.php");
        exit();
    }
} else {
    $_SESSION['error'] = "Método no permitido";
    header("Location: ../views/register.php");
    exit();
}
?>