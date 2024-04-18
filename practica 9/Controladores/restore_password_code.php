<?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Incluir el archivo de conexión a la base de datos
        include 'connection.php';

        // Obtener el nombre de usuario y la nueva contraseña del formulario
        $restoreUsername = $_POST['RestoreUsername'];
        $restorePassword = $_POST['RestorePassword'];

        // Verificar si el usuario existe en la base de datos
        $query = "SELECT * FROM users WHERE username_user = :username";
        $stmt = $connection->prepare($query);
        $stmt->execute(array(':username' => $restoreUsername));

        if ($stmt->fetch(PDO::FETCH_ASSOC)) {
            // El usuario existe, actualiza la contraseña
            // Cifra la nueva contraseña antes de almacenarla
            $hashed_restore_password = password_hash($restorePassword, PASSWORD_DEFAULT);

            // Actualizar la contraseña en la base de datos
            $query = "UPDATE users SET password_user = :res_password WHERE username_user = :res_username";
            $stmt = $connection->prepare($query);
            $stmt->execute(array(':res_password' => $hashed_restore_password, ':res_username' => $restoreUsername));

            echo "<script>alert('La contraseña ha sido actualizada correctamente.')</script>";
            echo "<script>window.location.href = '../index.php'</script>";
        } else {
            echo "<script>alert('El usuario no existe. Vuelva a Intentarlo')</script>";
            echo "<script>window.location.href = '../Vistas/restore_password.php'</script>";
        }
    }
?>