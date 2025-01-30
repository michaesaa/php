
<?php
  require_once "./inc/session_start.php";
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include "./inc/head.php";
  ?>
</head>

<body>
  <?php
  // si la variable get no esta definida o esta sin valor 
  // le doy un valor por defecto a la variable en este caso login 
  if (!isset($_GET['vista']) || $_GET['vista'] == "") {
    $_GET['vista'] = "login";
  }

  // para saber si hay un archivo con el mismo nombre de la variable
  if (is_file("./vistas/" . $_GET['vista'] . ".php") &&
    $_GET['vista'] != "login" && $_GET['vista'] != "404"
  ) {
    include "./inc/navbar.php";

    include "./vistas/".$GET['vista'].".php";

    include "./inc/script.php";
  } else {
      if($_GET['vista'] == "login"){
        include "./vistas/login.php";
      }else{
        include "./vistas/404.php";

      }
  }

 
  ?>
</body>


</html>