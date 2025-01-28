<?php
//  creamos sesiones para login 
// son archivos que se alojan en el servidor 


session_start();

// se guarda el id de la session por medio de una cokki para conectar con el servidor





// crear variable de session 
$_SESSION['sesiones'] = "javier";




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
    <br>
    <?php echo "esta es la sesion de ".$_SESSION['sesiones']."numer"; ?>
    <br>
    <a href="index.php">Inicio</a>
    <br>
    <a href="cerrar.php">Eliminar sesion</a>
</body>
</html>