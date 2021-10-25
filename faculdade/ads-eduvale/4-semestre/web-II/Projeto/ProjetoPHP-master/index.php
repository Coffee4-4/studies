<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php require __DIR__ . '/areaRestrita/crud.php'; ?>

    <h1>Bem vindo ao site <?= $_SESSION['usuario']['nome']?>
    <img width="150" height="150" src="fotos/<?= $_SESSION['usuario']['foto']; ?>"  alt="">
    </h1>



<h1>Lista dos Usuários</h1>


        <div class="resposta"></div>

        <h3>Cadastros</h3>
        <ul>
            <li><a href="cadastro_usuario.php">Usuários</a></li>
            <hr>
            <li><a href="cadastro_bairro.php">Bairros</a></li>
            <hr>
            <li><a href="cadastro_cidade.php">Cidades</a></li>
            <ul>

            

                 <div id="lista_cidade">
                     <!-- Aqui -->
                 </div>

                
                            
                  <!-- <li><a href="#" id="" class="excluir_cidade"> Codigo  - Nome </a></li> -->
                
            </ul>
            <hr>


            <li><a href="cadastro_pessoa.php">Pessoas</a></li>
            <hr>
        </ul>


        <p><a href="logout.php">SAIR DO SISTEMA</a></p>

        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/principal.js"></script>
</body>
</html>