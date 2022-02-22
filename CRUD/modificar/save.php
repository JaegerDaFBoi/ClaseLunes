<?php
    if (empty($_POST)) {
        header("location: ./index.php");
    }
    function save($id,$name,$phone,$email)
    {
        require_once "./../database/conexion.php";
        $query="UPDATE contactos SET nombre='$name', telefono='$phone', email='$email' WHERE id='$id'";
        $saved=mysqli_query($connection,$query);
        if ($saved) {
            header("location: ./../listar/index.php");
        } else {
            echo "Error modificando: ".mysqli_error($connection);
        }
    }
    
    $id=isset($_POST['id']) ? $_POST['id'] : "";
    $nombre=$_POST['nombre'] ?? "";
    $telefono=$_POST['telefono'] ?? "";
    $email=$_POST['email'] ?? "";

    save($id,$nombre,$telefono,$email);
?>