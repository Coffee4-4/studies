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
<<<<<<< HEAD
    <?php require __DIR__ . '/areaRestrita/crud.php'; ?>
    <form class="form_pessoa" name="form_pessoa" action="gravar_pessoa.php" method="POST">
        <div class="resposta"></div>
=======
<?php include(__DIR__ . '/areaRestrita/crud.php');?>
    <form class="form_pessoa" name="form_pessoa" action="gravar_pessoa.php" method="POST">
        <div class="resposta">

        </div>
>>>>>>> 4bd5054d3f9cb0599b6480f2c5214dbd8513800c

        <div class="carregando">
            <div class="progress">0%</div>
        </div>
<<<<<<< HEAD


        <label for="nome">
            <span class="campo">Nome:</span>
            <input type="text" name="nome" required>
        </label>

        <label for="cpf">
            <span class="campo"> CPF:</span>
            <input type="text" name="cpf" required>
        </label>

        <label for="nascimento">
            <span class="campo">Nascimento:</span>
            <input type="date" name="nascimento" >
        </label>

        <label for="sexo">
            <span class="campo"> Sexo:</span>
            <!-- <input type="text" name="sexo" > -->
            <select name="sexo" id="sexo">
                <option value="F">F</option>  
                <option value="M">M</option>
                <option value="O">Outros</option>
            </select>
        </label>

        <label for="foto">
            <span class="campo"> Foto:</span>
            <input type="file" name="foto" >
        </label>

        <label for="ativo">
            <span class="campo"> Situação:</span>
            <!-- <input type="text" name="ativo" > -->
=======
        <label for="nome">
        <span class="campo">Nome:</span>
            <input type="text" name="nome" required>
        </label>
        <label for="nome">
            <span class="campo">CPF:</span>
            <input type="text" name="cpf" required>
        </label>
        <label for="nascimento">
            <span class="campo">Nascimento:</span>
            <input type="date" name="nascimento" required>
        </label>
        <label for="sexo">
            <span class="campo">Sexo:</span>
            <input type="sexo" name="sexo">
        </label>
        <label for="foto">
            <span class="campo">Foto:</span>
            <input type="file" name="foto">
        </label>
        <label for="ativo">
            <span class="campo">Situação:</span>
>>>>>>> 4bd5054d3f9cb0599b6480f2c5214dbd8513800c
            <select name="ativo" id="ativo">
                <option value="S">Ativo</option>
                <option value="N">Inativo</option>
            </select>
        </label>
<<<<<<< HEAD

        <label for="bairro">
            <span class="campo"> Bairro:</span>
            <!-- <input type="text" name="bairro" > -->
            <select name="bairro" id="bairro">
                <?php
                $lista_bairro = LerRegistro('bairros b INNER JOIN cidades c ON b.idCidade = c.idCidade', 'b.idBairro, b.BairroNome, c.NomeCidade');
                //$lista_bairro = LerRegistro('bairros b, cidades c', 'b.idBairro, b.BairroNome, c.NomeCidade', 'b.idCidade = c.idCidade');

                foreach ($lista_bairro as $chave => $valor) { ?>
                    <option value="<?= $valor['idBairro']?>"><?= $valor['BairroNome'] . ' - ' . $valor['NomeCidade'] ?></option>    
                <?php 
                }
=======
        <label for="bairro">
            <span class="campo">Bairro:</span>
            <select name="bairro" id="bairro">
                <?php 
                    $lista_bairros = LerRegistro('bairros');
                    foreach ($lista_bairros as $chave => $valor) { ?>
                        <option value="<?= $valor['idBairro']; ?>"><?= $valor['BairroNome']?></option>
                    <?php }
>>>>>>> 4bd5054d3f9cb0599b6480f2c5214dbd8513800c
                ?>
                
            </select>
        </label>
<<<<<<< HEAD

=======
>>>>>>> 4bd5054d3f9cb0599b6480f2c5214dbd8513800c
        <input class="btn btn-pessoa" type="submit" value="SALVAR">
    </form>


    <div class="modal"></div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/principal.js"></script>
</body>

</html>