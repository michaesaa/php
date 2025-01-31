<?php
function conexion()
{
    $pdo = new PDO('mysql:host=localhost;dbname=inventario', 'root', password: '');
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

function limpiar_cadena($cadena)
{
    // sirve para eliminar espacion en blanco al inicio y final de la cadena
    $cadena = trim($cadena);
    // sirve para eliminar las barras invertidas
    $cadena = stripslashes($cadena);
    // sirve para para remplzar caracteres en nuestra cadena
    $cadena = str_ireplace("<script>", "", $cadena);
    $cadena = str_ireplace("</script>", "", $cadena);
    $cadena = str_ireplace("</script src", "", $cadena);
    $cadena = str_ireplace("</script type=", "", $cadena);
    $cadena = str_ireplace("<SELECT * FROM", "", $cadena);
    $cadena = str_ireplace("DELETE FROM", "", $cadena);
    $cadena = str_ireplace("<INSERT INTO", "", $cadena);
    $cadena = str_ireplace("<DROP TABLE", "", $cadena);
    $cadena = str_ireplace("<DROP DATABASE", "", $cadena);
    $cadena = str_ireplace("<TRUNCATE TABLE", "", $cadena);
    $cadena = trim($cadena);
    $cadena = stripslashes($cadena);
    return $cadena;
}

// funciones para renombrar nombre de las fotos 

function renombrar_fotos($nombre)
{
    $nombre = str_ireplace(" ", "_", $nombre);
    $nombre = str_ireplace("/", "_", $nombre);
    $nombre = str_ireplace("#", "_", $nombre);
    $nombre = str_ireplace(".", "_", $nombre);
    $nombre = str_ireplace(",", "_", $nombre);
    $nombre = $nombre . "_" . rand(0, 100);
    return $nombre;
}


// funcion para paginador de tablas 
// condicion de es menor o es 1 nomuestre el boton el cual va a aparecer como is_disable  disable

function paginador_tablas($pagina, $Npaginas, $url, $botones)
{
    $tabla = '<nav class="pagination is-centered is-rounded" role="navigation" aria-label="pagination">';

    if ($pagina <= 1) {
        $tabla .= '<a class="pagination-previous is-disable" disabled Anterior</a>
        <ul class="pagination-list">';

    } else {
        $tabla .= '<a class="pagination-previous" href="' . $url . ($pagina - 1) . '">Anterior</a>
        <ul class="pagination-list">
        <li><a class="pagination-link" href="' . $url . '1">1</a></li>
        <li><span class="pagination-ellipsis">&hellip;</span></li>
        ';
    }

    // boton de siguiente
    if ($pagina == $Npaginas) {
        $tabla .= '
        </ul>
        <a class="pagination-next" is-disabled" disabled >Siguiente</a>
        ';
    } else {
        $tabla .= ' 
        <li><span class="pagination-ellipsis">&hellip;</span></li>
        <li><a class="pagination-link" href="'.$url.$Npaginas.'">'.$Npaginas.'</a></li>
	

        </ul>
        <a class="pagination-next" href="' . $url . ($pagina + 1) . '">Siguiente</a>';
    }








    $tabla .= '</nav>';
    return $tabla;
}

