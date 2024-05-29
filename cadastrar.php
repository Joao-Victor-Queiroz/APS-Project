<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/vars.css">
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">
    <link rel="stylesheet" type="text/css" href="./styles/login-cadastro.css">
    <link rel="stylesheet" href="./styles/media-queries.css">
    <title>Golden Wing</title>
</head>
<body>
    <div class="login-site">
        <div class="logo-site">
            <img src="./assets/wing-icon-yellow.svg" alt="logo-site">
            <h1 class="titulo-logo">GOLDEN WING</h1>
        </div>
        <div class="formulario-login">
            <form action="cadastrodb.php" class="form-cadastro_content" method="post">
                <div class="campo-formulario">
                    <label for="nome">NOME</label>
                    <input type="text"  id="nome" name="nome" placeholder="Digite seu nome completo">
                </div>
                <div class="campo-formulario">
                    <label for="email">E-MAIL</label>
                    <input type="email"  id="email" name="email" placeholder="Digite seu email">
                </div>
                <div class="campo-formulario">
                    <label for="senha">SENHA</label>
                    <input type="password"  id="senha" name="senha" placeholder="Digite uma senha válida">
                </div>
                <div class="campo-formulario">
                    <label for="confirmarsenha">CONFIRMAR SENHA</label>
                    <input type="password"  id="confirmarsenha" name="confirmarsenha" placeholder="Digite a senha novamente">
                </div>
                <div class="button-login">
                    <button>Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>