<?php 

session_name("LOGIN");
// colocarle id
session_id("ph");

session_start();

$_SESSION['sesiones'] = 1;

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
    <?php echo "as recargado".$_SESSION['sesiones']; ?>
<?php echo "esta es la sesion de ".$_SESSION['sesiones']."numer"; ?>

</body>
</html>