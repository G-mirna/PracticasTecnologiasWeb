<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    //INCLUIR EL ARCHIVO DE CONEXION
    include 'connection.php';

    //OBTENER LOS DATOS DE FORMULARIO

    $newUsername = $_POST['NewUsername'];
    $newPassword = $_POST['NewPassword'];

    if (empty($newUsername) || empty($newPassword)){
        echo "<script>alert('Por favor, complete los campos.')</script>";
        echo "<script>window.location.href = '../vistas/register.php'</script>";
    }else{
        //comprobando si existe el usuario
        $query = "SELECT * FROM Users WHERE username_user = :username";
        $stmt = $connection->prepare($query);
        $stmt->execute(array(':username' => $newUsername));

        if($stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<script>alert('El nombre de ususario ya existe, intente con uno diferente')</script>";
            echo "<script>window.location.href = '../vistas/register.php'</script>";


        }
    }

    //ciframos cotraseña 
    $hashed_password = password_hash($newPassword, PASSWORD_DEFAULT);

    //CREAMOS LA CONSULTA A LA BASE DE DATOS PARA GUARDAR LAS CREDENCIALES
    $query = "INSERT INTO Users VALUES (NULL, :newusername, :newpassword)";
    $stmt = $connection->prepare($query);
    $stmt->execute(array(':newusername' => $newUsername, ':newpassword' => $hashed_password));

    echo "<script>alert('Credenciales se guardan satisfactoriamente')</script>";
    echo "<script>window.location.href = '../vistas/index.php'</script>";
}
?>