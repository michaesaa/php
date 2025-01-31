<?php
function conexion()
{
    $pdo = new PDO('mysql:host=localhost;dbname=inventario', 'root', '');
    return $pdo;
}

// verificar datos 

function verificar_datos($filtro, $cadena)
{
    // la funcion preg_match() devuelve true si la cadena coincide con el filtro, resive dos parametros
    if (preg_match("/^" . $filtro . "$/", $cadena)) {
        return false;
    } else {
        return true;
    }
}

$nombre="michael66";
if(verificar_datos("[a-zA-Z]{4,10}",$nombre)){
    echo "el nombre no cumple el filtro ";
}

