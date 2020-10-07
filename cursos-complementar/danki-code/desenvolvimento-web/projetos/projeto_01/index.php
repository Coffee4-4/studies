<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>

    <meta charset="utf-8">
    <!-- design reponsivo  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilos/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!--incluindo a variavel do diretorio raiz-->

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilos/style.css">
    <title>Projeto 01</title>
</head>
<body>


<header>
    <div class="center">
        <div class="logo left"><a href="/">Logomarca</a></div>
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        <nav class="mobile right">
            <div class="botao-menu-mobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div> <!-- botao-menu-mobile -->
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        <div class="clear">

        </div>
    </div>
</header>

<?php
//if de uma linha: condição? TRUE : FALSE;
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
if (file_exists('pages/' . $url . '.php')) {
    include('pages/' . $url . '.php');
} else {
    //Podemos fazer o que quiser, pois a pag não existe.
    $pagina404 = true;
    include('pages/404.php');
}

?>


<footer <?php
if (isset($pagina404) && $pagina404 == true) echo 'class="fixed"';
?>>
    <div class="center">
        <p>Todos os direitos reservados</p>
    </div>
</footer>
<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
<!--por ser importado antes ele da acesso a todos os seus metodos ao proximo script a ser importado.-->
<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body>
</html>
