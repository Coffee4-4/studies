<?php
// unir um ou mais arrays
$array1 = array("chave1"=>"valor1", "chave2"=> "valor2");
$array2 = array("chave3"=>"valor3","chave4"=>"valor4");
$result = array_merge($array1, $array2);
print_r($result);


//array intersect key serve para retorna valorescom a mesma chave em 1 ou mais arrays, retorna sempre o valor da primeira chave
$array1 = array("chave1"=>"valor1", "chave2"=> "valor2");
$array2 = array("chave1"=>"qualquer valor","chave4"=>"valor4");

print_r(array_intersect_key($array1,$array2));


$arr = ['<p>andre</p>','<h1>joice</h1>','mariazinha'];

// primeiro parametro nome da função, segundo parametro o array
//array map serve para aplicar uma funcao em todos os valores do array
print_r(array_map('strip_tags',$arr));

?>