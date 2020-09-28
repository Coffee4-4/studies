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

## Aula 05

### Utilizando include e date

`index.php`

```php+HTML
<?php
// Trabalhando com datas 


//função interna do PHP, parametros são o formato da data e hora que queremos questão do fuso horário deve ser definido no inicio do cód.

// definindo o fuso horario

date_default_timezone_set('America/Sao_Paulo');
//pega hora atual 
$data = date('d/m/Y H:i:s');

//modificar a hora e data atual, time() + acrescimo de tempo em seg
$data = date('d/m/Y H:i:s',time()+(60*10));
//echo $data;


//body do html é carregado dinamicamente pelo php.

$titulo = 'Meu Titulo hehe';

//incluir arquivos na página 
include('header.php');

?>

<h1>Meu conteudo da home.</h1>


<?php

include('footer.php')
?>
```

 

`header.php`

```php+HTML
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  é possivel importar variaveis da index em outros arquivos que estão no include -->
    <title><?php echo $titulo;?></title>
</head>
<body>
<p>Aqui pé meu header</p>

```

`footer.php`

```html
<p>Aqui é meu footer</p>    
</body>
</html>
```

## Aula 06

### Funções para strings

```php+HTML
<?php
$conteudo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti necessitatibus fugit modi velit quaerat minima et optio aspernatur, iure dicta autem totam tempora, ex possimus non enim nulla animi expedita.';

// recortando partes de uma string

echo substr($conteudo,0,20);

//recortar com base em espaços
$nome = 'André Luiz Melicio';
// primeiro parametro local de corte, variavel, retorna um array
$nomes = explode(' ',$nome);
// ver o array inteiro
print_r($nomes);


//juntar um array com um delimitador no caso o espaço
$nomes = implode(' ',$nomes);


$conteudo = '<h1>André</h1>';


echo $conteudo;
//strip_tags limpa tags HTML e mantem o conteudo
echo strip_tags($conteudo);

echo $nomes;

//htmlentities mostra o codigo html na pagina
echo htmlentities('<div></div>');


?>
```

## Aula 07

### Switch, continue e break

```php+HTML
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
```

## Aula 08

### Funções para manipular arrays

```php+HTML
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
```

## Aula 09

### Formulários, GET e POST