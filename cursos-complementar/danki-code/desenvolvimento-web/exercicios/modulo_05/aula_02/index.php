<?php

echo $_SERVER['SERVER_NAME']; //Nome do dominio 
echo $_SERVER['DOCUMENT_ROOT']; //Nome do caminho

//mostrar todos as variaveis dentro de uma variavel 
echo '<pre>'; //pre formatado
print_r($_SERVER);
echo '</pre>';
// diversos dados do servidor

?>