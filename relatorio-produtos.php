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

// Consulta para recuperar os produtos
$sql = "SELECT nomeProduto, qtdProduto, precoProduto FROM produto";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Produtos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Relatório de Produtos Disponíveis</h2>
    <table>
        <tr>
            <th>Nome do Produto</th>
            <th>Quantidade em Estoque</th>
            <th>Preço</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['nomeProduto'] . "</td>";
                echo "<td>" . $row['qtdProduto'] . "</td>";
                echo "<td>R$ " . number_format($row['precoProduto'], 2, ',', '.') . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhum produto encontrado.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
