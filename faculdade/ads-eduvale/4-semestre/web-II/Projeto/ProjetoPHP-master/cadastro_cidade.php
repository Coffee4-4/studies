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

    <form class="form_cidade" action="gravar_cidade.php" method="POST">
        <div class="resposta"></div>


        <label for="nome">
            <span class="campo">Nome:</span>
            <input type="text" name="nome" required>
        </label>

        <label for="nome">
            <span class="campo"> UF:</span>
            <!-- <input type="text" name="uf" required> -->
            <select name="uf" id="uf">
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
            </select>
        </label>

        <input class="btn btn-cidade" type="submit" value="SALVAR">
    </form>


    <div class="modal"></div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/principal.js"></script>
</body>

</html>