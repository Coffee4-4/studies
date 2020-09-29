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