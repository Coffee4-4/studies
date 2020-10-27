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