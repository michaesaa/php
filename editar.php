<?php

// Inicializa variables
$archivo = isset($_GET['archivo']) ? $_GET['archivo'] : '';
$texto = '';

if (!empty($archivo)) {
    // Si se envía texto, guárdalo en el archivo
    if (isset($_GET['texto'])) {
        file_put_contents($archivo, $_GET['texto']);
    }

    // Leer el contenido del archivo si existe
    if (file_exists($archivo)) {
        $texto = file_get_contents($archivo);
    } else {
        echo "<p>El archivo no existe.</p>";
    }
}

?>

<h1>Editar archivo de texto</h1>

<form>
    <label for="">Nombre del archivo:</label>
    <input type="text" name="archivo" value="<?= $archivo ?>" />

    <br>

    <label for="">Contenido:</label>
    <textarea name="texto"><?= $texto ?></textarea>

    <br>

    <input type="submit" value="Guardar">
</form>

<style>
    textarea {
        width: 310px;
        height: 221px;
    }
</style>
