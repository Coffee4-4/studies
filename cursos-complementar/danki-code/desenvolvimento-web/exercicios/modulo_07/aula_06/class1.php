<?php

//__construct ao instanciar o objeto o primeiro metodo a ser procurado, metodo construtor
class class1
{
    private $nome;
    private $idade;
    //metodos magicos, que vem com a class
    public  function __construct($nome,$idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getNome(){
        return $this->nome;
    }

    public function getIdade(){
        return $this->idade;
    }
}


?>