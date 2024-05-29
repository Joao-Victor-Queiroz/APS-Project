<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['nome'])) {
    die("Acesso negado. Por favor, faça login.");
}

// Conexão com o banco de dados
$usuario = 'root';
$senha = '';
$database = 'goldenwing';
$host = 'localhost';

$conn = new mysqli($host, $usuario, $senha, $database);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifique o método da requisição
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se o ID do produto foi passado pelo formulário
    if (isset($_POST['idProduto']) && !empty($_POST['idProduto'])) {
        $idProduto = $_POST['idProduto'];

        // Evite SQL Injection
        $idProduto = $conn->real_escape_string($idProduto);

        // Verifique se o produto existe
        $checkSql = "SELECT * FROM produto WHERE idProduto = '$idProduto'";
        $checkResult = $conn->query($checkSql);

        if ($checkResult->num_rows > 0) {
            // Produto existe, então remova-o
            $sql = "DELETE FROM produto WHERE idProduto = '$idProduto'";
            if ($conn->query($sql) === TRUE) {
                echo "Produto removido com sucesso.";
            } else {
                echo "Erro ao remover o produto: " . $conn->error;
            }
        } else {
            echo "Produto não encontrado.";
        }
    } else {
        echo "ID do produto não fornecido.";
    }
} else {
    echo "Método de requisição inválido.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Remover Produto</title>
</head>
<body>
    <h2>Remover Produto</h2>
    <form action="removerdb.php" method="post">
        <label for="idProduto">ID do Produto:</label>
        <input type="number" id="idProduto" name="idProduto" required>
        <button type="submit">Remover</button>
    </form>
</body>
</html>
