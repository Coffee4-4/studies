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

