<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #6a11cb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
</style>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <form class="card bg-dark text-white" style="border-radius: 1rem;" action="../Controladores/restore_password_code.php" method="POST">
                        <div class="card-body p-5 text-center">

                            <div class="mt-md-4 pb-2">

                                <h2 class="fw-bold mb-2 text-uppercase">Restuaracion de Contraseña</h2>
                                <p class="text-white-50 mb-4">Digite su Nombre de usuario y nueva contraseña</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="RestoreUsername" id="typeEmailX" class="form-control form-control-lg" placeholder="Username"/>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="RestorePassword" id="typePasswordX" class="form-control form-control-lg" placeholder="Nueva Password" />
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Restaurar mi contraseña</button>
                                <br><br>
                                <a href="../index.php" class="btn btn-outline-light btn-lg px-5">Regresar</a>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>