<?php 

$pdo = new PDO('mysql:host=localhost;dbname=inventario', 'root', '');

$pdo->query("INSERT INTO categoria(categoria_nombre,categoria_ubicacion) VALUES('Computadoras','Oficina')");

?>