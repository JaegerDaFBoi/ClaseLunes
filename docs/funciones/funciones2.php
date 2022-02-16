<?php
    /*function save($name, $phone, $email)
    {
        $connection = mysqli_connect('localhost', 'root','','crud_adsi');
        $query = "INSERT INTO contactos (nombre,telefono,email) VALUES ('$name','$phone','$email')";
        $saved = mysqli_query($connection,$query);

        if ($saved) {
            echo "Guardado Exitosamente";
        } else {
            echo "Error insertando: ".mysqli_error($connection);
        }
    }
    */

    function delete($id)
    {
        $connection = mysqli_connect('localhost', 'root','','crud_adsi');
        $query = "DELETE FROM contactos WHERE id=('$id')";
        $deleted =mysqli_query($connection,$query);

        if ($deleted) {
            echo "Eliminado Exitosamente";
        } else {
            echo "Error eliminando: ".mysqli_error($connection);
        }
    }
?>