# Banco de dados e PHP

## Aula 01

### Usando PDO e criando banco

```php
<?php
$pdo = new PDO('mysql:host=db4free.net:3306;dbname=studies','melicio','melicio1994');

 ?>

```

## Aula 02

### Insert PDO

```php+HTML
<?php
date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

/*
//prepare ajuda a previnir sqlinject
// cria se a variavel(nome só fez referencia ao exemplo), utiliza o objeto do pdo, metodo prepare seguido da query com as instruções em sql
$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,'André','Melicio'.'2019-09-30 13:00:00')");

*/
if(isset($_POST['acao'])){
  $nome=$_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $monento_registro = date('Y-m-d H:i:s');

  //usar ? em um valor DATATIME retorna a hora atual, necessario passar um array para executar
  $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");

  //faz a execução do metodo que preparamos
  //o pdo retira as tags malicioas,e faz inserção segura
  $sql ->execute(array($nome,$sobrenome,$monento_registro));

  echo "Cliente inserido com sucesso!";
}
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
   <head>
     <meta charset="utf-8">
     <title>Cadastro Banco</title>
   </head>
   <body>
     <form method="post">
       <input type="text" name="nome" required>
       <input type="text" name="sobrenome" required>
       <input type="submit" name="acao" value="Enviar!">
     </form>

   </body>
 </html>

```

## Aula 03

### UPDATE e Condições nas queries

```php
<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

//alterar registros no sql
// WHERE = IF condição, quando ...
$id = 1;
$sql = $pdo->prepare("UPDATE `clientes` SET nome = 'André', sobrenome = 'Luiz Melicio' WHERE id = $id");

$sql = $pdo->prepare("UPDATE `clientes` SET nome = 'Mariazinha', sobrenome = 'da Silva' WHERE nome ='Zezinho' AND sobrenome = 'da Silva'");


$sql = $pdo->prepare("UPDATE `clientes` SET nome = 'Fulano', sobrenome = 'da Silva' WHERE nome ='Zezinho' OR nome = 'André'");

if ($sql->execute()) {
  echo "Cliente atualizado com sucesso!";
}

 ?>

```

## Aula 04

### Delete com PDO

```php
<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

$id= 1;
$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id = ?");

//proteção contra sqlinject, querie segura
if($sql->execute(array($id))){

  echo "O cliente foi deletado com sucesso!";
}
 ?>

```

