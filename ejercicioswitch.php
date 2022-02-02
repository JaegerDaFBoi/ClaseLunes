<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botones</title>
</head>
<body>
    <form action="ejercicioswitch.php" method="post">
        <input type="button" name="btn" value="Boton 1">
        <br>
        <input type="button" name="btn" value="Boton 2">
        <br>
        <input type="button" name="btn" value="Boton 3">
        <br>
        <input type="button" name="btn" value="Boton 4">
        <br>
    </form>
    <?php
        
        switch (isset($_POST['btn'])) {
            case 'Boton 1':
                echo "<script language='javascript'>";
                echo "alert('Usted presiono el boton 1')";
                echo "</script>";
                break;
            case 'Boton 2':
                echo "<script language='javascript'>";
                echo "alert('Usted presiono el boton 2')";
                echo "</script>";
                break;
            case 'Boton 3':
                echo "<script language='javascript'>";
                echo "alert('Usted presiono el boton 3')";
                echo "</script>";
                break;
            case 'Boton 4':
                echo "<script language='javascript'>";
                echo "alert('Usted presiono el boton 4')";
                echo "</script>";
                break;
            default:
                
                break;
        }
    ?>
</body>
</html>