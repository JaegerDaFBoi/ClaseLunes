<?php
    include_once "./Class/Persona.class.php";//Con include se traen los archivos de las clases
    $persona=new Persona('106064725','Juanito Alimaña','5555555','nito@hotmail.com');//Se isntancia un objeto de la clase Persona
    //$persona->guardar();//Sintaxis para llamar el metodo de la clase
    $persona->listar();
?>
