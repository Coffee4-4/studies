<?php
//declarar o nome da class em maiusculo é uma boa pratica

//abstract não pode ser instanciada ela é apenas herdada
abstract class Teste{
    public  function func1(){
        echo 'chamando função 1';
    }
    abstract function func2();
}
class Principal2{
    public static function outroMetodoEstatico(){
        echo 'meu outro metodo';
    }
}


class Principal extends Teste{
    //quando herda um metodo abstract é necessario declarar ele na classe principal
    public function func2(){
        echo 'estou declarando oficialmente um metodo abstrato';
    }
    public static function metodoestatico(){
        echo'metodo estatico';

    }

    public function funcao(){
        //Principal::metodoestatico();
        //self e usado para acessar um metodo estatico que esta apenas disponivel para essa classe
        self::metodoestatico();

        Principal2::outroMetodoEstatico();

    }
}


$principal = new Principal;
$principal->func1();

$principal->func2();
$principal->funcao();

?>