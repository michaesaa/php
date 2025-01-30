<?php 
session_start();


if($_POST['usuario']=='Carlos' && $_POST['clave']=="123456"){
    $_SESSION['nombre']="Carlos";
    $_SESSION['apellido']="los";
    $_SESSION['pais']="brazil";

   echo "session iniciada";
}else{
    echo "datos incorrectos";

}

?>