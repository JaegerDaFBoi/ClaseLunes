<?php
    function buscar($id)//Funcion buscar para traer todos los datos de la tabla bajo el id especificado en el metodo get
    {
        require_once "./../database/conexion.php";
        $query = "SELECT * FROM contactos WHERE id = '$id'";//Consulta para traer todos los datos bajo el id
        $data = mysqli_query($connection,$query,MYSQLI_ASSOC);
        $datos = [];//Se crea un elemento arreglo
    
        foreach ($data as $row) {//Ciclo for each para llenar un arreglo
            
            array_push($datos,[//Funcion de php array push para llenar los datos de un arreglo. Se definen como parametros el arreglo, y despues los valores
                "nombre"=>$row['nombre'],//Se asigna al campo el valor encontrado en la variable row que pertenece a la fila de la tabla en la base de datos
                "telefono"=>$row['telefono'],
                "email"=>$row['email'] 
            ]);
        }
        return $datos[0];
    }
    $datos=buscar(($_GET['id']));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="./../css/bootstrap.min.css">
</head>
<body>
    <?php include_once "./../views/menu.php";?>
    <div class="container">
        <form action="./save.php" method="POST" class="card-body">
            <h1 class="card-title">Datos Contacto <?php echo $_GET['id']; ?></h1>
        </form>
    </div>
<script src="./../js/bootstrap.min.js"></script>    
</body>
</html>