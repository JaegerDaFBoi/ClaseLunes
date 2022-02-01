<?php
define ("numero", "16");
$random=rand(1,25);

echo "El número es: ".constant('numero');
echo "<br>";
echo "El número aleatorio es: ".$random;
echo "<br>";

if (constant('numero')==$random) {
    echo "Felicitaciones. El numero es el correcto";
} else {
    echo "Intentalo de nuevo";
}
?>

