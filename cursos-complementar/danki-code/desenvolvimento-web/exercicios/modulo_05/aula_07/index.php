<?php
$frase = 'Meu nome é ';
$nome = 'André ';
$idade = 26;
$nomedaclasse = 'box';

define('NOME', 'João');

// . serve para unir a variavel e a string
echo $frase.$nome.$idade;

echo 'Olá meu nome é '.$nome;
echo 'Olá meu nome é '.NOME;
echo "Meu nome é $nome"; //Com " ele indentifica a variavel dentro da cadeia de string

echo "<div class=\"$nomedaclasse\">Meu conteudo da div</div>"; // class=\"$nomedaclasse\"> uso da \ para evitar conflitos no HTML


?>