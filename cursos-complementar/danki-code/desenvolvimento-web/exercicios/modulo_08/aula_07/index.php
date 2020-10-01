<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_08b', 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//LEFT faz uma junção entre A e B onde a projeção serão todos os elementos de A, independente se estão ou não em B.
//RIGHT contrario do LEFT
//INNER condição exata,que retorna dados apenas quando as duas tabelas tem chaves correspondentes na cláusula ON do join.
$sql = $pdo->prepare("SELECT *FROM `clientes` LEFT JOIN `cargos` ON `clientes`.`cargo` = `cargos`.`id`");
$sql->execute();
$clientes = $sql->fetchAll();
foreach ($clientes as $key => $value) {
  echo $value['nome'];
  echo " | ";
  echo $value['nome_cargo'];
  echo "<hr>";
}

 ?>
