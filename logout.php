<?php
session_start();

// Finaliza a sessão
session_destroy();

// Redireciona o usuário de volta para a página de login (ou qualquer outra página desejada)
header("Location: login-gw.php");
exit;
?>