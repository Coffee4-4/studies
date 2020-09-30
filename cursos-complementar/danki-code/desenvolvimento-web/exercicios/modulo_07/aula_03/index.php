<?php

//final não permite que a class seja herdada
/*final*/ class Filha{


    protected function funcaoTeste(){
        echo 'chamando função teste';
    }

    public function printHello(){
        echo 'Olá Mundo!';
    }

}
// Não é possivel fazer uma class herdar uma classe final

//extends indica que a class PAI ira herdar os metodos da class FILHA
class Pai extends Filha {
    public function printHello()
    {
        //para chamar a função original
        parent::printHello();
        echo 'nova função';
    }

    public function mostrarTchau(){
        echo'Tchau Mundo!';
        echo'<br/>';
        $this->funcaoTeste();
    }
}
/*
$pai = new Pai;
$pai->mostrarTchau();
*/

//Instanciar class final

$filha = new Filha;
$filha->printHello();

//ao herdar a classe Filha a class Pai tem acesso a todos metodos da classe herdada
$pai = new Pai;
$pai->printHello();
$pai->mostrarTchau();

?>



