# PHP Intermediário 

## Aula 01

### Foreach e For para arrays

```php+HTML
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
```

## Aula 02

### Array Multidimensional 

### Die e Sleep

```php+HTML
<?php
// mata a execução do cod.
$nome = 'andre';
if($nome == 'fulano'){
    //continua o codigo
    echo 'Tudo certo.';
}else{
    die("O script parou de ser executado.");
}



//permite atrasar o cód., número em segundos.
sleep(3);
echo'Olá';

sleep(4);
echo 'Olá 2!';

?>
```

## Aula 04

### Entendendo funções nativas e criando funções

```php+HTML
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
```

