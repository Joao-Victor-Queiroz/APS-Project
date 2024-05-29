<?php
$usuario = 'root';
$senha = '';
$database = 'goldenwing';
$host = 'localhost';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta ao banco de dados MySQL
    $conn = mysqli_connect($host, $usuario, $senha, $database);

    // Verifica se a conexão foi bem-sucedida
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    // Prepara os dados para inserção no banco de dados
    $idProduto = $_POST['idProduto'];
    $idCategoria = $_POST['idCategoria'];
    $nomeProduto = $_POST['nomeProduto'];
    $descricaoProduto = $_POST['descricaoProduto'];
    $precoProduto = $_POST['precoProduto'];
    $qtdProduto = $_POST['qtdProduto'];

    // Diretório onde os arquivos serão armazenados
    $diretorio = 'C:\xampp\htdocs\GoldenWing\assets\\';

    // Verifica se um arquivo foi enviado
    if(isset($_FILES['arquivos'])) {
        // Move o arquivo para o diretório especificado
        $caminho_arquivo = $diretorio . basename($_FILES['arquivos']['name']);
        if (move_uploaded_file($_FILES['arquivos']['tmp_name'], $caminho_arquivo)) {
            // O arquivo foi enviado com sucesso, agora você pode salvar o caminho no banco de dados

            // Insere os dados no banco de dados, incluindo o caminho da imagem
            $sql = "INSERT INTO produto (idProduto, idCategoria, nomeProduto, descricaoProduto, precoProduto, qtdProduto, imgProduto) 
                    VALUES ('$idProduto', '$idCategoria', '$nomeProduto', '$descricaoProduto', '$precoProduto', '$qtdProduto', '$caminho_arquivo')";

            // Executa a consulta SQL e verifica se foi bem-sucedida
            if (mysqli_query($conn, $sql)) {
                echo "Produto cadastrado com sucesso.";
            } else {
                echo "Erro ao cadastrar produto: " . mysqli_error($conn);
            }
        } else {
            echo "Erro ao fazer upload do arquivo.";
        }
    } else {
        echo "Nenhum arquivo enviado.";
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conn);
}
?>
