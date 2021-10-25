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


    <link rel="stylesheet" href="../css/global.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
        <div class="container-fluid">
            <a class="navbar-brand p-3" href="#">Register & Generics</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav p-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
                <button class="btn btn-outline-success m-3" data-bs-toggle="modal" data-bs-target="#modal-login"
                        type="submit">Logout
                </button>
            </div>
        </div>
    </nav>


</header>

<main>
    <section id="titulo" class="row container-fluid ">

        <h1 class="text-center fonte-titulo cor-especial pt-5">Seja Bem-vindo!</h1>
        <p class="text-center text-secondary pb-5">Aqui estão os modulos disponiveis: </p>
    </section>
    <section class="container-fluid bg-light" id="receitas">
        <div class="row justify-content-center">
            <article class="card borda-cor-especial card-largura p-1 m-4 col-12 col-md-4 ">
                <img src="../img/people-icon.png" class="card-img-top card-imagem"
                     alt="icone do cadastro de pessoas">
                <div class="card-body">
                    <h5 class="card-title">Módulo: Pessoas</h5>
                    <p class="card-text">Faça o cadastro de novos usuários e pessoas, liste, altere e delete com
                        moderação ;)</p>
                    <a href="#" class="btn btn-primary d-grid">Acessar</a>
                </div>
            </article>
            <article class="card borda-cor-especial card-largura p-1 m-4 col-12 col-md-4">
                <img src="../img/city-icon.png" class="card-img-top card-imagem"
                     alt="icone do cadastro de cidades">
                <div class="card-body">
                    <h5 class="card-title">Módulo: Cidades</h5>
                    <p class="card-text">Faça o cadastro de novas Cidades, liste, altere e delete com moderação ;)</p>
                    <a href="#" class="btn btn-primary d-grid">Acessar</a>
                </div>
            </article>
            <article class="card borda-cor-especial card-largura p-1 m-4 col-12 col-md-4">
                <img src="../img/bairro-icon.png" class="card-img-top card-imagem"
                     alt="icone do cadastro de bairros">
                <div class="card-body">
                    <h5 class="card-title">Módulo: Bairros</h5>
                    <p class="card-text">Faça o cadastro de novos Bairros, liste, altere e delete com moderação ;)</p>
                    <a href="#" class="btn btn-primary d-grid">Acessar</a>
                </div>
            </article>
        </div>
    </section>


</main>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <i class="fas fa-coffee" width="30" height="24"></i>
        </a>
        <span class="text-muted">Feito com <i class="fas fa-coffee"></i> & <i class="fas fa-heart"></i></span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li><a href="#"><i class="ms-3 text-muted  fab fa-github" width="24" height="24"></a></i></li>
        <li><a href="#"><i class="ms-3 text-muted  fab fa-facebook" width="24" height="24"></i></a></li>
        <li><a href="#"><i class="ms-3 text-muted bi fab fa-instagram" width="24" height="24"></i></li>
        </a>
    </ul>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="src/js/jquery-3.6.0.js"></script>


</body>
</html>