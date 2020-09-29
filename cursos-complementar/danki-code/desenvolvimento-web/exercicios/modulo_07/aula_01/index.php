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