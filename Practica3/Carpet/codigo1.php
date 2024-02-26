<?php
   $nombre = $_POST["Firstname"];
   $apellido = $_POST["Lastname"];

   if(!empty($nombre) && !empty($apellido)){
    echo "<script>alert('Hola, $nombre $apellido')</script>";
}
   else{
    echo "<script>alert('Nombre o apellido vacio')</script>";
    }

   echo "<script>window.location.href = 'ejercicio1.php'</script>";

?>

