<?php
/*
class Dog
{

  function __construct()
  {
    echo "Class Dog";
  }
}


class Cat
{

  function __construct()
  {
    echo "Class Cat";
  }
}

//Singleton pattern
class Animal
{

  public  static function build($nomeClasse){
    if (class_exists($nomeClasse)) {
      return new $nomeClasse;
    }else {
      die('Ops, a class não existe');
    }

  }
}


//new Dog();

//Singleton pattern
Animal::build('Cat');
Animal::build('Mouse');
*/

//Facade

//Adicionar/Fechar Carrinho - Carrinho
//Calcular Frete - Frete
//Fechar Pedido - Pedido

//Temos uma classe responsavel para cada ação

class Carrinho{
  public function fecharCarrinho(){
    echo "carrinho fechado";
  }
}

class Frete{
  public function calcularFrete(){}
}

class Pedido{
  public function fecharPedido(){}
}

class Loja{
  public function finalizarCompra(){
    $this->fecharCarrinho();
    $this-> calcularFrete();
    $this->fecharPedido();

  }

  public function fecharCarrinho(){
    $carrinho = new Carrinho();
    $carrinho->fecharCarrinho();
  }
}


$Loja = new Loja();
$Loja -> finalizarCompra();

 ?>
