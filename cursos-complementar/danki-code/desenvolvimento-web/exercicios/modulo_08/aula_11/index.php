<?php
//BETWEEN == Bom para datas
$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

/*
//IN = SELECIONE TUDO ENTRE (X,Y,Z)
$sql = $pdo->prepare("SELECT * FROM clientes WHERE id IN (1,3)");
*/
//Consulta por datas
$sql = $pdo->prepare("SELECT * FROM clientes WHERE momento_registro BETWEEN '2020-08-01' AND '2020-10-01'");

$sql->execute();
$clientes = $sql->fetchAll();

print_r($clientes);



 ?>
