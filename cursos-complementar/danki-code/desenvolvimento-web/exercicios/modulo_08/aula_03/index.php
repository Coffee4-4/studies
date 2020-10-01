<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

//alterar registros no sql
// WHERE = IF condição, quando ...
$id = 1;
$sql = $pdo->prepare("UPDATE `clientes` SET nome = 'André', sobrenome = 'Luiz Melicio' WHERE id = $id");

$sql = $pdo->prepare("UPDATE `clientes` SET nome = 'Mariazinha', sobrenome = 'da Silva' WHERE nome ='Zezinho' AND sobrenome = 'da Silva'");


$sql = $pdo->prepare("UPDATE `clientes` SET nome = 'Fulano', sobrenome = 'da Silva' WHERE nome ='Zezinho' OR nome = 'André'");

if ($sql->execute()) {
  echo "Cliente atualizado com sucesso!";
}

 ?>
