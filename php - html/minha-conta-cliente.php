<?php
session_start(); // Inicia a sessão

// Verifica se o email está definido na sessão
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include_once('config.php'); // Inclui o arquivo de configuração para a conexão com o banco de dados

$logado = $_SESSION['email']; // Armazena o email do usuário logado

// Função para imprimir dados da tabela Cliente
function imprimirClientes($conexao) {
    // Prepara a consulta para selecionar todos os dados da tabela Cliente
    $stmt = $conexao->prepare("SELECT * FROM Cliente WHERE EMAIL = ?");
    $stmt->bind_param("s", $_SESSION['email']);
    
    if ($stmt->execute()) {
        return $stmt->get_result(); // Retorna o resultado da consulta
    } else {
        echo "Erro ao executar a consulta: " . $stmt->error;
        return null; // Retorna null em caso de erro
    }
}

// Função para imprimir agendamentos com data **igual à data atual**
function imprimirAgendaHoje($conexao) {
    // Prepara a consulta para selecionar os agendamentos com data igual a hoje
    $stmt = $conexao->prepare("
        SELECT a.DATA_AGENDA, a.HORARIO, s.DESCRICAO, p.NOME AS NOME_PROFISSIONAL
        FROM Agenda a 
        JOIN Profissional p ON a.ID_PROFISSIONAL = p.ID_PROFISSIONAL 
        JOIN Servico s ON a.COD_SERVICO = s.COD_SERVICO
        WHERE a.ID_CLIENTE = (SELECT ID_CLIENTE FROM Cliente WHERE EMAIL = ?) 
        AND a.DATA_AGENDA = CURDATE()  -- Filtra agendamentos com data igual a hoje
        ORDER BY a.HORARIO ASC
    ");
    $stmt->bind_param("s", $_SESSION['email']);
    
    if ($stmt->execute()) {
        return $stmt->get_result(); // Retorna o resultado da consulta
    } else {
        echo "Erro ao executar a consulta: " . $stmt->error;
        return null; // Retorna null em caso de erro
    }
}

// Função para imprimir agendamentos com data **maior que a data atual** (futuros)
function imprimirAgendaFutura($conexao) {
    // Prepara a consulta para selecionar os agendamentos com data maior que hoje
    $stmt = $conexao->prepare("
        SELECT a.DATA_AGENDA, a.HORARIO, s.DESCRICAO, p.NOME AS NOME_PROFISSIONAL
        FROM Agenda a 
        JOIN Profissional p ON a.ID_PROFISSIONAL = p.ID_PROFISSIONAL 
        JOIN Servico s ON a.COD_SERVICO = s.COD_SERVICO
        WHERE a.ID_CLIENTE = (SELECT ID_CLIENTE FROM Cliente WHERE EMAIL = ?) 
        AND a.DATA_AGENDA > CURDATE()  -- Filtra agendamentos com data maior que hoje
        ORDER BY a.DATA_AGENDA ASC, a.HORARIO ASC
    ");
    $stmt->bind_param("s", $_SESSION['email']);
    
    if ($stmt->execute()) {
        return $stmt->get_result(); // Retorna o resultado da consulta
    } else {
        echo "Erro ao executar a consulta: " . $stmt->error;
        return null; // Retorna null em caso de erro
    }
}

// Função para imprimir agendamentos com data **menor que a data atual** (passados)
function imprimirAgendaPassada($conexao) {
    // Prepara a consulta para selecionar os agendamentos com data menor que hoje
    $stmt = $conexao->prepare("
        SELECT a.DATA_AGENDA, a.HORARIO, s.DESCRICAO, p.NOME AS NOME_PROFISSIONAL
        FROM Agenda a 
        JOIN Profissional p ON a.ID_PROFISSIONAL = p.ID_PROFISSIONAL 
        JOIN Servico s ON a.COD_SERVICO = s.COD_SERVICO
        WHERE a.ID_CLIENTE = (SELECT ID_CLIENTE FROM Cliente WHERE EMAIL = ?) 
        AND a.DATA_AGENDA < CURDATE()  -- Filtra agendamentos com data menor que hoje
        ORDER BY a.DATA_AGENDA DESC, a.HORARIO ASC
    ");
    $stmt->bind_param("s", $_SESSION['email']);
    
    if ($stmt->execute()) {
        return $stmt->get_result(); // Retorna o resultado da consulta
    } else {
        echo "Erro ao executar a consulta: " . $stmt->error;
        return null; // Retorna null em caso de erro
    }
}

// Chama as funções para obter os dados
$result = imprimirClientes($conexao);
$resultAgendaHoje = imprimirAgendaHoje($conexao);
$resultAgendaFutura = imprimirAgendaFutura($conexao);
$resultAgendaPassada = imprimirAgendaPassada($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/minha-conta.css">
    <link rel="stylesheet" href="css/historico.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- /Google fonts -->

    <title>Minha Conta</title>
</head>
<body>
   
<header>
    <div class="home">
        <section class="logo">
            <a href="index.php"> <img src="imagens/Esencia Bella Logo.png" alt="Logotipo do site"></a>   
        </section>
        <section class="menu">
            <div class="fixo">
                <nav>
                    <ul>
                        <li ><a href="index.php">home</a></li>
                        <li class="semq"><a href="sobrenos.php">sobre nós</a></li>
                        <li><a href="equipe.php">equipe</a></li>
                        <li><a href="testagem.php">serviços</a></li>
                        <li class="drop-hover">
                            <a href="login.php"><?php echo $logado ? 'login' : 'Login'; ?></a>
                            <?php if ($logado): ?>
                                <div class="drop">
                                    <a href="minha-conta-cliente.php">Minha conta</a>
                                    <a href="feedback.php">Enviar Feedback</a>
                                    <a href="sair.php">Sair</a>
                                </div>
                            <?php endif; ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </div>
    <hr>
</header>

<div class="container mt-5">
    <h2>Minha conta</h2>
    <ul class="dados">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <li>
                    Nome: <?php echo htmlspecialchars($row['NOME']); ?>
                </li>
                <li>
                    Email: <?php echo htmlspecialchars($row['EMAIL']); ?>
                </li>
                <li>
                    Data de nascimento: <?php echo htmlspecialchars($row['DATA_NASC']); ?>
                </li>
                <li>
                    Contato: <?php echo htmlspecialchars($row['CELULAR']); ?>
                </li>
            <?php endwhile; ?>
        <?php else: ?>
            <li>Nenhum dado encontrado para o usuário logado.</li>
        <?php endif; ?>
    </ul>
</div>
<br><br>
<!-- Tabela de Agendamentos de Hoje -->
<div class="table-responsive">
    <h4>Hoje</h4>
    <table class="table" id="historico">
        <thead>
            <tr>
                <th>Data</th>
                <th>Horário</th>
                <th>Serviço</th>
                <th>Profissional</th>
            </tr>
            <hr class="historico">
        </thead>
        <tbody>
        <?php if ($resultAgendaHoje && $resultAgendaHoje->num_rows > 0): ?>
            <?php while ($rowAgenda = $resultAgendaHoje->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($rowAgenda['DATA_AGENDA']); ?></td>
                    <td><?php echo htmlspecialchars($rowAgenda['HORARIO']); ?></td>
                    <td><?php echo htmlspecialchars($rowAgenda['DESCRICAO']); ?></td>
                    <td><?php echo htmlspecialchars($rowAgenda['NOME_PROFISSIONAL']); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">Nenhum agendamento para hoje.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<br>
<!-- Tabela de Agendamentos Futuros -->
<div class="table-responsive">
    <h4>Agendamentos Futuros</h4>
    <table class="table" id="historico">
        <thead>
            <tr>
                <th>Data</th>
                <th>Horário</th>
                <th>Serviço</th>
                <th>Profissional</th>
            </tr>
            <hr class="historico">
        </thead>
        <tbody>
        <?php if ($resultAgendaFutura && $resultAgendaFutura->num_rows > 0): ?>
            <?php while ($rowAgenda = $resultAgendaFutura->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($rowAgenda['DATA_AGENDA']); ?></td>
                    <td><?php echo htmlspecialchars($rowAgenda['HORARIO']); ?></td>
                    <td><?php echo htmlspecialchars($rowAgenda['DESCRICAO']); ?></td>
                    <td><?php echo htmlspecialchars($rowAgenda['NOME_PROFISSIONAL']); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">Nenhum agendamento futuro encontrado.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<br>
<!-- Tabela de Agendamentos Passados -->
<div class="table-responsive">
    <h4>Histórico</h4>
    <table class="table" id="historico">
        <thead>
            <tr>
                <th>Data</th>
                <th>Horário</th>
                <th>Serviço</th>
                <th>Profissional</th>
            </tr>
            <hr class="historico">
        </thead>
        <tbody>
        <?php if ($resultAgendaPassada && $resultAgendaPassada->num_rows > 0): ?>
            <?php while ($rowAgenda = $resultAgendaPassada->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($rowAgenda['DATA_AGENDA']); ?></td>
                    <td><?php echo htmlspecialchars($rowAgenda['HORARIO']); ?></td>
                    <td><?php echo htmlspecialchars($rowAgenda['DESCRICAO']); ?></td>
                    <td><?php echo htmlspecialchars($rowAgenda['NOME_PROFISSIONAL']); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">Nenhum agendamento passado encontrado.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Scripts do Bootstrap (opcional) -->
<script src="https://code.jquery.com/jquery-3.5.2.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
