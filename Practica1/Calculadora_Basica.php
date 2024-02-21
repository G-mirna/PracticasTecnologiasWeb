<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Básica</title>

    <style>
        
        #Contenedor_calculadora {
            background-color: aquamarine;
            max-width: 400px;
            margin: 0 auto;
            padding: 50px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <center>
        <div id="Contenedor_calculadora">

    <h2>CALCULADORA BASICA</h2>

    <form method="post" action="">
        <label for="num1">Primer número:</label><br>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Segundo número:</label> <br>
        <input type="number" name="num2" id="num2" required><br><br>

        <input type="submit" name="enviar" value="Calcular">
    </form>

    <?php
    if(isset($_POST['enviar'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "<h3>Resultados:</h3>";
        echo "Suma: " . ($num1 + $num2) . "<br>"; 
        echo "Resta: " . ($num1 - $num2) . "<br>";
        echo "Multiplicación: " . ($num1 * $num2) . "<br>";

        if($num2 != 0) {
            echo "División: " . ($num1 / $num2) . "<br>";
        } else {
            echo "No se puede dividir por cero.<br>";
        }
    }
    ?>
    </div>
</center> 
</body>
</html>