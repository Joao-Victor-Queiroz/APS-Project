<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/vars.css">
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">
    <link rel="stylesheet" type="text/css" href="./styles/login-cadastro.css">
    <title>Golden Wing</title>
</head>
<body>
    <div class="formulario-login">
        <form action="cadastrodb.php" class="form-cadastro_content" method="post">
            <div class="campo-formulario">
                <label for="email">Email para contato: </label>
                <input type="email"  id="email" name="email" placeholder="Digite seu nome completo">
            </div>
            <div class="campo-formulario">
                <label for="comentario">Deixe seu comentário ou dúvida!</label>
                <input type="text"  id="comentario" name="comentario" placeholder="Escreva aqui seu comentário">
            </div>
            <div class="button-login">
                <button>Cadastrar</button>
            </div>
</body>
</html>