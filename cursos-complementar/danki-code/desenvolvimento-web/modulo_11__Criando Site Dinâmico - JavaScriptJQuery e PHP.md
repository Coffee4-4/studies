#  Criando Site Dinâmico - JavaScript/JQuery e PHP

## Aula 01

### Importando JQuery

index.php

```javascript
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
        <div class="logo left">Logomarca</div>
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
    <script src="js/jquery.js"></script>
    <script>
        $(function () {
            /*
            var mensagem ='Olá Mundo!';
            console.log(mensagem);
            alert(mensagem);
            */
        })
    </script>
  </body>
</html>

```

## Aula 02

### Menu e efeitos

`index.php`

```php+HTML
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

```

`scripts.js`

```javascript
$(function () {
    // Aqui vai todo o nosso codigo javascript.

    //$() == chama a função, que recebe como parametro a classe do HTML que queremos trabalhar.
    $('nav.mobile').click(function () {
        //O que vai acontecer ao clicar na nav.mobile.

        var listaMenu = $('nav.mobile ul');
        
        // ABRIR MENU ATRAVÉS DO fadeIn
        if(listaMenu.is(':hidden')==true)
            listaMenu.fadeIn(); //exibe a lista do menu
        else
            listaMenu.fadeOut();

        listaMenu.slideToggle(); //detecta automaticamente se o menu esta aberto ou fechado.


        // Abrir ou fechar sem efeitos
        if (listaMenu.is(':hidden')== true){
            //listaMenu.show();
            listaMenu.css('display','block');

        }else{
            //listaMenu.hide();
            listaMenu.css('display','none');
        }

         
        listaMenu.slideToggle();
    })
})

```

`styles.css`

```css
*{
  margin: 0;
  padding: 0;
/* desin responsivo */
  box-sizing: border-box;
  font-family: "Open Sans";
}

/**Boot CSS**/
img{
  width: 100%;
  max-width: 400px;

}
.center{
  max-width: 1280px;
  padding: 0 2%;
  margin: 0 auto;
}
.w33{
  width: 33.3%;
  padding: 0 10px;
}
.w50{
  width: 50%;
  padding: 0 10px;
}
.left{
  float: left;
}
.right{
  float: right;
}
.clear{
  clear: both;
}

/**Estilização**/

header{
  background: #3d437a;
  padding: 20px 0;

}
header .logo{
  font-size: 23px;
  font-weight: 300;
  text-transform: uppercase;
}
.logo a{
  text-decoration: none;
  color: white;
}
.mobile{
  display: none;
}

nav.desktop ul{
  position: relative;
  top: 6px;
  list-style-type: none;
}
nav.desktop li {
  font-weight: 300;
  font-size: 15px;
  padding: 0 30px;
  text-transform: uppercase;
  display: inline-block;
}
nav.desktop a {
  color: white;
  text-decoration: none;
}
section.banner-principal{
  width: 100%;
  height: 600px;
  background-image: url('../img/bg-form.jpeg');
  /* BG cubre toda a tela  */
  background-size: cover;
  position: relative;

}

.overlay{
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height:100%;
  background-color: rgba(51,51,51,0.7);
  z-index: 1; /*vem primeiro que o form*/

}

section.banner-principal form{
  width: 93%;
  max-width: 600px;

  z-index: 2; /*vem depois do overlay*/
  position: absolute;
  left: 50%;
  top: 50%;
  /*centralizar*/
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}

section.banner-principal form h2{
  color: white;
  font-weight: 300;
  font-size: 30px;
  text-align: center;
}

section.banner-principal form input[type=email]{
  width: 100%;
  height: 66px;
  margin-top: 10px;
  background: white;
  color: #333;
  font-size: 22px;
  padding-left: 10px;
  border: 0;
}

section.banner-principal form input[type=submit]{
  width: 100%;
  height: 66px;
  margin-top: 10px;
  background: #00c59e;
  color: white;
  font-size: 22px;
  cursor: pointer;
  border: 0;
}
section.descricao-autor{
  padding: 40px 0;
}
section.descricao-autor h2{
  font-size: 25px;
  font-weight: 300;
  color: #444;
}
section.descricao-autor p{
  font-size: 16px;
  color: #444;
  font-weight: 300px;
  margin-top: 10px;
  text-align: justify;
}

section.especialidades{
  padding: 40px 0;
  background: #e2e2e2;
  text-align: center;

}
section.especialidades h2.title{
  font-size: 30px;
  font-weight: 400;
  color: #999;
}

.box-especialidades{
  margin: 40px 0;
  padding: 0 30px;
}
.box-especialidades h3{
  color: #404580;
  font-size: 40px;
}
.box-especialidades h4{
  font-weight: 300;
  color: #bababa;
  font-size: 25px;
}
.box-especialidades p{
  color: #444;
  font-size: 15px;
  margin-top: 10px;
  text-align: justify;
}

section.extras{
  padding: 30px 0;
  background: #404580;
}
.depoimentos-container,.servicos-container{
  padding: 0 50px;
}
section.extras .title{
  color: white;
  font-weight: 300;
  font-size: 25px;
  margin-bottom: 15px;
}
.depoimento-single{
  padding: 15px 0;
  border-bottom: 1px solid #5056a0;
}
p.depoimento-descricao{
  font-size: 15px;
  color: white;
  font-weight: 300;
}
p.nome-autor{
  font-size: 15px;
  color: white;
  font-weight: bold;
  margin-top: 5px;
}
.servicos ul{
  margin: 20px 0 ;
 /** list-style-position: inside;dentro do container**/

}
.servicos li{
  margin-bottom: 15px;
  font-size: 15px;
  color: white;
  font-weight: 300;
}
footer{
  background: #313462;
  padding: 30px 0;
}
footer p {
  color: white;
  text-align: center;
  font-weight: 400;
  font-size: 16px;
}

/**MOBILE**/
@media screen and (max-width:768px){
  img{
    float: none !important; /*Aplicando a flutuação direto na imagem !important == reescreve a regra, força a utilizar a regra*/
    display: block;
    margin: 0 auto;
  }

  .w50{
    padding: 20px;
    width: 100%;
  }
  .w33{
    width: 100%;
    padding: 20px;
  }

  .box-especialidades{
    margin: 0;
    padding: 40px 20px;
  }
  section.banner-principal{
    background-size: auto;
    height: 350px;
  }
}


@media screen and (max-width:700px) {
  nav.desktop{
    display: none;
  }
  nav.mobile{
    display: block;

  }
  nav.mobile ul{
    z-index: 3;
    position: absolute;
    left: 0;
    width: 100%;
    top: 55px;
    display: none;
    text-align: center;
  }
  nav.mobile li{
    font-weight: 300;
    width: 100%;
    font-size: 7px;
    display: block;
    background: white;
    border-bottom: 1px solid #ccc;
    padding: 8px 0;
  }
  nav.mobile a{
    color: #444;
    text-decoration: none;
    display: block;
  }
  .botao-menu-mobile{
    font-size: 24px;
    cursor: pointer;
    color: white;
  }

}


```

## Aula 03

### URL amigável e manipulando classes

`index.php`

```php+HTML
<?php   include ('config.php');?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">
    <!-- design reponsivo  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>estilos/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
      <!--incluindo a variavel do diretorio raiz-->

      <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>estilos/style.css">
    <title>Projeto 01</title>
  </head>
  <body>



    <header>
      <div class="center">
        <div class="logo left"><a href="/">Logomarca</a></div>
        <nav class="desktop right">
          <ul>
            <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
            <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
            <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
            <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
          </ul>
        </nav>
        <nav class="mobile right">
          <div class="botao-menu-mobile">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </div> <!-- botao-menu-mobile -->
          <ul>
              <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
              <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
              <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
              <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
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
            <img src="<?php echo INCLUDE_PATH;?>img/autor.jpeg" alt="">
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
    <script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script> <!--por ser importado antes ele da acesso a todos os seus metodos ao proximo script a ser importado.-->
    <script src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>
  </body>
</html>

```

`config.php`

```php
<?php
//Definindo diretorio raiz
    define('INCLUDE_PATH','http://localhost:8090/GitHub/studies/cursos-complementar/danki-code/desenvolvimento-web/projetos/projeto_01/')

?>

```

`.HTACCESS`

```html
RewriteEngine On
RewriteCond %{SCRIPT_FILENAME} !-f
RewriteCond %{SCRIPT_FILENAME} !-d
RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]

Options -Indexes
```

.scripts.js

```js
$(function () {
    // Aqui vai todo o nosso codigo javascript.

    //$() == chama a função, que recebe como parametro a classe do HTML que queremos trabalhar.
    $('nav.mobile').click(function () {
        //O que vai acontecer ao clicar na nav.mobile.

        var listaMenu = $('nav.mobile ul');
        /*
        // ABRIR MENU ATRAVÉS DO fadeIn
        if(listaMenu.is(':hidden')==true)
            listaMenu.fadeIn(); //exibe a lista do menu
        else
            listaMenu.fadeOut();

        listaMenu.slideToggle(); //detecta automaticamente se o menu esta aberto ou fechado.


        // Abrir ou fechar sem efeitos
        if (listaMenu.is(':hidden')== true){
            //listaMenu.show();
            listaMenu.css('display','block');

        }else{
            //listaMenu.hide();
            listaMenu.css('display','none');
        }

         */
        if (listaMenu.is(':hidden')== true){
            // cria a variavel icone que ira receber o resulado da função find(produra diretamente o elemento dentro da class) ou seja a classe do nosso icone
            //var icone = $('.botao-menu-mobile i');
            var icone = $('.botao-menu-mobile').find('i');

            //remove e adicona class
            icone.removeClass('fa fa-bars');
            icone.addClass('fa fa-times-circle');
            listaMenu.slideToggle();

        }else{
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa fa-times-circle');
            icone.addClass(' fa fa-bars');
            listaMenu.slideToggle();

        }



    })
})

```

## Aula 04

### Manipulando URL's com PHP

`index.php`

```php+HTML
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

```

`style.css`

```css
* {
    margin: 0;
    padding: 0;
    /* desin responsivo */
    box-sizing: border-box;
    font-family: "Open Sans";
}

/**Boot CSS**/
html, body {
    overflow-x: hidden;
    height: 100%;
}

img {
    width: 100%;
    max-width: 400px;
}

input {
    border: 0;
}

.center {
    max-width: 1280px;
    padding: 0 2%;
    margin: 0 auto;
}

.w33 {
    width: 33.3%;
    padding: 0 10px;
}

.w50 {
    width: 50%;
    padding: 0 10px;
}

.left {
    float: left;
}

.right {
    float: right;
}

.clear {
    clear: both;
}

/**Estilização**/

header {
    background: #3d437a;
    padding: 20px 0;

}

header .logo {
    font-size: 23px;
    font-weight: 300;
    text-transform: uppercase;
}

.logo a {
    text-decoration: none;
    color: white;
}

.mobile {
    display: none;
}

nav.desktop ul {
    position: relative;
    top: 6px;
    list-style-type: none;
}

nav.desktop li {
    font-weight: 300;
    font-size: 15px;
    padding: 0 30px;
    text-transform: uppercase;
    display: inline-block;
}

nav.desktop a {
    color: white;
    text-decoration: none;
}

section.banner-principal {
    width: 100%;
    height: 600px;
    background-image: url('../img/bg-form.jpeg');
    /* BG cubre toda a tela  */
    background-size: cover;
    position: relative;

}

.overlay {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(51, 51, 51, 0.7);
    z-index: 1; /*vem primeiro que o form*/

}

section.banner-principal form {
    width: 93%;
    max-width: 600px;

    z-index: 2; /*vem depois do overlay*/
    position: absolute;
    left: 50%;
    top: 50%;
    /*centralizar*/
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
}

section.banner-principal form h2 {
    color: white;
    font-weight: 300;
    font-size: 30px;
    text-align: center;
}

section.banner-principal form input[type=email] {
    width: 100%;
    height: 66px;
    margin-top: 10px;
    background: white;
    color: #333;
    font-size: 22px;
    padding-left: 10px;
    border: 0;
}

section.banner-principal form input[type=submit] {
    width: 100%;
    height: 66px;
    margin-top: 10px;
    background: #00c59e;
    color: white;
    font-size: 22px;
    cursor: pointer;
    border: 0;
}

section.descricao-autor {
    padding: 40px 0;
}

section.descricao-autor h2 {
    font-size: 25px;
    font-weight: 300;
    color: #444;
}

section.descricao-autor p {
    font-size: 16px;
    color: #444;
    font-weight: 300px;
    margin-top: 10px;
    text-align: justify;
}

section.especialidades {
    padding: 40px 0;
    background: #e2e2e2;
    text-align: center;

}

section.especialidades h2.title {
    font-size: 30px;
    font-weight: 400;
    color: #999;
}

.box-especialidades {
    margin: 40px 0;
    padding: 0 30px;
}

.box-especialidades h3 {
    color: #404580;
    font-size: 40px;
}

.box-especialidades h4 {
    font-weight: 300;
    color: #bababa;
    font-size: 25px;
}

.box-especialidades p {
    color: #444;
    font-size: 15px;
    margin-top: 10px;
    text-align: justify;
}

section.extras {
    padding: 30px 0;
    background: #404580;
}

.depoimentos-container, .servicos-container {
    padding: 0 50px;
}

section.extras .title {
    color: white;
    font-weight: 300;
    font-size: 25px;
    margin-bottom: 15px;
}

.depoimento-single {
    padding: 15px 0;
    border-bottom: 1px solid #5056a0;
}

p.depoimento-descricao {
    font-size: 15px;
    color: white;
    font-weight: 300;
}

p.nome-autor {
    font-size: 15px;
    color: white;
    font-weight: bold;
    margin-top: 5px;
}

.servicos ul {
    margin: 20px 0;
    /** list-style-position: inside;dentro do container**/

}

.servicos li {
    margin-bottom: 15px;
    font-size: 15px;
    color: white;
    font-weight: 300;
}

footer {
    background: #313462;
    padding: 30px 0;
}

footer p {
    color: white;
    text-align: center;
    font-weight: 400;
    font-size: 16px;
}

footer.fixed {
    position: fixed;
    bottom: 0;
    width: 100%;

}

section.erro-404 h2 {
    color: #444;
    font-weight: 400;
    text-align: center;
    padding: 20px;
    border-bottom: 1px solid #444444;
    font-size: 28px;

}

section.erro-404 p {
    text-align: center;
    font-size: 16px;
    color: #444;
    font-weight: 300;
    margin-top: 8px;
}

section.erro-404 a {
    color: #444;
}

.wraper-404 {
    position: absolute;
    width: 100%;
    padding: 0 2%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
}

/**MOBILE**/
@media screen and (max-width: 768px) {
    img {
        float: none !important; /*Aplicando a flutuação direto na imagem !important == reescreve a regra, força a utilizar a regra*/
        display: block;
        margin: 0 auto;
    }

    .w50 {
        padding: 20px;
        width: 100%;
    }

    .w33 {
        width: 100%;
        padding: 20px;
    }

    .box-especialidades {
        margin: 0;
        padding: 40px 20px;
    }

    section.banner-principal {
        background-size: auto;
        height: 350px;
    }
}


@media screen and (max-width: 700px) {
    nav.desktop {
        display: none;
    }

    nav.mobile {
        display: block;

    }

    nav.mobile ul {
        z-index: 3;
        position: absolute;
        left: 0;
        width: 100%;
        top: 55px;
        display: none;
        text-align: center;
    }

    nav.mobile li {
        font-weight: 300;
        width: 100%;
        font-size: 17px;
        display: block;
        background: white;
        border-bottom: 1px solid #ccc;
        padding: 8px 0;
    }

    nav.mobile a {
        color: #444;
        text-decoration: none;
        display: block;
    }

    .botao-menu-mobile {
        font-size: 24px;
        cursor: pointer;
        color: white;
    }

}


```

`scripts.js`

```js
$(function () {
    // Aqui vai todo o nosso codigo javascript.

    //$() == chama a função, que recebe como parametro a classe do HTML que queremos trabalhar.
    $('nav.mobile').click(function () {
        //O que vai acontecer ao clicar na nav.mobile.

        var listaMenu = $('nav.mobile ul');
        /*
        // ABRIR MENU ATRAVÉS DO fadeIn
        if(listaMenu.is(':hidden')==true)
            listaMenu.fadeIn(); //exibe a lista do menu
        else
            listaMenu.fadeOut();

        listaMenu.slideToggle(); //detecta automaticamente se o menu esta aberto ou fechado.


        // Abrir ou fechar sem efeitos
        if (listaMenu.is(':hidden')== true){
            //listaMenu.show();
            listaMenu.css('display','block');

        }else{
            //listaMenu.hide();
            listaMenu.css('display','none');
        }

         */
        if (listaMenu.is(':hidden') == true) {
            // cria a variavel icone que ira receber o resulado da função find(produra diretamente o elemento dentro da class) ou seja a classe do nosso icone
            //var icone = $('.botao-menu-mobile i');
            var icone = $('.botao-menu-mobile').find('i');

            //remove e adicona class
            icone.removeClass('fa fa-bars');
            icone.addClass('fa fa-times-circle');
            listaMenu.slideToggle();

        } else {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa fa-times-circle');
            icone.addClass(' fa fa-bars');
            listaMenu.slideToggle();

        }


    })
})

```

`config.php`

```php
<?php
//Definindo diretorio raiz
    define('INCLUDE_PATH','http://localhost:8090/GitHub/studies/cursos-complementar/danki-code/desenvolvimento-web/projetos/projeto_01/')

?>

```

`home.php`

```php+HTML
<section class="banner-principal">
    <div class="overlay"></div> <!-- overlay -->
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
        </div>

        <div class="w50 right img-box">
            <!-- imagem do autor -->
            <img src="<?php echo INCLUDE_PATH; ?>img/autor.jpeg" alt="">
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
        </div>
        <div class="w33 left box-especialidades">
            <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
            <h4>HTML5</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
        </div>
        <div class="w33 left box-especialidades">
            <h3><i class="fa fa-code" aria-hidden="true"></i></h3>
            <h4>JavaScript</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
        </div>
        <div class="clear"></div>
    </div>
</section>

<section class="extras">
    <div class="center">
        <div class="w50 left depoimentos-container">
            <h2 class="title">Depoimentos dos nossos clientes</h2>
            <div class="depoimento-single">
                <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <p class="nome-autor">Autor Depoimento</p>
            </div>
            <div class="depoimento-single">
                <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <p class="nome-autor">Autor Depoimento</p>
            </div>
            <div class="depoimento-single">
                <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <p class="nome-autor">Autor Depoimento</p>
            </div>
        </div>

        <div class="w50 left servicos-container">
            <h2 class="title">Serviços</h2>
            <div class="servicos">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </li>

                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </li>

                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear">
            <!-- sempre depois de usar float deve se usar clear -->
        </div>
    </div>
</section>


```

`404.php`



```php
<section class="erro-404">
    <div class="center">
        <div class="wraper-404">
            <h2><i style="padding: 0 10px" ; class="fa fa-times"></i>Página não existe!</h2>
            <p>Você será redirecionado para página inicial em breve! :)</p>
        </div>
    </div>
</section>


```

## Aula 05

