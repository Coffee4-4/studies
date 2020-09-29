<?php
$nome = 'André';


switch($nome){
    case 'André':
        echo 'Minha variavel é André';
    break;//quebra o cód nesse ponto.
    case 'Joice':
        echo 'Minha variavel é Joice';
    break;
}

//Brack pode ser usado em for, while, do, switch e foreach

for($i=0; $i < 10;$i++){
    echo $i.'<hr>';
    if($i == 5){
    break;
    }
}

for($i=0; $i < 10;$i++){
    if($i == 5){
    continue;
    }
    echo $i.'<hr>';
    
}

?>