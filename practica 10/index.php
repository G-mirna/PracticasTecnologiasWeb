<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carreras</title>
    <!-- Agregar Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Carreras</h1>
        <!-- Botón para crear nueva carrera -->
        <a href="./Views/create.php" class="btn btn-success mb-3">Crear Nueva Carrera</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include './Controllers/index_code.php';
                foreach ($careers as $career): ?>
                    <tr>
                        <td><?php echo $career['id_career']; ?></td>
                        <td><?php echo $career['name_career']; ?></td>
                        <td><?php echo $career['description_career']; ?></td>
                        <td>
                            <!-- Botones de editar y eliminar -->
                            <a href="edit_career.php?id=<?php echo $career['id_career']; ?>" class="btn btn-primary btn-sm mr-2">Editar</a>
                            <a href="delete_career.php?id=<?php echo $career['id_career']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
