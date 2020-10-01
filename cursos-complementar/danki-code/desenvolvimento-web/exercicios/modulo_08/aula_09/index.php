<?php
$pdo =new PDO('mysql:host=localhost;dbname=modulo_08','root','');

//LOCK TABLES bloqueia a tabela até que a ação seja concluida
$pdo->exec("LOCK TABLES `posts` WRITE");
sleep(10);



?>