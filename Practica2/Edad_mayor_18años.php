<?php

//areglo
$edades = [15, 16, 13, 30, 18, 10, 40, 21, 19, 28];

// mostrar mayor a 18 años
$i = 0;
while ($i < count($edades)) {
    if ($edades[$i] > 18) {
        echo "Las edades mayor a 18 son: " . $edades[$i] . "<br>";
    }
    $i++;
}
?>