<?php
    include(__DIR__ . '/verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <?php require __DIR__ . '/areaRestrita/crud.php'; ?>
    
    <form class="form_bairro" action="gravar_bairro.php" method="POST">
        <div class="resposta"></div>


        <label for="nome">
            <span class="campo">Nome:</span>
            <input type="text" name="nome" required>
        </label>

        <label for="cidade">
            <span class="campo"> Cidade:</span>
            <!-- <input type="text" name="login" required> -->
            <select name="cidade" id="cidade">
                <?php 
                $lista_cidades = LerRegistro('cidades');
                foreach ($lista_cidades as $chave => $valor) { ?>
                    <option value="<?= $valor['idCidade']?>"> <?= $valor['NomeCidade']?></option>
                <?php
                 }
                ?>
            </select>
        </label>

        

        <input class="btn btn-bairro" type="submit" value="SALVAR">
    </form>


    <div class="modal"></div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/principal.js"></script>
</body>

</html>