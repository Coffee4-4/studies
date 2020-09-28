<?php
// mata a execução do cod.
$nome = 'andre';
if($nome == 'fulano'){
    //continua o codigo
    echo 'Tudo certo.';
}else{
    die("O script parou de ser executado.");
}



//permite atrasar o cód., número em segundos.
sleep(3);
echo'Olá';

sleep(4);
echo 'Olá 2!';

?>