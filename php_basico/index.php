<?php 

session_name("LOGIN");
// colocarle id
session_id("ph");

session_start();

$_SESSION['sesiones'] = 1;
$_SESSION['usuario']=='Carlos';

if(isset($_SESSION['sesiones'])){
    $_SESSION['sesiones'] ++;

}else{
    $_SESSION['sesiones'] = 1;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="">Usuario</label>
        <input type="text" name="usuario">
        <br>
        <label for="">Contraseña</label><input type="password" name="contraseña"></label>


    </form>
</body>
</html>