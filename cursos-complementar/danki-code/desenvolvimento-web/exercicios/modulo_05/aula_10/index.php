<?php
$nome1 = 'André';
$nome2 = 'Fulano';

//== Operador de igualdade compara dois valores, = atribuição e sempre retorna verdadeiro 
if($nome1 == $nome2){
    echo'Execute tal ação';
}

//Se um valor for diferente do outro
if($nome1 != $nome2){
    echo'É diferente <br/>';
}

$valor1 = 10;
$valor2 = '10';
//Confere se são iguais, mesmo valor
if($valor1 == $valor2){
    echo 'Verdade str + int';
}
//Confere se são identicos, mesmo valor e tipo
if($valor1 === $valor2){
    echo 'Verdade str + int';
}else{
    echo'<br/> Não são identicos';
}

//comparamos para ver se são diferentes tipos e valor
if($valor1 !== $valor2){
    echo '<br/> Verdade';
}
// Compara apenas os valores
if($valor1 != $valor2){
    echo '<br/> Verdade';
}else{
    echo '<br/> Falso';
}
?>