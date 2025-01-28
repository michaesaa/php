<!-- las cookies se escriben antes del codigo html -->

<?php
   setcookie( "Idioma", "Espanol", time() ); 
   
   
//    setcookie(nombre , valor ,espiracion , dir , dominio, secure ,httponly]);  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
<!-- asi de visual el valor de la cookie despues de creada con setcookie -->
    <h1><?php echo $_COOKIE["Idioma"];?></h1>
</body>
</html>