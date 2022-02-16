<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="./../css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_GET['status'])) {
            ?>
            <div class="row">
                <div class="alert alert-success" role="alert">
                    Contacto almacenado
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="row">
        <form action="./save.php" method="POST" class="card-body">
            <h1 class="card-title">Insert(Crear)</h1>
            <div class="col-12">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Jhon Doe">
            </div>
            <div class="col-12">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="3105555555">
            </div>
            <div class="col-12">
                <label for="correo" class="form-label">Correo Electronico</label>
                <input type="text" class="form-control" id="correo" name="correo" placeholder="jhondoe@gmail.xxx">
            </div>
            <button class="btn btn-primary col-12 mt-3">Guardar👹</button>
        </form>
    </div>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>