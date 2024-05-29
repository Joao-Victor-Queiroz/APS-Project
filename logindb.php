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

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastraruser WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($senha === $row['senha']) {
            // Configura a sessão do usuário
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['email'] = $row['email'];

            // Verifica se o email é o email de um administrador
            $email_administrador = 'joaoqueiroz570@gmail.com'; // Defina o email do administrador
            if ($email === $email_administrador) {
                // Se for o email do administrador, redireciona para a página de administração
                header("Location: admin_page.php");
                exit;
            } else {
                // Se não for o email do administrador, redireciona para a página normal
                header("Location: index.php");
                exit;
            }
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Email não encontrado.";
    }

    mysqli_close($conn);
}
?>
