<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Contraseñas</title>
</head>

<style>
    .container{
        width: 300px;
        height: 300px;
        margin: auto;
        border: 4px solid #000;
        text-align: center;
        padding: 50PX;
        background-color:aquamarine;

    }
</style>

<body>

    <div class="container">
        <h2>Generador de Contraseñas</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="longitud">Longitud de la contraseña:</label>
            <input type="number" style="width: 50px;" name="longitud" id="longitud" required>
            <button type="submit" style="margin:20px;">Generar Contraseña</button>
        </form>


        <?php
        function generar_contraseña($longitud)
        {
            $caracteres_validos = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_=+';

            $contraseña = '';
            $caracteres_totales = strlen($caracteres_validos) - 1;

            for ($i = 0; $i < $longitud; $i++) {
                $indice_aleatorio = rand(0, $caracteres_totales);
                $contraseña .= $caracteres_validos[$indice_aleatorio];
            }

            return $contraseña;
        }

        // Verificar si el formulario ha sido enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener la longitud de la contraseña ingresada por el usuario
            $longitud_contraseña = isset($_POST["longitud"]) && intval($_POST["longitud"]) >= 12 ? intval($_POST["longitud"]) : 12;


            // Generar la contraseña
            $contraseña_generada = generar_contraseña($longitud_contraseña);
            echo "Contraseña generada: " . $contraseña_generada;
        }
        ?>

    </div>


</body>

</html>