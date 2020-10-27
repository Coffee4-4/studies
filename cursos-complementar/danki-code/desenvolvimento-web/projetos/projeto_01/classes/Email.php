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
        $this->mailer->AltBody = strip_tags($info['corpo']);

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