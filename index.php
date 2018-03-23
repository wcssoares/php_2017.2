<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <title>Aula 03</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <style>
            .container {
                display: flex;
                justify-content: space-between;
            }

            .container::before, .container::after {
                width: 30px;
                height: 30px;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Gerenciamento de Peças</h1>
            <p>Automotivo Ltda</p> 
        </div>
        <div class="container-fluid">
            <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12"  align="center">
                <div class="jumbotron col-md-offset-3 col-md-6">
                    <fieldset>
                        <legend>Formulário</legend>
                    <form>
                       
                        <div class="form-group">
                            <label for="id_nome">Nome</label>
                            <input type="text" class="form-control" id="id_nome" name="nome" placeholder="Digite o seu nome">
                        </div>
                        <div class="form-group">
                            <label for="id_matricula">Matrícula</label>
                            <input type="varchar" class="form-control" id="id_matricula" name="matricula" placeholder="Matricula do aluno">
                        </div>
                        <div class="form-group">
                            <label for="id_telefone">Telefone</label>
                            <input type="tel" class="form-control" id="id_telefone" name="telefone" placeholder="Digite o seu telefone">
                        </div>
                        <button type="submit" formaction="cadastro.php" formmethod="post" class="btn btn-default">enviar</button>
                    </form>
                    </fieldset>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
