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

## Aula 05	

### Select, Inner Join e mais conceitos

```php+HTML
<?php

$pdo= new PDO('mysql:host=localhost;dbname=modulo_08','root','');

// * == selecionar todas as colunas
$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = ?");
$sql->execute(array($_GET['categoria_id']));

//slelecionando apenas algumas colunas

//$sql = $pdo->prepare("SELECT `titulo`,`posts` FROM posts");

//puxar todas as informações
$info = $sql->fetchAll();


echo "<pre>";
print_r($info);
echo "<pre>";



//manipulando as informações vindas do banco $key == incice
foreach ($info as $key => $value) {
  echo 'Titulo: '.$value['titulo'];
  echo "<br>";
  echo "Categoria: ".$value['categoria_id'];
  echo "<br>";
  echo "Noticia: ".$value['conteudo'];
  echo "<hr>";
  }


//count contar o tamanho do array
  for ($i=0; $i<count($info); $i++) {
    echo 'Titulo: '.$info[$i]['titulo'];
    echo "<br>";
    echo "Categoria: ".$info[$i]['categoria_id'];
    echo "<br>";
    echo "Noticia: ".$info[$i]['conteudo'];
    echo "<hr>";
  }


$sql = $pdo->prepare("SELECT * FROM categoria");
$sql->execute();
$info = $sql->fetchAll();


//unir duas tabelas usando programação
foreach ($info as $key => $value) {
  $categoria_id = $value['id'];
  echo "<br>";
  echo "<strong>Exibindo posts de: ".$value['nome'];
  echo "</strong>";
  echo "<hr>";
  $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
  $sql->execute();
  $infoPosts = $sql->fetchAll();
  foreach ($infoPosts as $key => $value) {
    echo "<br>";
    echo 'Titulo: '.$value['titulo'];
    echo "<br>";
    echo "Noticia: ".$value['conteudo'];
  }
  }


// `posts` INNER JOIN `categorias` == junte posts com categorias
//ON `posts`.`categoria_id`=`categoria`.`id`== apnenas quanto a tabela referencia posts categoria_id seja igual na tabela referencia categoria seu id.
//posts`.`id` AS `post_id` == id da tabela post seja renomeado para post_id para que não tenha conflito no nome da coluna
$sql = $pdo->prepare("SELECT `posts`.*, `categoria`.*, `posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categoria` ON `posts`.`categoria_id`=`categoria`.`id`");
$sql->execute();
//parametro que retorna apenas o nome da coluna FETCH_ASSOC
$info = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($info);
echo"<pre>";
 ?>

```

## Aula 06

### Group, Order e Limit

```php+HTML
<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_08b','root','');
//mostra os erros do PDO
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//GROUP BY faz agrupamentos como cargo ou seja não pega valores repetidos
//LIMIT limita a quantidade de dados que sera tornado
//$sql = $pdo->prepare('SELECT * FROM `clientes` GROUP BY cargo LIMIT 1');


//ORDER BY id ASC == Retorna em ordem crescente de id
//DESC para ordem decrescente
$sql = $pdo->prepare('SELECT * FROM `clientes` ORDER BY nome DESC');



$sql = $pdo->prepare('SELECT * FROM `clientes` GROUP BY cargo ORDER BY nome DESC LIMIT 3');


//LIMIT indice,quantidade
$sql = $pdo->prepare('SELECT * FROM `clientes` ORDER BY nome DESC LIMIT 1,3');
$sql->execute();
$clientes = $sql->fetchAll();

foreach ($clientes as $key => $value) {
  echo $value['nome'];
  echo "<hr>";
}


 ?>

```

## Aula 07

### LEFT e RIGHT Join

```php
<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_08b', 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//LEFT faz uma junção entre A e B onde a projeção serão todos os elementos de A, independente se estão ou não em B.
//RIGHT contrario do LEFT
//INNER condição exata,que retorna dados apenas quando as duas tabelas tem chaves correspondentes na cláusula ON do join.
$sql = $pdo->prepare("SELECT *FROM `clientes` LEFT JOIN `cargos` ON `clientes`.`cargo` = `cargos`.`id`");
$sql->execute();
$clientes = $sql->fetchAll();
foreach ($clientes as $key => $value) {
  echo $value['nome'];
  echo " | ";
  echo $value['nome_cargo'];
  echo "<hr>";
}

 ?>

```

## Aula 08

### Segurança, import/export e instância avançada do PDO

```php+HTML
<?php
define('HOST', 'localhost');
define('DB', 'modulo_08');
define('USER','root');
define('PASS','senha errada');


//Condição segura para conectar ao DB, sem ele um erro de conexão pode mostrar a senha do DB
try {
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")); //opções extras podem ser passadas por um array como UTF8 para corrigir acentuação
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //atributo para mostrar possiveis erros
}catch (Exception $e){
    echo '<h1>Erro ao conectar com DB.</h1>';
}

$sql = $pdo->prepare("SELECT * FROM postsss");

$sql->execute();

?>
```

## Aula 09

### Lock tables

