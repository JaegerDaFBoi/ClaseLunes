<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio1febrero.php" method="post"> 
        <p>Digite el año presente</p>
        <input type="text" name="apresente" placeholder="Digite año presente">
        <br>
        <p>Digite el año en que nació</p>
        <input type="text" name="anacimiento" placeholder="Digite año nacimiento">
        <br>
        <input type="submit" value="calcular">
    </form>
    <?php
        /*$apresente=$_REQUEST['apresente'];
        $anacimiento=$_REQUEST['anacimiento'];*/ //Formas de capturar informacion desde un input. _REQUEST tiene su utilidad en la misma funcion. _POST funciona para el manejo de varias paginas o servidores
        $apresente=$_POST['apresente'];
        $anacimiento=$_POST['anacimiento'];
        if ($apresente<>0 and $anacimiento<>0) {
            $edad=$apresente-$anacimiento;
                echo "Su edad es $edad años";
                echo "<br>";
            if ($edad>=18) {
                echo '<script language="javascript">';
                echo 'alert("Usted es mayor de edad")';
                echo '</script>';
            } else {
                echo '<script language="javascript">';
                echo 'alert("Usted es menor de edad")';
                echo '</script>';
            }
        }  
    ?>
</body>
</html>