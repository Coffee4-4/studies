<?php
function myAutoLoad($class){

  //mudança na \ do diretorio para que não tenha problema com servidores linux ao ler diretorios
  $class = str_replace('\\','/',$class);
  echo $class;
  //verifica se o arquivo existe
  if (file_exists('classes/'.$class.'.php')) {
    //faz o include
    include('classes/'.$class.'.php');
  }

}

//registra a função para o php chamar automaticamente
spl_autoload_register('myAutoLoad');
 ?>
