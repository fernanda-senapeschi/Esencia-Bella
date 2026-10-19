<?php
session_start(); // Inicia a sessão

// Verifica se o email está definido na sessão
$logado = isset($_SESSION['email']) ? $_SESSION['email'] : null;

include_once('config.php');

$profissional = isset($_POST['opcoes']) ? $_POST['opcoes'] : '';
$data_selecionada = isset($_POST['data']) ? $_POST['data'] : '';
$horario_selecionado = isset($_POST['horarios']) ? $_POST['horarios'] : '';

// Obter o ID_CLIENTE com base no e-mail da sessão
$stmt = $conexao->prepare("SELECT ID_CLIENTE from Cliente WHERE EMAIL = ?");
$stmt->bind_param("s", $_SESSION['email']);

if ($stmt->execute()) {
    // Obtém o resultado da consulta
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Obtém a linha de resultados
        $row = $result->fetch_assoc();
        
        // Armazena o ID_CLIENTE na variável $idCliente
        $idCliente = $row['ID_CLIENTE'];
    } else {
        echo "Nenhum cliente encontrado com o e-mail fornecido.";
        $idCliente = null; // Se não encontrar, atribui null
    }
} else {
    echo "Erro ao executar a consulta: " . $stmt->error;
    $idCliente = null; // Retorna null em caso de erro
}

// Prepara a consulta para buscar horários ocupados, se uma data for selecionada
$horarios_ocupados = [];
if (!empty($data_selecionada) && !empty($profissional)) {
    $stmt = $conexao->prepare("SELECT HORARIO FROM Agenda WHERE ID_PROFISSIONAL = ? AND DATA_AGENDA = ?");
    $stmt->bind_param("ss", $profissional, $data_selecionada);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $horarios_ocupados[] = $row['HORARIO'];
    }
}

// Array de horários disponíveis
$horarios_disponiveis = ['8:00', '9:00', '10:00', '11:00', '13:00', '14:00', '15:00', '16:00'];

// Filtra os horários disponíveis
$horarios_finais = array_diff($horarios_disponiveis, $horarios_ocupados);

// Função para gerar as próximas 15 datas
function gerarDatas($dias) {
    $datas = [];
    $hoje = date('Y-m-d');
    $hora_atual = date('H');

    for ($i = 0; $i < $dias; $i++) {
        $data = date('Y-m-d', strtotime("+$i days"));
        
        // Verifica se é hoje e se a hora atual é maior ou igual a 16
        if ($data == $hoje && $hora_atual >= 16) {
            continue; // Pula a data de hoje
        }
        
        $datas[] = $data;
    }
    return $datas;
}

// Gera as próximas 10 datas
$datas_futuras = gerarDatas(10);

// Verifica se o formulário foi enviado para agendar
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($horario_selecionado)) {
    // Verifica se o cliente já tem agendamento para o mesmo dia e horário com outro profissional
    $stmt = $conexao->prepare("SELECT COUNT(*) FROM Agenda WHERE ID_CLIENTE = ? AND DATA_AGENDA = ? AND HORARIO = ?");
    $stmt->bind_param("iss", $idCliente, $data_selecionada, $horario_selecionado);
    $stmt->execute();
    $stmt->bind_result($count_cliente);
    $stmt->fetch();
    $stmt->close();

    if ($count_cliente > 0) {
        // Se o cliente já tem um agendamento no mesmo horário e data, com outro profissional
        echo "<script>alert('Você já tem um agendamento para este horário. Por favor, escolha outro horário.');</script>";
    } else {
        // Verifica se o profissional já tem agendamento para o mesmo horário e data com outro cliente
        $stmt = $conexao->prepare("SELECT COUNT(*) FROM Agenda WHERE ID_PROFISSIONAL = ? AND DATA_AGENDA = ? AND HORARIO = ?");
        $stmt->bind_param("iss", $profissional, $data_selecionada, $horario_selecionado);
        $stmt->execute();
        $stmt->bind_result($count_profissional);
        $stmt->fetch();
        $stmt->close();

        if ($count_profissional > 0) {
            // Se o profissional já tem um agendamento para o mesmo horário e data
            echo "<script>alert('O profissional escolhido já tem um agendamento para este horário. Por favor, escolha outro horário.');</script>";
        } else {
            // Se nenhum dos dois casos acima for verdadeiro, insere o agendamento
            $stmt = $conexao->prepare("INSERT INTO Agenda (DATA_AGENDA, HORARIO, COD_SERVICO, ID_CLIENTE, ID_PROFISSIONAL) VALUES (?, ?, ?, ?, ?)");
            $cod_servico = 23; // Exemplo de código de serviço
            $stmt->bind_param("ssiii", $data_selecionada, $horario_selecionado, $cod_servico, $idCliente, $profissional);

            if ($stmt->execute()) {
                echo "<script>alert('Agendamento realizado com sucesso!');window.location.href = 'minha-conta-cliente.php'; </script>";
            } else {
                echo "<script>alert('Erro ao agendar: " . $stmt->error . "');</script>";
            }
            $stmt->close();
        }
    }
}
?>

<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/agendar.css">
    <link rel="stylesheet" href="css/voltar.css">
    <title>Esmaltação</title>
    <script>
        function atualizarHorarios() {
            var dataSelecionada = document.getElementById('data').value;
            var profissionalSelecionado = document.getElementById('opcoes').value;
            var horariosDisponiveis = <?php echo json_encode($horarios_finais); ?>;
            var horariosOcupados = [];

            // Faz uma requisição AJAX para verificar os horários ocupados
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'verificar_horarios.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.status == 200) {
                    horariosOcupados = JSON.parse(this.responseText);
                    var selectHorarios = document.getElementById('horarios');
                    selectHorarios.innerHTML = '<option value="">Selecione um horário</option>';

                    // Filtra os horários disponíveis
                    horariosDisponiveis.forEach(function(horario) {
                        if (!horariosOcupados.includes(horario)) {
                            var option = document.createElement('option');
                            option.value = horario;
                            option.textContent = horario;
                            selectHorarios.appendChild(option);
                        }
                    });

                    // Se não houver horários disponíveis
                    if (selectHorarios.options.length === 1) {
                        alert('Horário indisponível.');
                    }
                }
            };
            xhr.send('data=' + encodeURIComponent(dataSelecionada) + '&profissional=' + encodeURIComponent(profissionalSelecionado));
        }
    </script>
</head>

<body>
    <header>
        <div class="home">
            <section class="logo">
                <a href="home.php"> <img src="imagens/Esencia Bella Logo.png" alt="Logotipo do site"></a>   
            </section>

            <section class="menu">
                <div class="fixo">
                    <nav>
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li class="semq"><a href="sobrenos.php">sobre nós</a></li>
                            <li><a href="equipe.php">equipe</a></li>
                            <li class="color"><a href="testagem.php">serviços</a></li>
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

    <div class="container">
        <button class="voltar" id="backButton"><i class="bi bi-arrow-return-left"></i></button>
    </div>
    <script src="js/scrit.js"></script>


    <div class="tela">
        <div class="main">
            <div class="img">
                <img src="imagens/servicos/esmaltação.png" alt="Esmaltação">
        </div>
 
        <div class="txt">
            <h1>Esmaltação</h1>
            <h2>manicure</h2>
            <p>É o processo de aplicação de esmalte nas unhas, que pode ser feito de várias maneiras e com diferentes tipos de produtos. Este procedimento é popular por sua capacidade de embelezar as unhas, permitindo que as pessoas expressem sua personalidade e estilo.</p>
            </div>
        </div>

        <div class="main-login">
            <div class="card-login">
                <h1>Agendar</h1>
                <form id="formulario" method="post" action="esmaltacao.php">   
                    <label for="opcoes">Profissional:</label>
                    <select id="opcoes" name="opcoes" onchange="atualizarHorarios()">
                        <option value="">Selecione um profissional</option>
                        <option value="22" <?php if ($profissional == "22") echo 'selected'; ?>>Viviane C. de Souza</option>
                        <option value="23" <?php if ($profissional == "23") echo 'selected'; ?>>Giovanna Fernandes</option>
                        <option value="24" <?php if ($profissional == "24") echo 'selected'; ?>>Gabriella C. Tanaka</option>
                    </select>

                    <label for="data">Data:</label>
                    <select name="data" id="data" onchange="atualizarHorarios()">
                        <option value="">Selecione uma data</option>
                        <?php 
                        // Preenche o select com as datas futuras
                        foreach ($datas_futuras as $data) {
                            echo '<option value="'.$data.'">'.date('d/m/Y', strtotime($data)).'</option>';
                        }
                        ?>
                    </select>

                    <label for="horarios">Horário:</label>
                    <select name="horarios" id="horarios">
                        <option value="">Selecione um horário</option>
                        <?php 
                        // Preenche o select com os horários disponíveis
                        foreach ($horarios_finais as $horario) {
                            echo '<option value="'.$horario.'">'.$horario.'</option>';
                        }
                        ?>
                    </select>
        
                    <input type="submit" value="Agendar">
                </form>  
            </div>
        </div>
    </div>
</body>
</html>
