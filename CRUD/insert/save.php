<?php

if (empty($_POST)) {//Si POST esta vacio, con datos null
    header("location: ./index.php");//Direcciona al index principal
}

function save($name, $phone, $email)//Se crea funcion para guardar los datos. Los parametros son las variables que vamos a almacenar
{
    require_once "./../database/conexion.php";//Con el comando require_once llamamos el documento conexion.php donde esta declarada la conexion a la base de datos
    $query = "INSERT INTO contactos (nombre,telefono,email) VALUES ('$name','$phone','$email')";//Se declara la variable $query para almacenar la consulta sql a la base de datos
    $saved = mysqli_query($connection,$query);//mysqli_query es una funcion que realiza la consulta de la base de datos. Se llama el archivo donde esta la conexion y la variable donde se almacena la consulta como parametros

    if ($saved) {//La funcion mysqli_query arroja un booleano, por lo tanto comparamos el resultado con un condicional
        header("location: ./index.php?status=success");//Si la consulta se realizo exitosamente, reenviaremos a la pagina principal y en la url dejaremos el mensaje de exito 
    } else {
        echo "Error insertando: ".mysqli_error($connection);//Sino, llamamos el error que se haya generado con la funcion mysqli_error
    }
}

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";//La funcion isset define si el valor llamado por medio del metodo POST esta null o no
$telefono = $_POST['telefono'] ?? "";
$correo = $_POST['correo'] ?? "";//Forma simplificada de hacer el proceso hecho con la variable $nombre

save($nombre,$telefono,$correo);//Llamo la funcion y mando los parametros con las variables que van a almacenar los datos 