<?php
//uma função pode ser passada dentro de uma variavel
$autoload = function ($class){
    if ($class == 'Email'){
        include ('classes/phpmailer/PHPMailerAutoload.php');
    }
    include ('classes/'.$class.'.php');
};

//função dinamica do php, inclui a classe dinamicamente
spl_autoload_register($autoload);



//Definindo diretorio raiz
    define('INCLUDE_PATH','http://localhost/studies/cursos-complementar/danki-code/desenvolvimento-web/projetos/projeto_01/')

?>
