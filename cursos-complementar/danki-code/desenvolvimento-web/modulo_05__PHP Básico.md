# PHP Básico

## Aula 01

> `index.php` é o arquivo base é o primeiro a ser carregado. 

```php+HTML
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha página de teste</title>
</head>
<body>
    
    <p>Olá mundo!</p>

    <p>
    <?php //TAG de abertura do php
        echo 'Olá mundo! Em PHP ;)'; // escreve no html

    ?>
    </p>

</body>
<script type="text/javascript">
    alert('Olá Mundo!');
</script>


</html>
```

## Aula 02

> **Variáveis** são espaços na memoria que variam de acordo com a execução do nosso código.

```php+HTML
<?php

echo $_SERVER['SERVER_NAME']; //Nome do dominio 
echo $_SERVER['DOCUMENT_ROOT']; //Nome do caminho

//mostrar todos as variaveis dentro de uma variavel 
echo '<pre>'; //pre formatado
print_r($_SERVER);
echo '</pre>';
// diversos dados do servidor

?>
```

## Aula 03

### Variáveis 

```php+HTML
<?php
//declaração da variavel e atribuição de str
$nome = 'André';
echo 'Meu nome é <br/>';
echo $nome; //mostra a variavel na tela

$nome = 'Fulano'; // muda o valor da variavel 
echo '<br/>';
echo 'Meu nome é <br/>';
echo $nome;
//string
$idade = '26';
echo $idade;

//Valores inteiro
$idade = 26;
echo $idade;


?>
```

## Aula 04

### Variáveis 

```php+HTML
<?php
//string
$nome = 'André';

// Número inteiro
$idade = 26;
//Boolean
$bool = true; // 1
$bool = false; // 0
echo $bool;

//Numeros reais
$double = 10.09;
echo $double;

//Concatenar duas variaveis 
echo 'Meu nome é '.$nome.' tenho '.$idade.' anos.';


?>
```

## Aula 05 

### Constantes

> Não muda durante a execução do código , é declarada um única vez e não pode ser alterada. 

```php+HTML
<?php
//constante
define('NOME', 'André'); // por padrão digitada em maiusculo, primeiro parametro nome da constante e segundo parametro o valor que ela vai receber
echo NOME;

/*
define('NOME', 'André');//ocorre um erro pois a mesma constante não pode ser declarada duas vezes.
*/
// exemplo de utilização para definir dominio

define('DOMINIO','http://meudominio.com'); //parametros de configuração
?>
```

## Aula 06

### Arrays

```php+HTML
<?php
// Arrays = Váriaveis com diversas chaves

$nome = array('André','Joice','Mariazinha','Joãozinho'); // declaração antiga do PHP

echo $nome[1];// indice 0 ... n

$nome[] = 'Felipe'; // adiciona novos valores ao array
$nome[] = 'João'; // proximo indicie

echo $nome[3];
echo $nome[4];
echo $nome[5];

$nome[0] = 'Joice'; // escolher o indice

$nome[100] = 'Felipe';

echo $nome[100];


$variaveis = ['Guilherme', 'Joao', 'Felipe']; // nova forma de declarar array

echo $variaveis[0];



$variaveis = array('Guilherme',23,true,10.09); // pode conter diversos tipos de valores
echo $variaveis[3];

//o indice também pode ser nomeado

$informacao['nome'] = 'Guilherme';
$informacao['idade'] = 23;
$informacao['cidade'] = 'Florianópolis';

echo '<br/>';
echo $informacao['nome'];
echo'<br/>';
echo $informacao['idade'];
echo '<br/>';
echo $informacao['cidade'];


?>
```

## Aula 07 

### Concatenação

```php+HTML
<?php
$frase = 'Meu nome é ';
$nome = 'André ';
$idade = 26;
$nomedaclasse = 'box';

define('NOME', 'João');

// . serve para unir a variavel e a string
echo $frase.$nome.$idade;

echo 'Olá meu nome é '.$nome;
echo 'Olá meu nome é '.NOME;
echo "Meu nome é $nome"; //Com " ele indentifica a variavel dentro da cadeia de string

echo "<div class=\"$nomedaclasse\">Meu conteudo da div</div>"; // class=\"$nomedaclasse\"> uso da \ para evitar conflitos no HTML


?>
```

## Aula 08

### Operações  Matemáticas

```php+HTML
<?php
$numero = 10 + 5;
$numero2 = 10 - 5;

$resultado = $numero+$numero2;
$resultado2 = $numero/$numero2;

echo $numero;
echo'<br/>';
echo $numero2;
echo'<br/>';
echo $resultado;
echo'<br/>';
echo $resultado2;
echo'<br/>';

$expressao = (10 +20 + 30) * 2; // ordem de precedencia primeiro divisão e multiplicação

echo $expressao;

$expressao = 10 +20 + 30 * 2; // ordem de precedencia primeiro divisão e multiplicação
echo'<br/>';
echo $expressao;

$resto = 4 % 2; // restp da divisão
echo'<br/>';
echo $resto;

?>
```

## Aula 09

### Condições 

```php+HTML
<?php
$variavel1 = 'André';
$variavel2 = 'Luiz';

if($variavel1 == $variavel2){
    //utilizando estilos css dentro do html na linguagem PHP
    echo '
    div style="width:300px;height:300px;background:red;0">
    
        <h1>Estou dentro do IF</h1>
    
    </div>';
}else{
    echo 'A condição não bate';
}

if($variavel1 == 'André'){
    //utilizando estilos css dentro do html na linguagem PHP
    echo 
    '<div style="width:300px;height:300px;background:red;">
    
        <h1>Estou dentro do IF</h1>
    
    </div>';
}else{
    echo 'A condição não bate';
}

//Executar um trecho em HTML se uma condição for satisfeita

if('André'==$variavel1){

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
</head>
<body>
    <div style="font-size: xx-large; background:green;width:200px;margin:5px">
    Sou um trecho em HTML puro.
    </div>
</body>
</html>

<?php
}
?>


<?php
$var1 = 10 + 5;
$var2 = '10 + 5';
if($var1 == $var2){
    echo 'Verdade';
}else if($var1 != $var2){
    echo'verdade condição else if';

}else{
    echo 'Falso';
}

?>
```

## Aula 10

### Operadores 

```php+HTML
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
```

## Aula 11

### Operadores matemáticos e lógica

```php+HTML
<?php

$num1 = 10;
$num2 = 11;


//Operadores Matematicos
if($num1 < $num2){
    //Execute
}else{}

if($num1 <= $num2){
    echo'execute';
}else{}
if($num1 > $num2){
    echo'execute';
}else{}
if($num1 >= $num2){
    echo'execute';
}else{}


//Operadores logicos 

$var1 ='valor1';
$var2 ='valor1';
$var3 ='valor1';
//Operador logico 'E'
if(($var1 == $var2)&&($var2 == $var3)){
    echo 'Verdade';
}
//Operador logico 'OU'
if(($var1 == $var2)||($var2 == $var3)){
    echo 'Verdade';
}


?>
```

## Aula 12

### Loopings

```php+HTML
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
```

