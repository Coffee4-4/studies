<?php
// Array single.
$arr = ['andre','joice'];
$arr = array('andre', 'chave2'=>'joice');

$arr[0]= 'joice';
$arr[]= 'andre';

//Arrays Multidimensionais

$arr2 = array(array('andre','joice'),array(23,26));
//array nomes se torna um indice no caso indice 0
echo $arr2 [0][1];
// array idade recebe indice 1

echo ' '.$arr2 [1][1];

$arr2[0] = array('chave1'=>'andre','joice');


$arr2[0]['chave2'] = 'André';
echo $arr2[0]['chave1'];
echo $arr2[0]['chave2'];



?>