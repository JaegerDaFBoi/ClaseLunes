<?php
    /*
    function listar()
    {
        $connection = mysqli_connect('localhost', 'root','','crud_adsi');
        $query = "SELECT * FROM contactos";
        $data = mysqli_query($connection,$query,MYSQLI_ASSOC);

        foreach ($data as $row) {
            echo $row['id']."<br>";
            echo $row['nombre']."<br>";
            echo $row['telefono']."<br>";
            echo $row['email']."<br>";
            echo "----------------------------"."<br>";
        }
    }
    */
    function listar()
    {
        $busqueda = "Agapito";
        $connection = mysqli_connect('localhost', 'root','','crud_adsi');
        $query = "SELECT * FROM contactos WHERE nombre LIKE '%$busqueda%'";
        $data = mysqli_query($connection,$query,MYSQLI_ASSOC);
        foreach ($data as $row) {
            echo "El parametro de busqueda es: $busqueda"."<br>";
            echo "ID: ".$row['id']."<br>";
            echo "Nombre: ".$row['nombre']."<br>";
            echo "Telefono: ".$row['telefono']."<br>";
            echo "Email: ".$row['email']."<br>";
        }
    }
?>
