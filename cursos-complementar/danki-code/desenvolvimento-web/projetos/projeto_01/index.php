<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">
    <!-- design reponsivo  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <link rel="stylesheet" href="estilos/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Projeto 01</title>
  </head>
  <body>
    <header>
      <div class="center">
        <div class="logo left"><a href="/">Logomarca</a></div>
        <nav class="desktop right">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </nav>
        <nav class="mobile right">
          <div class="botao-menu-mobile">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </div> <!-- botao-menu-mobile -->
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </nav>
        <div class="clear">

        </div>
    </div>
    </header>


    <section class="banner-principal">
      <div class="overlay"> </div> <!-- overlay -->
      <div class="center">
        <form>
          <h2>Qual o seu e-mail?</h2>
          <input type="email" name="email" required>
          <input type="submit" name="acao" value="Cadastrar!">
        </form>
      </div>
      </section>

      <section class="descricao-autor">
        <div class="center">
          <!-- 50% largura da tela -->
          <div class="w50 left">
            <h2>André L. Melicio</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="w50 right img-box">
            <!-- imagem do autor -->
            <img src="img/autor.jpeg" alt="">
          </div>
          <div class="clear"></div>
      </div>
    </section>

    <section class="especialidades">
      <div class="center">
        <h2 class="title">Especialidades</h2>
        <div class="w33 left box-especialidades">
          <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
          <h4>CSS3</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="w33 left box-especialidades">
          <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
          <h4>HTML5</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="w33 left box-especialidades">
          <h3><i class="fa fa-code" aria-hidden="true"></i></h3>
          <h4>JavaScript</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="clear"></div>
      </div>
    </section>

    <section class="extras">
      <div class="center">
        <div class="w50 left depoimentos-container">
          <h2 class="title">Depoimentos dos nossos clientes</h2>
          <div class="depoimento-single">
            <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <p class="nome-autor">Autor Depoimento</p>
          </div>
          <div class="depoimento-single">
            <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <p class="nome-autor">Autor Depoimento</p>
          </div>
          <div class="depoimento-single">
            <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <p class="nome-autor">Autor Depoimento</p>
          </div>
        </div>

        <div class="w50 left servicos-container">
          <h2 class="title">Serviços</h2>
          <div class="servicos">
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>

              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>

              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
            </ul>
          </div>
        </div>
        <div class="clear">
          <!-- sempre depois de usar float deve se usar clear -->
        </div>
      </div>
    </section>

    <footer>
      <div class="center">
        <p>Todos os direitos reservados</p>
      </div>
    </footer>
    <script src="js/jquery.js"></script> <!--por ser importado antes ele da acesso a todos os seus metodos ao proximo script a ser importado.-->
    <script src="js/scripts.js"></script>
  </body>
</html>
