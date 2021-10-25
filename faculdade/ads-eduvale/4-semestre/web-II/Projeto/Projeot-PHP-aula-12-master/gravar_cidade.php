<?php
    sleep(3);

    require __DIR__ . "/areaRestrita/crud.php";
    $nome = $_POST['nome'];
    $uf = $_POST['uf'];
    

    if ($nome == "") {
        $retorno['codigo'] = "0";
        $retorno['mensagem'] = "Nome não pode ser vazio!";
    }elseif($uf == "") {
        $retorno['codigo'] = "0";
        $retorno['mensagem'] = "UF não pode ser vazio!";
    }
    else{
        $dados = [
            'nomeCidade' => $_POST['nome'],
            'ufCidade' => $_POST['uf']
        ];
        if(GravarRegistro('cidades', $dados)){
            $retorno['codigo'] = "1";
            $retorno['mensagem'] = "Cidade cadastra com sucesso!";
        };
    }
    
    echo json_encode($retorno);