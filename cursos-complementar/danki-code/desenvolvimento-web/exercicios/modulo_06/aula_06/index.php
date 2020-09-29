<?php
$conteudo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti necessitatibus fugit modi velit quaerat minima et optio aspernatur, iure dicta autem totam tempora, ex possimus non enim nulla animi expedita.';

// recortando partes de uma string

echo substr($conteudo,0,20);

//recortar com base em espaços
$nome = 'André Luiz Melicio';
// primeiro parametro local de corte, variavel, retorna um array
$nomes = explode(' ',$nome);
// ver o array inteiro
print_r($nomes);


//juntar um array com um delimitador no caso o espaço
$nomes = implode(' ',$nomes);


$conteudo = '<h1>André</h1>';


echo $conteudo;
//strip_tags limpa tags HTML e mantem o conteudo
echo strip_tags($conteudo);

echo $nomes;

//htmlentities mostra o codigo html na pagina
echo htmlentities('<div></div>');


?>