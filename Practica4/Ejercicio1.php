<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .contenedor1 {
        width: 300px;
        height: 300px;
        margin: auto;
        border: 4px solid #000;
        text-align: center;
        padding: 50PX;
        background-color: palegoldenrod;



    }

    .contenedor {
        width: 300px;
        height: 300px;
        margin: auto;
        margin: 10px;
       
      
    }
</style>

<body>
    <div class="contenedor1">



        <form action="" method="POST">
            <legend>
                <h3>CALCULADORA BASICA</h3>
            </legend>

            <div class="contenedor">
                <label for="num1">Numero 1:</label>
                <input type="number" name="num1" style=' width: 50px;'  required>

                <br>

                <label for="num1">Numero 2:</label>
                <input type="number" name="num2" style=' width: 50px; margin: 5px;' required>

                <br>

                <label for="operation">Operacion:</label>
                <select name="operation" required>
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multi">Multiplicacion</option>
                    <option value="divi">Division</option>
                </select>
                <button type="submit">Calcular</button>

        </form>

        <?php

        function sumaa($num1, $num2)
        {
            return $num1 + $num2;
        }

        function restaa($num1, $num2)
        {
            return $num1 - $num2;
        }

        function multiplicacion($num1, $num2)
        {
            return $num1 * $num2;
        }

        function division($num1, $num2)
        {
            if ($num1 != 0) {
                return $num1 / $num2;
            } else {
                return "Esta division no se puede realizar ingrese un numero valido";
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            switch ($operation) {
                case "suma":
                    $result = sumaa($num1, $num2);
                    break;
                case "resta":
                    $result = restaa($num1, $num2);
                    break;
                case "multi":
                    $result = multiplicacion($num1, $num2);
                    break;
                case "divi":
                    $result = division($num1, $num2);
                    break;
                default:
                    $result = "Operación no valida";
            }
            echo '<div style="background-color: #d4f7dc;
             padding: 5px; 
             border: 1px solid #ccc; 
             margin: 50px; 
             border-radius: 5px;">';

            echo "<p style='color: #333; font-size: 25px;'>Resultado: $result</p>";
            echo '</div>';
        }


        ?>
    </div>

    </div>

</body>

</html>