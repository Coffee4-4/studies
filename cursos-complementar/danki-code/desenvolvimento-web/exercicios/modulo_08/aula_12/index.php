<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');
//HAVING == permite inserir uma condição
$select = $pdo -> prepare("SELECT * FROM clientes GROUP BY cargo HAVING pontos > 40");

$select->execute();

echo "<pre>";
print_r($select->fetchAll());
echo "</pre>";
 ?>
