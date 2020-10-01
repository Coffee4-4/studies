<?php
$pdo =new PDO('mysql:host=localhost;dbname=modulo_08b','root','');

// ` -> permite o uso de caracteres especiais
$sql = $pdo->prepare("SELECT * FROM `clientes` WHERE nome LIKE '%jo%'");
$sql->execute();

$nomes = $sql -> fetchAll();
print_r($nomes);

?>