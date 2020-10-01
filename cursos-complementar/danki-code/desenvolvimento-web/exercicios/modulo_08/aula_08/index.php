<?php
define('HOST', 'localhost');
define('DB', 'modulo_08');
define('USER','root');
define('PASS','senha errada');


//Condição segura para conectar ao DB, sem ele um erro de conexão pode mostrar a senha do DB
try {
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")); //opções extras podem ser passadas por um array como UTF8 para corrigir acentuação
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //atributo para mostrar possiveis erros
}catch (Exception $e){
    echo '<h1>Erro ao conectar com DB.</h1>';
}

$sql = $pdo->prepare("SELECT * FROM postsss");

$sql->execute();

?>