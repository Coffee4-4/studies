<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema em PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">

                <form action="controle.php" method="POST" name="login">
                    <div class="resposta"></div>
                    <legend>Acesso ao Sistema</legend>

                    <div class="form-group">
                        <label for="login">Login: 
                            <input type="text" class="form-control" id="login" name="login" placeholder="Informe seu login">
                        </label>

                        <label for="login">Senha: 
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe seu senha">
                        </label>
                    </div>



                    <button type="submit" class="btn btn-primary logar">Enviar</button>
                </form>

            </div>
        </div>

    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/principal.js"></script>
</body>

</html>