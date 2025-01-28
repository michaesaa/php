<?php 


if($_POST['usuario']=='Carlos' && $_POST['USUARIO']=="123456"){
    $_SESSION['nombre']="Carlos";
    $_SESSION['apellido']="los";
    $_SESSION['pais']="brazil";

   echo "session iniciada";
}else{
    echo "datos incorrectos";

}

?>