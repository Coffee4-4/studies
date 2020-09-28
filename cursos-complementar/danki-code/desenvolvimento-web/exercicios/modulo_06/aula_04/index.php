<?php

//Criação de funções
// pode ser passado quantos parametros forem necessarios, parametros são variaveis locais da função
function mostraNome($nome,$idade){
    echo '<h2> Nome é </h2>'.$nome;
    echo '<br/>idade: '.$idade;
}
//valores podem ser pré definidos na função
function calculadora($num1=10,$num2=5){

    echo ($num1 + $num2);

}

//podemos passar novos parametros para a função mesmo que tenhamos valores pré definidos
calculadora(1,11);


$named='André';
//pode ser passado variaveis ou valores diretos
mostraNome($named,26);

function verdade(){
    return true;
    //pode retornar qualquer coisa
}
$var1 = verdade();
function str(){
    return 'André';
}
echo str();
?>