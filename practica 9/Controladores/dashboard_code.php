<?php
    
    include 'connection.php';

    // Consulta SQL para obtener los usuarios
    $sql = "SELECT id_user, username_user, password_user FROM Users";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (count($users) > 0) {
        // Mostrar los datos de cada usuario
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>".$user["id_user"]."</td>";
            echo "<td>".$user["username_user"]."</td>";
            echo "<td>".$user["password_user"]."</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No se encontraron usuarios</td></tr>";
    }
?>