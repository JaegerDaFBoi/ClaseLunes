<?php

    function listar()//funcion para mostrar objetos en una tabla
    {
        require_once "./../database/conexion.php";//Se llama el archivo para conexion a base de datos
        $query = "SELECT * FROM contactos";//Consulta Select para traer todos los datos
        $data = mysqli_query($connection, $query, MYSQLI_ASSOC);

        foreach ($data as $row){
            ?>
            <tr>
                <td scope="row"><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><a class="btn btn-danger btn-sm" href="<?php echo APP_URL;?>/modificar/index.php?id=<?php echo $row['id'];?>">Editar✏</a></td>
                <td><a class="btn btn-danger btn-sm" href="<?php echo APP_URL;?>/eliminar/index.php?id=<?php echo $row['id'];?>">Eliminar✂</a>
            </tr>
            <?php
        }
    }
    
?>

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
        <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php listar(); ?>
            </tbody>
        </table>
        </div>
    </div>
    <script src="./../js/bootstrap.min.js"></script>
</body>
</html>