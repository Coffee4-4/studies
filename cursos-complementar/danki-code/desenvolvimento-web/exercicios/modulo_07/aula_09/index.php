<?php

class minhaClasse
{
  //declarção de constante
  const VALOR = 300;
  public function __construct()
  {
    echo self::VALOR;
  }
}

echo minhaClasse::VALOR;
 ?>
