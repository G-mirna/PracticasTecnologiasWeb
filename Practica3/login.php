<?php

include 'usuarios.php';

    session_start();

    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $usuario = $_POST['inputUsername'];
        $contraseña = $_POST['inputPassword'];

        // Verificar si el usuario y la contraseña coinciden
        if (isset($_SESSION['usuarios'][$usuario]) && !empty($usuario) && !empty($contraseña) && $_SESSION['usuarios'][$usuario] == $contraseña) {
            echo "<script>alert('Inicio de sesión exitoso. Bienvenido, $usuario!')</script>";
            session_destroy();
            echo "<script>window.location.href = 'loginUsuarios.php'</script>";
        } else {
            echo "<script>alert('Usuario o contraseña incorrectos.')</script>";
            echo "<script>window.location.href = 'loginUsuarios.php'</script>";
        }
    }
?>