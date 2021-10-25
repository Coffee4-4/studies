<?php
require __DIR__ . "/areaRestrita/crud.php";

switch ($_POST['acao']) {
    case 'gravar_bairro':
        $nome = $_POST['nome'];
        $cidade = $_POST['cidade'];


        if ($nome == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Nome não pode ser vazio!";
        } elseif ($cidade == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Cidade não pode ser vazia!";
        } else {
            $dados = [
                'BairroNome' => $nome,
                'idCidade' => $cidade
            ];

            if (GravarRegistro('bairros', $dados)) {
                $retorno['codigo'] = "1";
                $retorno['mensagem'] = "Bairro cadastro com sucesso!";
            };
        }

        echo json_encode($retorno);
        break;

    case 'gravar_cidade':
        $nome = $_POST['nome'];
        $uf = $_POST['uf'];

        if ($nome == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Nome não pode ser vazio!";
        } elseif ($uf == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "UF não pode ser vazio!";
        } else {
            $dados = [
                'NomeCidade' => $nome,
                'UFCidade' => $uf
            ];

            if (GravarRegistro('cidades', $dados)) {
                $retorno['codigo'] = "1";
                $retorno['mensagem'] = "Cidade cadastrada com sucesso!";
            };
        }

        echo json_encode($retorno);
        break;

    case 'gravar_pessoa':
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $nascimento = $_POST['nascimento'];
        $sexo = $_POST['sexo'];
        $foto_nome = $_FILES['foto']['name'];
        $situacao = $_POST['ativo'];
        $bairro = $_POST['bairro'];

        $pasta = 'fotos/';
        if (!file_exists($pasta)) {
            mkdir($pasta, 0755);
        }


        if ($foto_nome) {
            $extensao = strchr($foto_nome, '.');
            $imagem = array('.jpg', '.jpeg', '.png', '.gif');

            if (in_array($extensao, $imagem)) {
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $pasta . $foto_nome)) {
                    $retorno['codigo'] = '5';
                    $retorno['mensagem'] = 'Imagem salva';
                }
            } else {
                $retorno['codigo'] = '15';
                $retorno['mensagem'] = 'Imagem não suportada';
            }
        }

        if ($nome == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Nome não pode ser vazio!";
        } elseif ($cpf == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "CPF não pode ser vazio!";
        } elseif ($nascimento == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Nascimento não pode ser vazio!";
        } else {
            $dados = [
                'NomePessoa' => $nome,
                'CpfPessoa' => $cpf,
                'NascimentoPessoa' => $nascimento,
                'SexoPessoa' => $sexo,
                'FotoPessoa' => $foto_nome,
                'AtivoPessoa' => $situacao,
                'idBairro' => $bairro
            ];

            if (GravarRegistro('pessoa', $dados)) {
                //$retorno['codigo'] = "1";
                $retorno['mensagem'] = "Pessoa cadastra com sucesso!";
            };
        }

        echo json_encode($retorno);
        break;

    case 'gravar_usuario':
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if ($nome == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Nome não pode ser vazio!";
        } elseif ($login == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Login não pode ser vazio!";
        } elseif ($senha == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Senha não pode ser vazio!";
        } else {
            unset($_POST['acao']);
            if (GravarRegistro('usuarios', $_POST)) {
                $retorno['codigo'] = "1";
                $retorno['mensagem'] = "Usuário cadastro com sucesso!";
            };
        }

        echo json_encode($retorno);
        break;
    case 'excluir_cidade':
        $codigo = $_POST['codigo_cidade'];
        $retorno['codigo'] = "0";
        $retorno['mensagem'] = "Erro ao excluir cidade"; //DeletarRegistro('cidades', 'idCidade='.$codigo);

        if (DeletarRegistro('cidades', 'idCidade=' . $codigo) == 1) {
            $retorno['codigo'] = "1";
            $retorno['mensagem'] = "Cidade excluída com sucesso!";
        }
        echo json_encode($retorno);
        break;


    case 'listar_cidade':
?>

        <table class="table table-hover" border="1">
            <thead>
                <tr>
                    <th>Codigo</th>

                    <th>Cidade</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $lista_cidades = LerRegistro('cidades');
                foreach ($lista_cidades as $chave => $valor) { ?>

                    <tr>
                        <td><?= $valor['idCidade'] ?></td>
                        <td><?= $valor['NomeCidade'] ?></td>
                        <td><a href="#" id="<?= $valor['idCidade'] ?>" class="btn_excluir_cidade">X</a></td>
                    </tr>
              <?php
                }
    break;


            default:
                $retorno['codigo'] = "0";
                $retorno['mensagem'] = "Nenhuma ação definida! Contate o Suporte!";
                echo json_encode($retorno);
                break;
        }
