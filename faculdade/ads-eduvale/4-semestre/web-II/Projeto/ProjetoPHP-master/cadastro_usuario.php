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

    <form class="form_usuario" action="gravar_usuario.php" method="POST">
        <div class="resposta"></div>


        <label for="nome">
            <span class="campo">Nome:</span>
            <input type="text" name="nome" required>
        </label>

        <label for="nome">
            <span class="campo"> Login:</span>
            <input type="text" name="login" required>
        </label>

        <label for="nome">
            <span class="campo">Senha:</span>
            <input type="password" name="senha" required>
        </label>

        <input class="btn btn-usuario" type="submit" value="SALVAR">
    </form>


    <div class="modal"></div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/principal.js"></script>
</body>

</html>