<?php
//uma função pode ser passada dentro de uma variavel
//carrega a classe dinamicamente
$autoload = function ($class){
    if ($class == 'Email'){
        //faz uma verificação e inclui apenas uma vez
        require_once ('classes/phpmailer/PHPMailerAutoload.php');
    }
    include ('classes/'.$class.'.php');
};

//função dinamica do php, inclui a classe dinamicamente
spl_autoload_register($autoload);



//Definindo diretorio raiz
    define('INCLUDE_PATH','http://localhost/studies/cursos-complementar/danki-code/desenvolvimento-web/projetos/projeto_01/')

?>
