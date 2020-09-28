<?php

$arr = array('André','Joice','Luiz','   Zezinho');
//percorrer arrays
foreach($arr as $key => $value){
    echo $key;
    echo '=>';
    echo $value;
    echo'<hr>';
}


/*
//criar um chave personalizada
$arr = array('André','chave 4'=>'Joice','Luiz','   Zezinho');
//percorrer arrays
foreach($arr as $key => $value){
    echo $key;
    echo '=>';
    echo $value;
    echo'<hr>';
}*/

// retorna o numero total de valores de um array
$total = count($arr);

for($i=0; $i < $total; $i++){
    echo $arr[$i].'<hr>';
}

?>