
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar Números Primos</title>
</head>

<style>
    .cont{
        width: 300px;
        height: 300px;
        margin: auto;
        border: 4px solid #000;
        text-align: center;
        padding: 50PX;
        background-color:beige;

    }
</style>
<body>

<div class="cont">


    <h2>Encontrar Números Primos</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="numero">Ingrese un número entero positivo:</label>
        <input type="number" style="width: 80px;" name="numero" id="numero" required>
        <br>
        <button type="submit" style="width: 100px; background-color:burlywood; margin:10px;">Encontrar</button>
    </form>



<?php


    function esPrimo($numero){
        if($numero <= 1){
            return false;
        }
        for ($i= 2; $i < $numero; $i++) { 
            if ($numero % $i == 0){
                return false;
            }
        }
        return true;
    }

    function encontrarPrimos($numero){
        $primos = [];
        for ($i= 2; $i <= $numero; $i++){
            if(esPrimo($i)){
                $primos[] = $i;
            }
        }
        return $primos;
    }

    $numeroLimite = $_POST["numero"];
    if (isset($numeroLimite)){
        $primosEncontrados = encontrarPrimos($numeroLimite);
        for ($i=0; $i < count($primosEncontrados); $i++) { 
            echo "numero: ".$primosEncontrados[$i];
            echo "<br>";
        }
    }

?>
</div>


</body>
</html>
