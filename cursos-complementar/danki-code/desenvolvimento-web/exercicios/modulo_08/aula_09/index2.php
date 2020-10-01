<?php
$pdo =new PDO('mysql:host=localhost;dbname=modulo_08','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql = $pdo->prepare("SELECT * FROM `posts`");
$sql->execute();

$titulo = $sql->fetchAll();
foreach ($titulo as $key => $value){
    echo $value['titulo'];
    echo '<hr>';
}


?>