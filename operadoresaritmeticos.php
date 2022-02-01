<?php
$num1=5;
$num2=7;

$suma=$num1+$num2;
$resta=$num1-$num2;
$multiplicacion=$num1*$num2;
$division=$num1/$num2;

echo "La suma es: ".$suma;
echo "<br>";
echo "La resta es: ".$resta;
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultados</h1>
    <p>La suma es: <?php echo $suma ?></p><br>
    <p>La resta es: <?php echo $resta ?></p><br>
    <p>La multiplicacion es: <?php echo $multiplicacion ?></p><br>
    <p>La division es: <?php echo $division ?></p><br>
</body>
</html>