<?php

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validação do formato do email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: login.php?error=invalid_email');
        exit;
    }

    // Prepara a consulta para evitar SQL Injection
    $stmt = $conexao->prepare("SELECT SENHA FROM Login WHERE EMAIL = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se o email existe
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verifica a senha
        if (password_verify($senha, $row['SENHA'])) {
            // Acesso permitido
            // Inicie a sessão ou redirecione conforme necessário
            session_start();
            $_SESSION['email'] = $email; // Exemplo de uso de sessão
            header('Location: testagem.php'); // Redirecionar para uma página de sucesso
            exit;
        } else {
            header('Location: login.php?error=wrong_password');
            exit;
        }
    } else {
        header('Location: login.php?error=email_not_found');
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}
?>