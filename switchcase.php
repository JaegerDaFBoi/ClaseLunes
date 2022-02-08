<?php
$i=9;
/*
switch ($i) {
    case '1':
        echo "Dia Lunes <br>";
        break;
    case '2':
        echo "Dia Martes <br>";
        break;
    case '3':
        echo "Dia Miercoles <br>";
        break;   
    case '4':
        echo "Dia Jueves <br>";
        break;
    case '5':
        echo "Dia Viernes <br>";
        break;
    case '6':
        echo "Dia Sabado <br>";
        break;
    case '7':
        echo "Dia Domingo <br>";
        break;           
    default:
        echo "La opcion esta por fuera del rango";
        break;
}*/
echo match($i){
    1 => "Lunes",
    2 => "Martes",
    3 => "Miercoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sabado",
    7 => "Domingo",
    default => "La opcion esta por fuera del rango"
};