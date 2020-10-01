<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

$id= 1;
$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id = ?");

//proteção contra sqlinject, querie segura
if($sql->execute(array($id))){

  echo "O cliente foi deletado com sucesso!";
}
 ?>
