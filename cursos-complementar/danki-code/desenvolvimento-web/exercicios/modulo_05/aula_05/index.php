<?php
//constante
define('NOME', 'André'); // por padrão digitada em maiusculo, primeiro parametro nome da constante e segundo parametro o valor que ela vai receber
echo NOME;

/*
define('NOME', 'André');//ocorre um erro pois a mesma constante não pode ser declarada duas vezes.
*/
// exemplo de utilização para definir dominio

define('DOMINIO','http://meudominio.com'); //parametros de configuração
?>