<?php

require_once "config.php";//Llamamos una vez el archivo config donde estan los parametros para conexion de la base de datos

$connection = mysqli_connect(HOST_DB, USER_DB,PASSWORD_DB, NAME_DB);//Orden especifico de parametros para conexion de bases de datos

if (!$connection) {//La variable connection genera un booleano. Condicion si el resultado es falso, osea, que no se genero la conexion
    die("Error al conectar a la DB: ".mysqli_connect_error());//La funcion mysqli_connect_error muestra el error exacto por el que no se logra la conexion
}