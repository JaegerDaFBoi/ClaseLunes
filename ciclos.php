<?php
    for ($i=0; $i < 10; $i++) { 
        echo $i;
        echo "<br>";
    }
    echo "<br>";
    $contador=0;
    while ($contador <= 10) {
        echo $contador;
        $contador++;
    }
    $contador2=0;
    echo "<br>";
    do {
        echo $contador2;
        $contador2++;
    } while ($contador2 <= 10);
?>