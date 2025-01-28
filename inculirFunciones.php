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
echo "</br>";

// para calcular la raiz cuadrada de un numero sqrt

echo sqrt(25);
echo "</br>";

// para calcular un numero randow desde un numero minimo a un numero maximo 

echo rand(1,1000);
echo "</br>";

// obtener el numero de pi 

echo pi();
echo "</br>";

// redonde un numero a un entero depende de la fraciones que tenga 
echo floor(4.3);
echo "</br>";
echo ceil(4.3);
echo "</br>";

// redondear un numero float o que contenga decimales con round()
echo round(10.14);
echo "</br>";



// Formatear cantidades monetarias con number_format() 
$cantidad_1 = 1212133212.11; 
$cantidad_2 = 1212133212.11; 

// number_format($cantidad_1,2);  semaparador de millares con comas , 


echo number_format($cantidad_1,2);
echo "</br>"; 


// obtener fecha en tiempo actual en eeuu english  date_default_timezone_set
// primero de determina la zona horaria 
// pagina para ver la zona horaria 
// https://www.php.net/manual/es/function.date-default-timezone-set.php

date_default_timezone_set("America/El_Salvador"); 
echo date("D M d Y h:i:s A");
echo "</br>";


// obtener fecha abtual en español spanish  date_default_timezone_set
// primero de determina la zona horaria 
// pagina para ver la zona horaria

date_default_timezone_set("America/El_Salvador");

function fecha_espanol_larga(){
  $fecha_dia = date("d");
  $fecha_mes = date("m");
  $fecha_anio = date("y");
}

$dia_semana = [ 
  "monday" => "Lunes",
  "tuesday" => "Martes",
  "wednesday" => "Miercoles",
  "thursday" => "Jueves",     
  "friday" => "Viernes  ",
  "saturday" => "Sabado",
  "sunday" => "Domingo",

];

$meses_year = [
  "january" => "Enero",
  "february" => "Febrero",    
  "march" => "Marzo", 
  "april" => "Abril",
  "may" => "Mayo",  
  "june" => "Junio",
  "july" => "Julio",
  "august" => "Agosto",
  "september" => "Septiembre",  
  "october" => "Octubre",
  "november" => "Noviembre",
  "december" => "Diciembre",
];

$fecha_final = $fecha_dia ."de".$mses_year[$fecha_mes]."del".$fecha_anio;




?>