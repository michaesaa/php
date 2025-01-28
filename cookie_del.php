<!-- las cookies se escriben antes del codigo html -->

<?php
// despues de crada podemos determinar el tiempo que va permanecer
//  creada la cooki con time()+60+60*24*30) asi es para un mes
   setcookie( "Idioma", "Espanol", time()+60+60*24*30); 
   
   
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