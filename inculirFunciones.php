<?php

include "funciones.php";

echo "el promedio es:" . promedio_alumno(3, 3, 10);



//  funciones para trasformar 
$cadena_texto = "hola mundoo";

$longitud = strLen($cadena_texto);

echo "la paralbra tiene x caracteres" . $longitud;

// para contar palabras 
$palabra = str_word_count($cadena_texto);
echo "tiene x cantidad de :" . $palabra; 
echo "</br>";


// convertir un estring en un array apartir de un limitador 

$fecha_1 = "2021/11/4";
$fecha_2 = "2031/11/4";
$fecha_3 = "2021/4/4";


$array = explode("/", $fecha_1);

echo $array[1];
echo "</br>";

// funciones matematicas predefinidas 

// elevar la base de un exponente 

// multiplicar 5 veces 5

echo pow(5,3);

// para calcular la raiz cuadrada de un numero sqrt

echo sqrt(25);

// para calcular un numero randow desde un numero minimo a un numero maximo 

echo rand(1,1000);

// obtener el numero de pi 

echo pi();




?>