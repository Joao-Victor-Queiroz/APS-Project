<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/vars.css">
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">
    <link rel="stylesheet" type="text/css" href="./styles/login-cadastro.css"> 
    <link rel="stylesheet" type="text/css" href="./styles/media-queries.css">
    <title>Golden Wing</title>
</head>
<body>
    <div class="login-site">
        <div class="logo-site">
            <img src="./assets/wing-icon-yellow.svg" alt="logo-site">
            <h1 class="titulo-logo">GOLDEN WING</h1>
        </div>
        <div class="formulario-login">
            <form action="logindb.php" class="form-cadastro_content" method="post">
                <div class="campo-formulario">
                    <label for="email">EMAIL</label>
                    <input type="email"  id="email" name="email" placeholder="Digite seu e-mail">
                </div>
                <div class="campo-formulario">
                    <label for="name">SENHA</label>
                    <input type="password"  id="senha" name="senha" placeholder="Digite sua senha">
                </div>
                <div class="login-formas">
                    <div class="secao-login">
                        <div class="login-icon-1"><a href=""><img src="./assets/google-icon.svg" alt=""></a></div>
                        <div class="login-icon-2"><a href=""><img src="./assets/facebook-icon.svg" alt=""></a></div>
                        <div class="login-icon-3"><a href=""><img src="./assets/twitter-icon.svg" alt=""></a></div>
                    </div>
                </div>
                <div class="button-login">
                    <button>Login</button>
                </div>
                <div class="redirecionar-cadastro">
                   <a href="?pg=cadastrar" class="link-cadastrar"> Não tem login? Cadastre-se</a>
                </div>
            </form>
        </div>
       
    </div>
</body>
</html>