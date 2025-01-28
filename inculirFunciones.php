<?php

include "funciones.php";

echo "el promedio es:".promedio_alumno(3,3,10);



//  funciones para trasformar 
$cadena_texto = "hola mundoo";

$longitud = strLen($cadena_texto);

echo "la paralbra tiene x caracteres".$longitud;

// para contar palabras 
$palabra = str_word_count($cadena_texto);
echo "tiene x cantidad de :".$palabra;

?>