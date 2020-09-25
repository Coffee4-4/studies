<?php
// Arrays = Váriaveis com diversas chaves

$nome = array('André','Joice','Mariazinha','Joãozinho'); // declaração antiga do PHP

echo $nome[1];// indice 0 ... n

$nome[] = 'Felipe'; // adiciona novos valores ao array
$nome[] = 'João'; // proximo indicie

echo $nome[3];
echo $nome[4];
echo $nome[5];

$nome[0] = 'Joice'; // escolher o indice

$nome[100] = 'Felipe';

echo $nome[100];


$variaveis = ['Guilherme', 'Joao', 'Felipe']; // nova forma de declarar array

echo $variaveis[0];



$variaveis = array('Guilherme',23,true,10.09); // pode conter diversos tipos de valores
echo $variaveis[3];

//o indice também pode ser nomeado

$informacao['nome'] = 'Guilherme';
$informacao['idade'] = 23;
$informacao['cidade'] = 'Florianópolis';

echo '<br/>';
echo $informacao['nome'];
echo'<br/>';
echo $informacao['idade'];
echo '<br/>';
echo $informacao['cidade'];


?>