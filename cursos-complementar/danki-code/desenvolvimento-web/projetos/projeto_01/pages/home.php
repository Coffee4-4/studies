<section class="banner-container">
    <div style="background-image: url('<?php echo INCLUDE_PATH?>img/bg-form.jpeg')" class="banner-single"></div> <!--banner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH?>img/bg-form2.jpg')" class="banner-single"></div> <!--banner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH?>img/bg-form3.jpeg')" class="banner-single"></div> <!--banner-single-->
    <div class="overlay"></div> <!-- overlay -->
    <div class="center">

        <?php
            if (isset($_POST['acao'])){
                //Enviei o formulário.
                if ($_POST['email'] != ''){
                    $email = $_POST['email'];
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                        // Função nativa do php que valida se o texto digitado é um email valido
                        // só enviar
                        $mail = new Email('mail.livingtech.com.br', 'contato@livingtech.com.br', 'krat*thuy_PLED0kast!1', 'Contato');
                        $mail->addAdress('nybble94@gmail.com', 'André');
                        $corpo = "E-mail cadastrado na home do site: <hr>$email";
                        $info = array('assunto'=>'Um novo e-mail cadastrado no site!', 'corpo'=>$corpo);
                        $mail->formatarEmail($info);
                        if($mail->enviarEmail()){
                            echo '<script> alert("Enviado com sucesso.")</script>' ;
                        }else{
                            echo '<script> alert("Algo deu errado.")</script>' ;
                        }
                    }else{
                        echo '<script> alert("Não é um e-mail valido.")</script>' ;

                    }
                }else{
                    echo '<script> alert("Insira um e-mail válido.")</script>' ;
                }
            }

        ?>
        <form method="post">
            <h2>Qual o seu e-mail?</h2>
            <input type="email" name="email" required>
            <input type="submit" name="acao" value="Cadastrar!">
        </form>
    </div>
    <div class="bullets">    </div>
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
        <div id="depoimentos" class="w50 left depoimentos-container">
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

        <div id="servicos" class="w50 left servicos-container">
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

