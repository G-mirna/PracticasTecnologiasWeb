<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Incluimos el archivo de conexión a la base de datos
        include 'connection.php';

        // Obtenemos los datos del formulario
        $username = $_POST['Username'];
        $password = $_POST['Password'];

        // Validación
        if (empty($username) || empty($password)) {
            echo "<script>alert('Por favor, complete todos los campos.')</script>";
            echo "<script>window.location.href = '../index.php'</script>";
        } else {
            // Consulta a la base de datos para verificar las credenciales
            $query = "SELECT * FROM users WHERE username_user = :username";
            $stmt = $connection->prepare($query);
            $stmt->execute(array(':username' => $username));
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password_user'])) {
                // Las credenciales son válidas, inicia sesión
                session_start();
                $_SESSION['user_id'] = $user['id_user']; // Guardar el ID de usuario en la sesión
                $_SESSION['username'] = $user['username_user']; // Guardar el nombre de usuario en la sesión
                echo "<script>window.location.href = '../Vistas/dashboard.php'</script>";
                exit();
            } else {
                echo "<script>alert('Credenciales incorrectas. Por favor, inténtelo de nuevo.')</script>";
                echo "<script>window.location.href = '../index.php'</script>";
            }
        }
    }
?>
