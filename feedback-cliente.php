<?php

require_once 'config.php';

// Verifica a conexão
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Pegando os dados vindos do formulário e sanitizando
$classificacao = filter_input(INPUT_POST, 'estrela', FILTER_SANITIZE_NUMBER_INT);
$profissional = filter_input(INPUT_POST, 'prof', FILTER_SANITIZE_NUMBER_INT);
$servico = filter_input(INPUT_POST, 'serv', FILTER_SANITIZE_NUMBER_INT);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
$data_atual = date('Y-m-d'); // Formato adequado para o banco de dados
$hora_atual = date('H:i:s'); // Formato adequado para o banco de dados

// Preparar a consulta
$stmt = $conexao->prepare("INSERT INTO Feedback (DATA, HORA, CLASSIFICACAO, ID_PROFISSIONAL, COD_SERVICO, MENSAGEM) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssiiis", $data_atual, $hora_atual, $classificacao, $profissional, $servico, $mensagem);

// Executar a consulta
if ($stmt->execute()) {
    // Redireciona para outra página
    header("Location: feedback.php");
    exit(); // É uma boa prática usar exit após o redirecionamento
} else {
    echo "Erro ao registrar no Feedback: " . $stmt->error;
}

// Fecha as conexões
$stmt->close();
$conexao->close();
?>