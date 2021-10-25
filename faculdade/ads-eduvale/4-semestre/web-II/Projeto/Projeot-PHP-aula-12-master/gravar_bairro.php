<?php
    sleep(3);

    require __DIR__ . "/areaRestrita/crud.php";
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    

    if ($nome == "") {
        $retorno['codigo'] = "0";
        $retorno['mensagem'] = "Nome não pode ser vazio!";
    }elseif($cidade == "") {
        $retorno['codigo'] = "0";
        $retorno['mensagem'] = "Cidade não pode ser vazio!";
    }
    else{
        $dados = [
            'BairroNome' => $_POST['nome'],
            'idCidade' => $_POST['cidade']
        ];
        if(GravarRegistro('bairros', $dados)){
            $retorno['codigo'] = "1";
            $retorno['mensagem'] = "Bairro cadastrado com sucesso!";
        };
    }
    
    echo json_encode($retorno);