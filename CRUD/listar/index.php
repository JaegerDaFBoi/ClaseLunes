<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="./../css/bootstrap.min.css">
</head>
<body>
    <?php include_once "./../views/menu.php"?>
    <div class="container">
        <div class="row my-3">
            <h1 class="text-center">Lista de contactos</h1>
        </div>
        <div class="row my-2">
            <form class="row" method="POST">
                <div class="col-10">
                    <input type="search" class="form-control" id="buscar" name="buscar" placeholder="Busca un nombre" value="<?php echo $_POST["buscar"] ?? ""; ?>">
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="./../js/bootstrap.min.js"></script>
</body>
</html>