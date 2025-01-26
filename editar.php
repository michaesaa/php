<?php

$archivo = 'texto.txt';

file_put_contents($archivo,$_GET['texto']);

$texto = file_get_contents($archivo);



?>

<h1>Editar archivo de texto</h1>


<form> 
<textarea name="texto">
<?= $texto ?>
</textarea>

<input type="submit" value="guardad">

</form>