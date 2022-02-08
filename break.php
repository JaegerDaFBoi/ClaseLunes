<?php

for ($i=1; $i <= 20; $i++) { 
    /*if ($i==10) {
        break;
    }*/
    if ($i==7 or $i==15) {
        continue;
    }
    echo $i;
    echo "<br>";
}