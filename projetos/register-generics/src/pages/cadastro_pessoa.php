<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register & Generics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/all.css">


    <link rel="stylesheet" href="../css/global.css">
</head>
<body>

<?php require_once '../areaRestrita/crud.php'; ?>

<header><?php include("../html/navbar.php") ?></header>

<main>
    <section id="titulo" class="row container-fluid ">

        <h1 class="text-center fonte-titulo cor-especial pt-5">Seja Bem-vindo!</h1>
        <p class="text-center text-secondary pb-5">Aqui estão os modulos disponiveis: </p>
    </section>

    <nav>
        <section class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-cadastrar-tab" data-bs-toggle="tab" data-bs-target="#nav-cadastrar"
                    type="button" role="tab" aria-controls="nav-cadastrar" aria-selected="true">Cadastrar
            </button>
            <button class="nav-link" id="nav-listar-tab" data-bs-toggle="tab" data-bs-target="#nav-listar" type="button"
                    role="tab" aria-controls="nav-listar" aria-selected="false">listar
            </button>
            <button class="nav-link" id="nav-alterar-tab" data-bs-toggle="tab" data-bs-target="#nav-alterar"
                    type="button" role="tab" aria-controls="nav-alterar" aria-selected="false">Alterar
            </button>
        </section>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-cadastrar" role="tabpanel" aria-labelledby="nav-cadastrar-tab">

            <form class="row col-md-12 p-3 form_pessoa" nome="form_pessoa" action="gravar_pessoa.php" method="POST">
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" name="cpf" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="nascimento" class="form-label">Nascimento:</label>
                    <input type="date" name="nascimento" class="form-control" required>
                </div>


                <div class="col-md-2">
                    <label for="sexo" class="form-label">Sexo:</label>
                    <select id="sexo" class="form-select" name="sexo">
                        <option selected>Selecione ...</option>
                        <option value="F">F</option>
                        <option value="M">M</option>
                        <option value="O">Outros</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="foto" class="form-label">Foto:</label>
                    <input type="file" name="foto" class="form-control">
                </div>

                <div class="col-md-1">
                    <label for="ativo" class="form-label">Situação:</label>
                    <select id="ativo" class="form-select" name="ativo">
                        <option value="S">Ativo</option>
                        <option value="N">Inativo</option>
                    </select>
                </div>

                <div class="col-md-5">
                    <label for="bairro" class="form-label">Bairro:</label>
                    <select id="bairro" class="form-select" name="bairro">
                        <?php
                        $lista_bairro = LerRegistro('bairros b INNER JOIN cidades c ON b.idCidade = c.idCidade', 'b.idBairro, b.BairroNome, c.NomeCidade');
                        //$lista_bairro = LerRegistro('bairros b, cidades c', 'b.idBairro, b.BairroNome, c.NomeCidade', 'b.idCidade = c.idCidade');

                        foreach ($lista_bairro as $chave => $valor) { ?>
                            <option value="<?= $valor['idBairro'] ?>"><?= $valor['BairroNome'] . ' - ' . $valor['NomeCidade'] ?></option>
                            <?php
                        }
                        ?>

                    </select>
                </div>

                <div class="col-12 m-3 d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Limpar</button>
                    <button type="submit" class="btn btn-primary btn-pessoa">Cadastrar</button>
                </div>
            </form>

        </div>
        <div class="tab-pane fade" id="nav-listar" role="tabpanel" aria-labelledby="nav-listar-tab">

            <section class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Bucar Cidade:</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <form class="d-flex col-6 justify-content-center">
                            <input class="form-control me-2" type="search" placeholder="Digite o Nome da Cidade"
                                   aria-label="Search">
                            <button class="btn btn-outline-success btn-listar_cidade" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </section>


            <div id="lista_cidade"
        </div>


    </div>
    <div class="tab-pane fade" id="nav-alterar" role="tabpanel" aria-labelledby="nav-alterar-tab">3</div>
    </div>

</main>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"><?php include("../html/footer.php") ?></footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="../js/jquery-3.6.0.js"></script>
<script src="../js/principal.js"></script>
<script src="../js/all.js"></script>
<script src="../js/main.js"></script>


</body>
</html>