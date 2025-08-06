<?php
session_start();

unset($_SESSION['login_error']);
unset($_SESSION['toast_message']);

include __DIR__ . '/../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            throw new Exception("Por favor ingresa tu email y contraseña");
        }

        $email = trim($_POST['email']);
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT usuarioid, nombre, contrasena FROM usuario WHERE email = ? LIMIT 1");
        if (!$stmt) {
            throw new Exception("Error en el sistema. Intenta más tarde.");
        }

        $stmt->bind_param("s", $email);
        
        if (!$stmt->execute()) {
            throw new Exception("Error al verificar credenciales");
        }

        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            throw new Exception("Usuario o contraseña incorrectos");
        }

        $user = $result->fetch_assoc();

        if (!password_verify($password, $user['contrasena'])) {
            throw new Exception("Usuario o contraseña incorrectos");
        }

        $_SESSION['user_id'] = $user['usuarioid'];
        $_SESSION['user_name'] = $user['nombre'];
        $_SESSION['logged_in'] = true;
        $_SESSION['toast_message'] = "Bienvenido de nuevo, " . htmlspecialchars($user['nombre']) . "!";
        header("Location: /CineLuxe/views/movie.php");
        exit();

    } catch (Exception $e) {
        $_SESSION['login_error'] = $e->getMessage();
        $_SESSION['old_email'] = htmlspecialchars($email);

        header("Location: /cineluxe/views/login.php");
        exit();
    }
} else {
    $_SESSION['login_error'] = "Método no permitido";
    header("Location: /cineluxe/views/login.php");
    exit();
}
?>