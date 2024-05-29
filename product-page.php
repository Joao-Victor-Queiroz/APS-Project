<?php
// Conexão com o banco de dados
$usuario = 'root';
$senha = '';
$database = 'goldenwing';
$host = 'localhost';

$conn = mysqli_connect($host, $usuario, $senha, $database);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se o nomeProduto foi passado na URL
if (isset($_GET['nomeProduto'])) {
    $nomeProduto = $_GET['nomeProduto'];
    // Evitar SQL Injection
    $nomeProduto = mysqli_real_escape_string($conn, $nomeProduto);

    // Consulta para recuperar os detalhes do produto
    $sql = "SELECT * FROM produto WHERE nomeProduto = '$nomeProduto'";
    $result = $conn->query($sql);

    // Verifica se o produto foi encontrado
    if ($result->num_rows > 0) {
        // Exibe os detalhes do produto
        $row = $result->fetch_assoc();
    } else {
        echo "Produto não encontrado.";
        exit;
    }
} else {
    echo "Nome do produto não fornecido.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/vars.css">
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">
    <link rel="stylesheet" type="text/css" href="./styles/main-content.css"> 
    <link rel="stylesheet" type="text/css" href="./styles/product-page.css">
    <title>Golden Wing</title>
</head>
<body>
    <header>
        <nav class="header_navigation">
            <img src="./assets/wing-icon.svg" alt="logo-golden_wing">
            <div class="header_search">
                <img src="./assets/search-icon.svg" alt="">
                <input id="search_input" type="text" maxlength="800" placeholder="O que você está procurando hoje?">
            </div>
            <div class="shopping-cart">
                <span class="my_cart">Meu carrinho</span>
                <img src="/assets/shopping-icon.svg" alt="">
            </div>
            <div class="my_profile">
    <?php
    session_start();
    // Verifica se o usuário está logado
    if (isset($_SESSION['nome'])) {
        // Exibe o nome do usuário logado
        echo '<a href="?pg=profile-page">' . $_SESSION['nome'] . '<img src="./assets/profile-icon.svg" alt=""></a>';
    } else {
        // Se o usuário não estiver logado, exibe o link de login
        echo '<a href="login-gw.php"><span class="profile">É usuário? Entre aqui</span><img src="./assets/profile-icon.svg" alt=""></a>';
    }
    ?>
</div>
        </nav>
    </header>
    <div class="product-section">
        <div class="product_frame">
            <div class="product_image">
                <img src="<?php echo $row['imgProduto']; ?>" alt="">
            </div>
            <div class="product_infos">
                <div class="product_name_price">
                    <span class="product_name"><?php echo $row['nomeProduto']; ?></span>
                    <span class="product_price"><?php echo 'R$' . $row['precoProduto']; ?></span>
                </div>
                <div class="product_description">
                    <h3>Descrição do produto</h3>
                    <p class="some_description"><?php echo $row['descricaoProduto']; ?></p>
                </div>
                <div class="product_options"> 
                    <input type="number" name="qtd_produto" id="qtd_produto" placeholder="Quantidade do produto">
                    <div class="buttons_product">
                        <button class="add_cart"><img src="./assets/add-cart-icon.svg" alt=""></button>
                        <button class="buy_product"><a href="payment-page.php">Comprar</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="comment-section">
        <h2 class="comment-title">COMENTÁRIOS E AVALIAÇÕES</h2>
        <div class="comment_frame">
            <div class="add_comment">
                <input type="text" class="user_comment" placeholder="Adicione um comentário">
                <button class="add_user_comment">Adicionar comentário</button>
            </div>
            <div class="avaliacao_1">
                <h4 class="user_name">João da Silva</h4>
                <div class="user_1">
                    <img src="./assets/profile-icon.svg" alt="">
                    <p>Lorem ipsum dolor sit amet. Ut quia quae est exercitationem earum qui quisquam atque.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
