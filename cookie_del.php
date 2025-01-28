<!-- las cookies se escriben antes del codigo html -->

<?php
// despues de crada podemos determinar el tiempo que va permanecer
//  creada la cooki con time()+60+60*24*30) asi es para un mes

// ver el paht o el directorio donde va a esta la cookie 
// ESAMOS EN EL DOMINIO LOCALHOST


// para metro secure  protocolo seguro con https si esta es false siempre se va a crea 
// sea o no segura la pagina  

// el paramatro httponly es para que no se pueda ver en el navegador si es 
// false  si es true se crea la cookie solo se la vavegacion es segura 

   setcookie( "Idioma", "Espanol", time()+60+60*24*30, "/",  "localhost", false, true); 
   
   
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