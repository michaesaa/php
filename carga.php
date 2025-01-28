<?php 

// archivo de destino para subir

// recibir el nombre 
// if (isset($_FILES['fichero'])) {
//     $archivo = $_FILES['fichero'];
//     echo "Nombre del archivo: " . $archivo['name'];
// } else {
//     echo "No se ha seleccionado ningún archivo.";
// }
// echo "<br>";
// // recibe el archivo tempora de la ruta
// echo $_FILES['fichero']['tmp_name']. "<br>";
// // tipo de archivo
// echo $_FILES['fichero']['type']. "<br>";
// // tipo error 
// echo $_FILES['fichero']['error']. "<br>";
// // tamaño en bites
// echo $_FILES['fichero']['size']. "<br>";

// procesar archivo 

// validar si el directorio exixte 


// para declarar el tipo de contenido de mine type
if(mime_content_type($_FILES['fichero']['tmp_name'])!="image/jpg" && 
mime_content_type($_FILES['fichero']['tmp_name'])!="image/png")
{
echo "El archivo no es una imagen";
exit();
}







if(!file_exists('archivo/')) {
    if(!mkdir('archivo/',0077)) {
        echo "Error al crear el directorio";
        exit();
    }
}

// funcion para darle permisos a un archivo o directorio
chmod("archivo/", 0077);

// mover el archivo a la carpeta archivos 

if(move_uploaded_file($_FILES['fichero']['tmp_name'], "archivo/" . $_FILES['fichero']['name'])) {
    echo "El archivo se ha subido correctamente";
}else{
    echo "el archivo no se pudo subir correctamente";

}
?>