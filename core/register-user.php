<?php
session_start();
include __DIR__ . '/../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $required = ['nombre', 'email', 'password', 'confirm_password', 'telefono', 'remember'];
        foreach ($required as $field) {
            if (empty($_POST[$field])) {
                throw new Exception("FIELD_ERROR:Por favor, completa todos los campos.");
            }
        }

        if ($_POST['remember'] !== 'on') {
            throw new Exception("WARNING:Debes aceptar los términos y condiciones.");
        }

        if ($_POST['password'] !== $_POST['confirm_password']) {
            throw new Exception("FIELD_ERROR:Las contraseñas no coinciden.");
        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("FIELD_ERROR:El correo no tiene un formato válido.");
        }

        $email = $conn->real_escape_string($_POST['email']);
        $check_email = $conn->prepare("SELECT email FROM usuario WHERE email = ?");
        $check_email->bind_param("s", $email);
        $check_email->execute();
        $check_email->store_result();

        if ($check_email->num_rows > 0) {
            throw new Exception("WARNING:Este correo ya está registrado.");
        }

        $nombre = $conn->real_escape_string($_POST['nombre']);
        $telefono = $conn->real_escape_string($_POST['telefono']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $estadoid = 1;

        $stmt = $conn->prepare("INSERT INTO usuario (nombre, email, contrasena, telefono, estadoid) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $nombre, $email, $password, $telefono, $estadoid);

        if ($stmt->execute()) {
            $_SESSION['user_id'] = $stmt->insert_id;
            $_SESSION['toast_message'] = "SUCCESS:¡Registro exitoso! Bienvenido/a " . htmlspecialchars($nombre);
            header("Location: /CineLuxe/views/movie.php");
            exit();
        } else {
            throw new Exception("ERROR:Error al registrar: " . $conn->error);
        }

    } catch (Exception $e) {
        $_SESSION['toast_message'] = $e->getMessage();
        $_SESSION['form_data'] = $_POST;
        header("Location: ../views/register.php");
        exit();
    }
} else {
    $_SESSION['toast_message'] = "ERROR:Método no permitido";
    header("Location: ../views/register.php");
    exit();
}
?>