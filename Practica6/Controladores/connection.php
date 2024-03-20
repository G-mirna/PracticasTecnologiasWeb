<?php

//Configuracion de la base de datos
$db_host = 'localhost';
$db_name = 'TecnologiaWeb2';
$db_username = 'root';
$db_password = '';

//Conexion 

try{
    $connection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch(PDOException $e){  
    echo "Error al conectar a la base de datos: " . $e->getMessage();

}



?>