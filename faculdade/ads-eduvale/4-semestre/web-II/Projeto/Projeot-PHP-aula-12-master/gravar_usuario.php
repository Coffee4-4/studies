<?php
    sleep(3);

    require __DIR__ . "/areaRestrita/crud.php";
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($nome == "") {
        $retorno['codigo'] = "0";
        $retorno['mensagem'] = "Nome não pode ser vazio!";
    }elseif($login == "") {
        $retorno['codigo'] = "0";
        $retorno['mensagem'] = "Login não pode ser vazio!";
    }elseif($senha == ""){
        $retorno['codigo'] = "0";
        $retorno['mensagem'] = "Senha não pode ser vazio!";
    }
    else{
        if(GravarRegistro('usuarios', $_POST)){
            $retorno['codigo'] = "1";
            $retorno['mensagem'] = "Usuário cadastro com sucesso!";
        };
    }
    
    echo json_encode($retorno);