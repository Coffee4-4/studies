<?php

$pdo= new PDO('mysql:host=localhost;dbname=modulo_08','root','');
/*
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
*/

/*
//manipulando as informações vindas do banco $key == incice
foreach ($info as $key => $value) {
  echo 'Titulo: '.$value['titulo'];
  echo "<br>";
  echo "Categoria: ".$value['categoria_id'];
  echo "<br>";
  echo "Noticia: ".$value['conteudo'];
  echo "<hr>";
  }
*/
/*
//count contar o tamanho do array
  for ($i=0; $i<count($info); $i++) {
    echo 'Titulo: '.$info[$i]['titulo'];
    echo "<br>";
    echo "Categoria: ".$info[$i]['categoria_id'];
    echo "<br>";
    echo "Noticia: ".$info[$i]['conteudo'];
    echo "<hr>";
  }
*/

$sql = $pdo->prepare("SELECT * FROM categoria");
$sql->execute();
$info = $sql->fetchAll();

/*
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
*/

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
