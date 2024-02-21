<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
    <h1>MANEJO DE LISTA DE COMPRAS</h1>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            
        }

        div {
            border: 1px solid #ccc;
            max-width:400px;
            padding: 20px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
</head>
<body>
    <div>
        <?php
        
        // Inicializamos la lista de compras como un array vacío
        $listaDeCompras = array();

        // Función para agregar un elemento a la lista
        function agregarElemento($elemento, &$lista) {
            $lista[] = $elemento;
        }

        // Función para eliminar un elemento de la lista y devolver un mensaje
        function eliminarElemento($elemento, &$lista) {
            $index = array_search($elemento, $lista);
            if ($index !== false) {
                $elementoEliminado = $lista[$index];
                unset($lista[$index]);
                return "<br> Se ha eliminado \"$elementoEliminado\" de la lista. <br>";
            } else {
                return "\"$elemento\" no se encontró en la lista.";
            }
        }

        // Función para mostrar la lista completa de compras
        function mostrarLista($lista) {
            if (empty($lista)) {
                echo "La lista de compras está vacía.\n <br>";
            } else {
                echo "Lista de compras:\n <br>";
                foreach ($lista as $item) {
                    echo "- $item\n<br>";
                }
            }
        }

        // Ejemplos de uso

        // Agregar elementos a la lista
        agregarElemento("Manzanas", $listaDeCompras);
        agregarElemento("Pan", $listaDeCompras);
        agregarElemento("Leche", $listaDeCompras);

        // Mostrar la lista antes de eliminar un elemento
        mostrarLista($listaDeCompras);

        // Eliminar un elemento de la lista y mostrar el mensaje
        echo eliminarElemento("Pan", $listaDeCompras) . "\n <br>";

        // Mostrar la lista después de eliminar un elemento
        mostrarLista($listaDeCompras);
        ?>
    </div>
</body>
</html>
