<?php
include('Class1.php');
include('Class2.php');
/*
//Session da o contexto de diretorio para a Class
$class1 = new \Sessao1\Class1();
*/

//e possivel dar um apelido para a class 
use \Sessao1\Class1 as classe_exemplo;
$class1 = new classe_exemplo;
?>