<?php

// laço de repetição FOR, inicia uma variavel contadora, contição, incremento.
for($contador=0; $contador < 10; $contador++){
    echo $contador.' - FOR <hr>';
}

//Laço de repetição while

$cont = 0;
while($cont < 10){
    echo $cont.' - While. <hr>';
    $cont++;
}


// DO executa a ação pelo menos uma vez antes de entrar ou não no loop
$ct = 5;
do{
    echo $ct.' - DO <hr>';
    $ct++;
}while($ct < 10);




?>