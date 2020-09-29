<?php
// Trabalhando com datas 


//função interna do PHP, parametros são o formato da data e hora que queremos questão do fuso horário deve ser definido no inicio do cód.

// definindo o fuso horario

date_default_timezone_set('America/Sao_Paulo');
//pega hora atual 
$data = date('d/m/Y H:i:s');

//modificar a hora e data atual, time() + acrescimo de tempo em seg
$data = date('d/m/Y H:i:s',time()+(60*10));
//echo $data;


//body do html é carregado dinamicamente pelo php.

$titulo = 'Meu Titulo hehe';

//incluir arquivos na página 
include('header.php');

?>

<h1>Meu conteudo da home.</h1>


<?php

include('footer.php')
?>