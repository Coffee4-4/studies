# PHP Orientado a Objetos

## Aula 01

### **Introdução a orientação a objetos**

**Orientação a Objetos no PHP ou OPP**

```php
procedural

	define();
	$varivael
	func();

ORIENTACAO A OBJETOS NO PHP OU OOP


	Pessoa//objeto, são classes
	{
		nome //atributos
		idade
		peso

		crescer()//metodos
		comer()
	}

```

```php
<?php
class Pessoa{
    //Objeto pessoa
    //atributos
    private $nome = 'André';
    private $idade = '26';
    private $peso = '70kg';
    //metodos
    public function crescer(){
        $this->comer(); //trabalha com um metodo dentro do objeto
        echo 'estou crescendo';
    }
    //private disponivel apenas dentro da class
    private function comer(){
        echo 'estou comendo';
    }
}


//Instanciar, criar o objeto
$pessoa = new Pessoa;
$pessoa2 = new Pessoa;

//chamar o metodo
$pessoa->crescer();


?>
```

## Aula 02

### Public, private e static

`index.php`

```php+HTML
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
```

`exemplo.class.php`

```php+HTML
<?php
class Exemplo{
    private $var1;
    public $var2;
//não pode ser atibuido valores individuais 
    public static $var3 = 'estatico';

//Public funciona em qualquer lugar
    public function metodo(){

    }
//Private só conseguimos acessar dentro da class
    private function metodo2(){

    }
//metodo e função são a mesma coisa
    public static function metodoEstatico(){
        echo 'metodo static';
    }
//fução recebe um parametro
    public function setVar1($var1){
        //faz referencia para utilizar $var1 da class
        $this->var1 = $var1;
        
    }
    public function pegaVar1(){
        return $this->var1;
    }


}


?>
```

## Aula 03

### **Final class, heranças, protected**