# Módulo #12: Criando Site Dinâmico - PHP

## Aula 01 

### Instalando PHPMailer



> Para instalar o PHPMailer atualizado, siga as instruções na página do [github da biblioteca.](https://github.com/PHPMailer/PHPMailer) Se descer um pouco irá ter os comandos para instalar via composer.
> Então basta seguir os passos [deste módulo!](https://cursos.dankicode.com/campus/curso-desenvolvimento-web-completo/instalando-e-entendendo-o-composer)
>
> Alternativa #2: Baixe o projeto completo e pegue a biblioteca. Basta clicar [aqui.](https://drive.google.com/open?id=0B9jX17NqbDA1MXpFdkplVDFCeU0)

**PHPMailer** serve para facilitar o envio de e-mail 

`config.php` , criando o carreamento dinâmico de classes 

```php
//uma função pode ser passada dentro de uma variavel
//carrega a classe dinamicamente 
$autoload = function ($class){
    if ($class == 'Email'){
        //faz uma verificação e inclui apenas uma vez
        require_once ('classes/phpmailer/PHPMailerAutoload.php');
    }
    include ('classes/'.$class.'.php');
};

//função dinamica do php, inclui a classe dinamicamente
spl_autoload_register($autoload);
```

`Email.php` classe E-mail com configuração de disparo de e-mail.

```php
<?php
class Email
{
    private $mailer;
    public function __construct($host,$username,$senha,$nome)
    {
        $this->mailer = new PHPMailer;


        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $this->mailer->isSMTP();                                            // Send using SMTP
        $this->mailer->Host       = $host;                    // Set the SMTP server to send through
        $this->mailer->SMTPAuth   = true;                                   // Enable SMTP authentication
        $this->mailer->Username   = $username;                     // SMTP username
        $this->mailer->Password   = $senha;                               // SMTP password
        $this->mailer->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mailer->Port = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $this->mailer->setFrom($username, $nome);
        $this->mailer->isHTML(true);
        $this->mailer->CharSet = 'UTF-8';

        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name



    }


    public function addAdress($email,$nome){
        $this->mailer->addAddress($email,$nome);     // Add a recipient

    }
    public function formatarEmail($info){
        // Content
        $this->mailer->Subject = $info['assunto'];
        $this->mailer->Body    = $info['corpo'];
        $this->mailer->AltBody = strip_tags(['corpo']);

    }
    public function enviarEmail(){
        if ($this->mailer->send()){
            return true;
        }else{
            return false;
        }
    }
}


?>
```

## Aula 02

### Criando as classes

envio de formulário e validação de e-mail

```php+HTML
 <?php
            if (isset($_POST['acao'])){
                //Enviei o formulário.
                if ($_POST['email'] != ''){
                    $email = $_POST['email'];
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                        // Função nativa do php que valida se o texto digitado é um email valido
                        // só enviar
                        $mail = new Email('mail.livingtech.com.br', 'contato@livingtech.com.br', 'krat*thuy_PLED0kast!1', 'Contato');
                        //pode ser enviado para mais de um e-mail bastando repetir o comando a baixo 
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
                        echo '<script> alert("Não é um e-mail valido, validação via PHP.")</script>' ;

                    }
                }else{
                    echo '<script> alert("Insira um e-mail válido.")</script>' ;
                }
            }

        ?>
```

Class e-mail com seus métodos 

```php
<?php
class Email
{
    private $mailer;
    public function __construct($host,$username,$senha,$nome)
    {
        $this->mailer = new PHPMailer;


        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $this->mailer->isSMTP();                                            // Send using SMTP
        $this->mailer->Host       = $host;                    // Set the SMTP server to send through
        $this->mailer->SMTPAuth   = true;                                   // Enable SMTP authentication
        $this->mailer->Username   = $username;                     // SMTP username
        $this->mailer->Password   = $senha;                               // SMTP password
        $this->mailer->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mailer->Port = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $this->mailer->setFrom($username, $nome);
        $this->mailer->isHTML(true);
        $this->mailer->CharSet = 'UTF-8';

        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name



    }


    public function addAdress($email,$nome){
        $this->mailer->addAddress($email,$nome);     // Add a recipient

    }
    public function formatarEmail($info){
        // Content
        $this->mailer->Subject = $info['assunto'];
        $this->mailer->Body    = $info['corpo'];
        //strip tags para retirar as tags html existentes e enviar um texto puro sem poluição
        $this->mailer->AltBody = strip_tags(['corpo']);

    }
    public function enviarEmail(){
        if ($this->mailer->send()){
            return true;
        }else{
            return false;
        }
    }
}


?>
```

## Aula 03

### Enviando formulários

```php
<?php
if (isset($_POST['acao']) && $_POST['identificador'] == 'form_home') {
    //Enviei o formulário.
    if ($_POST['email'] != '') {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Função nativa do php que valida se o texto digitado é um email valido
            // só enviar
            $mail = new Email('mail.livingtech.com.br', 'contato@livingtech.com.br', 'krat*thuy_PLED0kast!1', 'Contato');
            //pode ser enviado para mais de um e-mail bastando repetir o comando a baixo
            $mail->addAdress('nybble94@gmail.com', 'André');
            $corpo = "E-mail cadastrado na home do site: <hr>$email";
            $info = array('assunto' => 'Um novo e-mail cadastrado no site!', 'corpo' => $corpo);
            $mail->formatarEmail($info);
            if ($mail->enviarEmail()) {
                echo '<script> alert("Enviado com sucesso.")</script>';
            } else {
                echo '<script> alert("Algo deu errado.")</script>';
            }
        } else {
            echo '<script> alert("Não é um e-mail valido, validação via PHP.")</script>';

        }
    } else{
     echo '<script> alert("Campos vázios não são permitidos.")</script>';
    }

} else if (isset($_POST['acao']) && $_POST['identificador'] == 'form_contato') {
    /*
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        $telefone = $_POST['telefone'];
    */
    $assunto = 'Nova mensagem do site!';
    $corpo = '';
    foreach ($_POST as $key => $value) {
        //ucfirst função nativa primeira letra maiuscula
        $corpo.=ucfirst($key).": ".$value;
        $corpo.="<hr>";
        
    }
    $info = array('assunto' => $assunto, 'corpo' => $corpo);
    $mail = new Email('mail.livingtech.com.br', 'contato@livingtech.com.br', 'krat*thuy_PLED0kast!1', 'Contato');
    $mail->addAdress('nybble94@gmail.com', 'André');
    $mail->formatarEmail($info);
    if ($mail->enviarEmail()) {
        echo '<script> alert("Enviado com sucesso.")</script>';
    } else {
        echo '<script> alert("Algo deu errado2.")</script>';
    }
}


?>

```

`contato.php`

```php
<div id="map"></div>
<div class="contato-container">
    <div class="center">
        <form method="post" action="">
            <input required type="text" name="nome" placeholder="Digite aqui seu nome ...">
            <div></div>
            <input required type="text" name="email" placeholder="Seu-Email@exemplo.com">
            <div></div>
            <input required type="text" name="telefone" placeholder="(xx) xxxxx - xxxx">
            <div></div>
            <textarea required name="mensagem" placeholder="Digite sua mensagem ;)"></textarea>
            <div></div>
            <input type="hidden" name="identificador" value="form_contato">
            <input type="submit" name="acao" value="Enviar!">
        </form>
    </div>
</div>
```

## Aula 04

### Aplicando AJAX

`formularios.php`

```php
<?php
//para ter acesso aos metodos e classes é necessario incluir o arquivo de config
include('../config.php');
$data = array();
$assunto = 'Nova mensagem do site!';
$corpo = '';
foreach ($_POST as $key => $value) {
    $corpo .= ucfirst($key) . ": " . $value;
    $corpo .= "<hr>";
}
$info = array('assunto' => $assunto, 'corpo' => $corpo);
$mail = new Email('mail.livingtech.com.br', 'contato@livingtech.com.br', 'krat*thuy_PLED0kast!1', 'Contato');
$mail->addAdress('nybble94@gmail.com', 'André');
$mail->formatarEmail($info);

if ($mail->enviarEmail()) {
    $data['sucesso'] = true;
} else {
    $data['erro'] = true;
}
//$data['retorno'] = 'sucesso';

// mata o script e retorna de uma forma que o js consegue entender
die(json_encode($data));
?>
```

`formularios.js`

```js
$(function () {
    /*
    //ao clicar em submit executar a função
    $('form').submit(function (){
        alert('Formulario enviado!');
        // previne o comportamento padrão de recarregar a pág
        return false;
    })
*/
    $('body').on('submit', 'form', function () {
        var form = $(this);
        //função propria do jquery ajax, que recebe como parametro um objeto
        $.ajax({
            url: include_path + 'ajax/formularios.php',
            // parametros metodo, tipo de resposta do servidor, opcional quais informações serão enviadas para o formulario
            method: 'post',
            dataType: 'json',
            data: form.serialize()
        }).done(function (data) {
            if (data.sucesso) {
                console.log("E-mail enviado com sucesso!");
            } else {
                console.log("Ocorreu um erro ao enviar o e-mail!");

            }
        });
        return false;
    })
})
```

## Aula 05

### Interface com JQuery

`index.php`

```php+HTML
<div class="sucesso">Formulário enviado com sucesso!</div>
<div class="overlay-loading">
    <img src="<?php echo INCLUDE_PATH;?>img/ajax-loader.gif" alt="#">
</div><!--overlay-loading-->
```

`formularios.js`

```js
$(function () {
    /*
    //ao clicar em submit executar a função
    $('form').submit(function (){
        alert('Formulario enviado!');
        // previne o comportamento padrão de recarregar a pág
        return false;
    })
*/
    $('body').on('submit', 'form', function () {
        var form = $(this);
        //função propria do jquery ajax, que recebe como parametro um objeto
        $.ajax({
            beforeSend: function (){
              $('.overlay-loading').fadeIn();
            },
            url: include_path + 'ajax/formularios.php',
            // parametros metodo, tipo de resposta do servidor, opcional quais informações serão enviadas para o formulario
            method: 'post',
            dataType: 'json',
            data: form.serialize()
        }).done(function (data) {
            if (data.sucesso) {
                $('.overlay-loading').fadeOut();
                $('.sucesso').fadeIn();
                setTimeout(function (){
                    $('.sucesso').fadeOut();
                },3000)
            } else {
                $('.overlay-loading').fadeOut();

                console.log("Ocorreu um erro ao enviar o e-mail!");

            }
        });
        return false;
    })
})
```

`style.css`

```css
.sucesso{
    display: none;
    position: fixed;
    right: 20px;
    top: 60px;
    padding: 15px 2%;
    font-size: 17px;
    color: #008000;
    background: #DFF2BF;
    font-weight: bold;
    z-index: 999;
}
.overlay-loading{
    display: none;
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 999;
    background: rgba(0,0,0,0.4);
}
.overlay-loading img{
    width: 48px;
    height: 48px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
}

```

