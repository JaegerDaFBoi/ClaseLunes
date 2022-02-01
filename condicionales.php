<?php
$edad=rand(1,105);

if ($edad>=18) {
    echo "Su edad es: $edad";
    echo "<br>";
    echo "Usted es mayor de edad";
} else {
    echo "Su edad es: $edad";
    echo "<br>";
    echo "Usted es menor de edad";
}
?>