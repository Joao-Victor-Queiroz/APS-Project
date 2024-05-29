<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/vars.css">
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">
    <link rel="stylesheet" type="text/css" href="./styles/profile-page.css">
    <title>Golden Wing</title>
</head>
<body>
    <a href="?pg=main-content" class="button-voltar"><img src="./assets/back-arrow-icon.svg" alt=""></a>
    <div class="profile-section">
        <div class="user_page">
            <img src="./assets/profile_session-icon.svg" alt="icone de usuario">
            <div class="user_name_content">
                <p class="user_login">Você está logado como:</p>
                <?php
    session_start();
    // Verifica se o usuário está logado
    if (isset($_SESSION['nome'])) {
        // Exibe o nome do usuário logado
        echo  $_SESSION['nome'] ;
    } else {
        // Se o usuário não estiver logado, exibe o link de login
        echo '<a href="?pg=login-gw"><span class="profile">É usuário? Entre aqui</span><img src="./assets/profile-icon.svg" alt=""></a>';
    }
    ?>
            </div>
        </div>
        <div class="user_options_section">
            <div class="agrupando_options-1">
                <div class="option_1"><img src="./assets/gear-icon.svg"><a href="#">CONFIGURAÇÕES</a></div>
                <div class="option_2"><img src="./assets/order-icon.svg"><a href="#">PEDIDOS</a></div>
            </div>
            <div class="agrupando_options-2">
                <div class="option_3"><img src="./assets/chat-icon.svg"><a href="#">FALE CONOSCO</a></div>
                <div class="option_4"><img src="./assets/account-settings-icon.svg"><a href="#">CONTA</a></div>
            </div>
        </div>
        <div class="button_logout">
    <a href="logout.php"><button><img src="./assets/logout-icon.svg" alt="">SAIR</button></a>
</div>
    </div>
</body>
</html>