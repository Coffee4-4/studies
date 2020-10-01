<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_08b','root','');
//mostra os erros do PDO
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//GROUP BY faz agrupamentos como cargo ou seja não pega valores repetidos
//LIMIT limita a quantidade de dados que sera tornado
//$sql = $pdo->prepare('SELECT * FROM `clientes` GROUP BY cargo LIMIT 1');

/*
//ORDER BY id ASC == Retorna em ordem crescente de id
//DESC para ordem decrescente
$sql = $pdo->prepare('SELECT * FROM `clientes` ORDER BY nome DESC');

*/
/*
$sql = $pdo->prepare('SELECT * FROM `clientes` GROUP BY cargo ORDER BY nome DESC LIMIT 3');

*/
//LIMIT indice,quantidade
$sql = $pdo->prepare('SELECT * FROM `clientes` ORDER BY nome DESC LIMIT 1,3');
$sql->execute();
$clientes = $sql->fetchAll();

foreach ($clientes as $key => $value) {
  echo $value['nome'];
  echo "<hr>";
}


 ?>
