<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elementos de formulario</title>
</head>
<body>
    <form action="./script.php" method="POST" enctype="multipart/form-data">
        <label>
            Nombre:
            <input type="text" name="nombre" placeholder="Alvin JackiTori">
        </label>
        <br>
        <br>
        <label>
            Edad:
            <input type="number" name="edad" max="110" min="1">
        </label>
        <br>
        <br>
        <label>
            Genero:
            <input type="radio" name="genero" value="Femenino">
            Femenino
            <input type="radio" name="genero" value="Masculino">
            Masculino
        </label>
        <br>
        <br>
        <p><b>Roles</b></p>
        <label>
        <input type="checkbox" name="roles[]" value="Administrador">
        Administrador
        </label>
        <label>
        <input type="checkbox" name="roles[]" value="Editor">
        Editor
        </label>
        <label>
        <input type="checkbox" name="roles[]" value="Moderador">
        Moderador
        </label>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>