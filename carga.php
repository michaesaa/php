<?php 

// archivo de destino para subir

// recibir el nombre 
if (isset($_FILES['fichero'])) {
    $archivo = $_FILES['fichero'];
    echo "Nombre del archivo: " . $archivo['name'];
} else {
    echo "No se ha seleccionado ningún archivo.";
}
echo "<br>";
// recibe el archivo tempora de la ruta
echo $_FILES['fichero']['tmp_name']. "<br>";
// tipo de archivo
echo $_FILES['fichero']['type']. "<br>";
// tipo error 
echo $_FILES['fichero']['error']. "<br>";
// tamaño en bites
echo $_FILES['fichero']['size']. "<br>";

// obtener el nombre del archivo

?>