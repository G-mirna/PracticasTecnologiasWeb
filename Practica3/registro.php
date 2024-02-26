<?php

include 'usuarios.php';

    session_start();
    //Verificar  si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST" ){
        //PARA QUE OBTENGAMOS LOS DATOS DEL FORMULARIO
        $usuario = $_POST['inputUsername'];
        $contraseña = $_POST['inputPassword'];

        if(isset($usuario) && isset($contraseña) && !empty($usuario) && !empty($contraseña)){

            //GUARDAMOS TODOS LOS DATOS EN UN ARRAY ASOCIATIVO
            $_SESSION['usuarios'][$usuario] = $contraseña;
            
            echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesion')</script>";
            echo "<script>window.location.href = 'loginUsuarios.php'</script>";
        }
        else{
            echo "<script>alert('A ocurrido un error vuelve a intentarlo')</script>";
            echo "<script>window.location.href = 'registroUsuarios.php'</script>";
        }
    }

?>