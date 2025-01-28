<?php
//  creamos sesiones para login 
// son archivos que se alojan en el servidor 

// se guarda el id de la session por medio de una cokki para conectar con el servidor


// colacarle nombre a la session con session_name
session_name("con");

// colocarle id
session_id("ph");

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>session</h1>
    <?php echo session_id(); ?>
    <br>
    <a href="index.php">Inicio</a>
    <br>
    <a href="cerrar.php">Eliminar sesion</a>
</body>
</html>