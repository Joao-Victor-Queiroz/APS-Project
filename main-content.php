<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/vars.css">
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">
    <link rel="stylesheet" type="text/css" href="./styles/footer.css">
    <link rel="stylesheet" type="text/css" href="./styles/main-content.css"> 
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
    <main>
        <div class="main_content">
            <div class="categorias">
                <h3 class="categoria-title">Categorias</h3>
                <div class="categoria_circles">
                    <div class="circle" id="circle-1"><a href=""><img src="./assets/mouse-icon.svg" alt=""></a></div>
                    <div class="circle" id="circle-2"><a href=""><img src="./assets/keyboard-icon.svg" alt=""></a></div>
                    <div class="circle" id="circle-3"><a href=""><img src="./assets/headphone-icon.svg" alt=""></a></div>
                    <div class="circle" id="circle-4"><a href=""><img src="./assets/action-figure.svg" alt=""></a></div>
                    <div class="circle" id="circle-5"><a href=""><img src="./assets/book-icon.svg" alt=""></a></div>
                    <div class="circle" id="circle-6"><a href=""><img src="./assets/view-more-icon.svg" alt=""></a></div>
                </div>
            </div>
            <div class="produtos_cards-1">
                <span class="title-categoria">PRODUTOS</span>
                <div class="categoria_1">
                <?php
// Conexão com o banco de dados
$usuario = 'root';
$senha = '';
$database = 'goldenwing';
$host= 'localhost';


$conn =  mysqli_connect($host, $usuario, $senha, $database);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta para recuperar os produtos
$sql = "SELECT nomeProduto, precoProduto, imgProduto FROM produto";


$result = $conn->query($sql);

// Verifica se há produtos
if ($result->num_rows > 0) {
    // Exibe os produtos
    while($row = $result->fetch_assoc()) {
        echo "<div id='produto-categoria_1'>";
        echo "<div class='imagem_produto'>";
        echo "<img src='" . $row['imgProduto'] . "' alt='" . $row['nomeProduto'] . "'>";
        echo "</div>";
        echo "<div class='infos_produto'>";
        echo "<div class='nome_produt'>";
        echo "<a class='product_name' href='product-page.php?nomeProduto=" . urlencode($row['nomeProduto']) . "'>" . $row['nomeProduto'] . "</a>";
        echo "</div>";
        echo "<div class='valor_produto'>";
        echo "<span class='product_price'>R$" . $row['precoProduto'] . "</span>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "Nenhum produto encontrado.";
}

$conn->close();
?>

                    
                   
                   
                </div>
            </div>
                   </div>
        </div>
    </main>
    <footer>
            <div class="quem-somos">
                <strong class="titulo-footer">Gostou do trabalho?</strong>
                <a href="?pg=quem-somos" class="link-quem-somos">Conheça mais sobre a gente!</a>
            </div>
    </footer>
</body>
</html>