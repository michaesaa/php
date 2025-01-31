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

// funcion para limpiar cadenas de texto para evitar inyecciones sql 
// para los formularios 

function limpiar_cadena($cadena){
    // sirve para eliminar espacion en blanco al inicio y final de la cadena
    $cadena=trim($cadena);
    // sirve para eliminar las barras invertidas
    $cadena=stripslashes($cadena);
    // sirve para para remplzar caracteres en nuestra cadena
    $cadena=str_ireplace("<script>","",$cadena);
    $cadena=str_ireplace("</script>","",$cadena);
    $cadena=str_ireplace("</script src","",$cadena);
    $cadena=str_ireplace("</script type=","",$cadena);
    $cadena=str_ireplace("<SELECT * FROM","",$cadena);
    $cadena=str_ireplace("DELETE FROM","",$cadena);
    $cadena=str_ireplace("<INSERT INTO","",$cadena);
    $cadena=str_ireplace("<DROP TABLE","",$cadena);
    $cadena=str_ireplace("<DROP DATABASE","",$cadena);
    $cadena=str_ireplace("<TRUNCATE TABLE","",$cadena);
    $cadena=trim($cadena);
    $cadena=stripslashes($cadena);
    return $cadena;
}

