<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = 'root';
    $senha = '';
    $database = 'goldenwing';
    $host = 'localhost';

    $conn = mysqli_connect($host, $usuario, $senha, $database);

    if (!$conn) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmarsenha = $_POST['confirmarsenha'];

    if ($senha !== $confirmarsenha) {
        echo "As senhas não coincidem.";
        exit;
    }

    $sql = "INSERT INTO cadastraruser (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if (mysqli_query($conn, $sql)) {
        echo "Cadastro realizado com sucesso.";
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nome;
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

