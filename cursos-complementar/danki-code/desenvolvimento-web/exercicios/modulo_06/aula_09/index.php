<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php //O PHP pode ir em qualquer lugar da pág, mas vamos dar print em msg dinamicas então colocamos no body
    //GET passa pela ulr do site
    //Recuperando dados da url usando o metodo get
    //@ ignora os alertas
    /*
    $nome = @$_GET['nome'];
    $email = @$_GET['email'];
    */

    //validação usando if, usa o isset para verificar se existe um submit
    if(isset($_GET['acao'])){
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        echo 'Nome: '.$nome.'<hr>';
        echo 'e-mail: '.$email.'<hr>';
    }

   //validação utilizando POST, fica oculto na url
    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        echo 'Nome: '.$nome.'<hr>';
        echo 'e-mail: '.$email.'<hr>';
        echo 'Soma: '.($_POST['num1']+$_POST['num2']).'<hr>';
        echo $_POST['selecao'].'<hr>';
        //recuperando varios valores checkbox com um array
        foreach($_POST['valor'] as $key => $value){
            echo $key;
            echo '=>';
            echo $value;
            echo '<hr>';
        }
    }


    ?>
    <form method="POST">
        <input type="text" name="nome">
        <input type="text" name="email">
        <input type="text" name="num1">
        <input type="text" name="num2">

        <select name="selecao">
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
        </select>
        <!-- name tem que ser passado como um array para recuperar varios valores selecionados -->
        <input type="checkbox" name = "valor[]" value="op1">op1
        <input type="checkbox" name = "valor[]" value="op2">op2
        <input type="checkbox" name = "valor[]" value="op3">op3
        <input type="checkbox" name = "valor[]" value="op4">op4
        <input type="checkbox" name = "valor[]" value="op5">op5
        <input type="submit" name="acao" value = "Enviar">
    
    </form>

</body>
</html>
