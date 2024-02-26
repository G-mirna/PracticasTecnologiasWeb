<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 900px;
    }
</style>
<body>
    <div class="container">
        <form action="login.php" method="POST">
            <h1 class="text-center">Login</h1>
            <div class="row mb-3">
                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-12">
                    <input type="text" class="form-control" id="inputUsername" name="inputUsername">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label ">Password</label>
                <div class="col-12 password">
                    <input type="password" class="form-control" id="inputPassword" name="inputPassword">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</body>
</html>