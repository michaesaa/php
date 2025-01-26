<?php

// obtener datos por la url 
$_GET['texto'];



// leer archivo de textp

$texto = file_get_contents('texto.txt');

echo $texto;

// para modificarlo 

$textoNuevo = file_put_contents('texto.txt', 'texto modificado');

echo $textoNuevo;
?>

<h1>Editar archivo de texto</h1>


<form> 
<textarea name="texto">
<?= $texto ?>
</textarea>

<input type="submit" value="guardad">

</form>