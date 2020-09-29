<?php
//sessão é quando o navegador guarda um valor em uma variavel mesmo que o usuario feche a aba, e volte, este valor ainda estará lá ele só é destruido quando fecha o navegador

//cookies e quando criamos uma variavel e dizemos quanto tempo ele ficara armazenada no computador da pessoa mesmo depois que feche o navegador.

//declaração de sessão

session_start();
/*
$_SESSION['nome'] = 'André';
$_SESSION['idade'] = 26;
*/

//nome da variavel, valor, e tempo de expiração em seg, caminho / quer dizer acessivel a todoas as pág.
setcookie('nome','André',time()+(60*60),'/');
//para destuir um cookei utiliza se um tempo negativo
setcookie('nome','André',time()-(60*60),'/');

echo $_COOKIE['nome'];

?>