<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

/*
//query == comando usado para criar tabela, puxar tabelas existentes

//exibir todas as tabelas
$allTable = $pdo->query('SHOW TABLES');

$result = $allTable->fetchAll();
echo "<pre>";
print_r($result);
echo "</pre>";
*/
$sql = 'CREATE TABLE MyGuests(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
reg_date TIMESTAMP

)';

//executa o comando da variavel $sql
$pdo->exec($sql);



 ?>
