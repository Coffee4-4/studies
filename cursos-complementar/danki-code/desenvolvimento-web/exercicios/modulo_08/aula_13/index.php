<?php
$conectBD = new PDO('mysql:host=localhost;dbname=modulo_08','root','');
//SUBQUERY validação extra next
$filmes = $conectBD->prepare("SELECT * FROM filmes WHERE categoria_id = (SELECT id FROM categorias WHERE nome = 'terror')");

$filmes->execute();
echo "<pre>";
var_dump($filmes->fetchAll());
echo "</pre>";

 ?>
