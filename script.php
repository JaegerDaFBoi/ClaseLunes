<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$roles = $_POST['roles'];
echo "Nombre: $nombre <br>";
echo "Edad: $edad <br>";
echo "Genero: $genero <br>";
echo "<p><b>Roles</b></p>";
echo "<ul>";
foreach ($roles as $rol) {
    echo "<li>$rol</li>";
}
echo "</ul>";
