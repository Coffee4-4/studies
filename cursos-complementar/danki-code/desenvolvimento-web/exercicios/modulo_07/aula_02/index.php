<?php
//adicionando o arquivo da class para poder ser utilizado include('/caminho')
include('exemplo.class.php');

//Instancia de objeto, pode se passar parametros na criação da class 
$exemplo = new Exemplo();
//chamar atributos de uma classe, 'variaveis'
//$exemplo -> var1 = 'Olá'; // retorna um erro pos o atributo esta apenas disponivel dentro da class 

// não retorna erro pos a variavel é publica e pode ser acessada fora da class
$exemplo->var2 = 'André';

echo $exemplo->var2;
//variaveis diferentes armazenam o mesmo objeto porém tem valores diferentes.
$exemplo2 = new Exemplo;
$exemplo2->var2='joice';
echo'</br>';
echo $exemplo2 ->var2;
echo'</br>';

//static não é acessivel através da estancia criada
//não pode ser atibuido valores individuais 
//echo $exemplo -> var3;

//chamar um atributo static atraves da class
echo Exemplo::$var3;
//possivel alterar seu valor de forma direta e não em forma de class
Exemplo::$var3 = 'Outra variavel';
echo Exemplo::$var3;
//não precisa instanciar a variavel para chamar o metodo
Exemplo::metodoEstatico();


$exemplo ->setVar1('Exemplo');//setando o metodo com valor 
echo $exemplo->pegaVar1();// exibe o metodo com retorno

$exemplo2 = new Exemplo;
$exemplo2 ->setVar1('Exemplo 2');
echo $exemplo2->pegaVar1();

?>