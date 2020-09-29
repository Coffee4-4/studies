<?php
session_start();//recuperar valores e escrever novos valores.

//verificando se uma session existe

if(isset($_SESSION['nome'])){
    echo $_SESSION['nome'];
}

$_SESSION[0]['nome'] = 'andre';

$_SESSION['nome']=''; // limpar uma sessão, porem ainda na memoria do servidor

unset($_SESSION['nome']); //limpa a sessão da memoria do servidor

session_destroy(); // elimina todas as sessões abertas

//echo $_SESSION['nome'];
?>