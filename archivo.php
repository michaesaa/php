<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>subir archivo</h1>
    <form action="carga.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fichero">
        <button type="submit">Cargar archivo</button>
    </form>
</body>

</html>