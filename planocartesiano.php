<?php

$x=rand(-30,30);
$y= rand(-30,30);

echo "La coordenada X es: ".$x;
echo "<br>";
echo "La coordenada Y es: ".$y;
echo "<br>";


if ($x > 0 and $y > 0) {
    echo "La coordenada esta ubicada en el primer cuadrante";
    echo "<br>";
    echo "&nbsp&nbsp&nbsp&nbsp |";
    echo "&nbspX";
    echo "<br>";
    echo "----";
    echo "----";
    echo "<br>";
    echo "&nbsp&nbsp&nbsp&nbsp |";
    echo "<br>";
} elseif ($x > 0 and $y < 0) {
    echo "La coordenada esta ubicada en el segundo cuadrante";
    echo "<br>";
    echo "&nbsp&nbsp&nbsp&nbsp |";
    echo "<br>";
    echo "----";
    echo "----";
    echo "<br>";
    echo "&nbsp&nbsp&nbsp&nbsp |";
    echo "&nbspX";
    echo "<br>";
} elseif ($x < 0 and $y < 0) {
    echo "La coordenada esta ubicada en el tercer cuadrante";
    echo "<br>";
    echo "&nbsp&nbsp&nbsp&nbsp |";
    echo "<br>";
    echo "----";
    echo "----";
    echo "<br>";
    echo "&nbspX";
    echo " |";
    echo "<br>";
} else {
    echo "La coordenada esta ubicada en el cuarto cuadrante";
    echo "<br>";
    echo "&nbspX";
    echo " |";
    echo "<br>";
    echo "----";
    echo "----";
    echo "<br>";
    echo "&nbsp&nbsp&nbsp&nbsp |";
    echo "<br>";
}
?>