<!DOCTYPE html>
<html>
<head>
    <title>Numero Par o Impar</title>

    <style>
        #contenedor{
            max-width: 400px;
            margin: 50px;
            padding: 50px;
            background-color: beige;

        }
    </style>
</head>
<body>
    <center>
        <div id= contenedor>
    <h2>Numero Par o Impar</h2>
    <form method="post" action="">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" id="numero" required><br><br>

        <input type="submit" name="enviar" value="Verificar">
    </form>

    <?php
    if(isset($_POST['enviar'])) {
        $numero = $_POST['numero'];

        if($numero % 2 == 0) {
            echo "<h3>El número $numero es un número par.</h3>";
        } else {
            echo "<h3>El número $numero es un número impar.</h3>";
        }
    }
    ?>
        </div>
    </center>
</body>
</html>