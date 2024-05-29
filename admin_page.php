<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/vars.css">
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">
    <link rel="stylesheet" type="text/css" href="./styles/admin-page.css">
    <title>Golden Wing</title>
</head>
<body>
    <div class="administrador_section">
        <div class="user_page">
            <img src="./assets/profile_session-icon.svg" alt="icone de usuario">
            <p class="user_login">BEM-VINDO, ADMINISTRADOR!</p>
        </div>
        <h1>O QUE GOSTARIA DE FAZER HOJE?</h1>
        <div class="admin_functions_section">
            <div id="add_product">
                <span>Adicionar Produto</span>
                <div class="function_button"><a href="cadastrar-produto.php"> <img src="./assets/add-product-icon.svg" alt=""></a></div>
            </div>
            <div id="remove_product">
                <span>Remover Produto</span>
                <div class="function_button"><a href=""> <img src="./assets/remove-product-icon.svg" alt=""></a></div>
            </div>
            <div id="register_discount">
                <span>Registrar desconto</span>
                <div class="function_button"><a href="#"> <img src="./assets/discount-icon.svg" alt=""></a></div>
            </div>
            <div id="generate_report">
                <span>Gerar Relatório</span>
                <div class="function_button"><a href="#"> <img src="./assets/generate-report-icon.svg" alt=""></a></div>
            </div>
            <div id="asses_stock">
                <span>Analisar Estoque</span>
                <div class="function_button"><a href="#"> <img src="./assets/asses-stock-icon.svg" alt=""></a></div>
            </div>
        </div>
    </div>
</body>
</html>