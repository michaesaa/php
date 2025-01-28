<!-- vamos a eliminar la cookie -->
<?php 


// si cuando le colocamos esto time()-60, le decimos que se elimine antesd de crearse
setcookie( "Idioma", "Espanol", time()-60, "/",  "localhost", false, false); 

?>