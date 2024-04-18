<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Incluimos el archivo de conexión a la base de datos
        include 'connection.php';

        // Obtenemos los datos del formulario
        $newusername = $_POST['NewUsername'];
        $newpassword = $_POST['NewPassword'];

        // Validación
        if (empty($newusername) || empty($newpassword)) {
            echo "<script>alert('Por favor, complete todos los campos.')</script>";
            echo "<script>window.location.href = '../Vistas/register.php'</script>";
        } else {
            //comprobamos si existe el usuario
            $query = "SELECT * FROM users WHERE username_user = :username";
            $stmt = $connection->prepare($query);
            $stmt->execute(array(':username' => $newusername));
            if($stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<script>alert('Usuario o Contraseña ya existentes, Intente con uno diferente')</script>";
                echo "<script>window.location.href = '../Vistas/register.php'</script>";
                exit();
            }

            //ciframos contraseña
            $hashed_password = password_hash($newpassword, PASSWORD_DEFAULT);

            // Consulta a la base de datos para verificar las credenciales
            $query = "INSERT INTO users VALUES (Null, :newusername, :newpassword)";
            $stmt = $connection->prepare($query);
            $stmt->execute(array(':newusername' => $newusername, ':newpassword' => $hashed_password));

            echo "<script>alert('Usuario Guardado con Exito')</script>";
            echo "<script>window.location.href = '../index.php'</script>";
        }
    }
?>