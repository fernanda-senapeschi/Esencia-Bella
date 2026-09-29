<?php
session_start(); // Inicia a sessão

// Verifica se o email está definido na sessão
$logado = isset($_SESSION['email']) ? $_SESSION['email'] : null;

// Conexão com o banco de dados
include_once('config.php');

if (isset($_GET['prof_id'])) {
    // Se um profissional foi selecionado, busca os serviços
    $prof_id = intval($_GET['prof_id']);

    // Mapeamento de profissionais para serviços
    $servicesMap = [
        16 => [27, 28], // Profissional 16
        17 => [27, 28], // Profissional 17
        18 => [27, 28], // Profissional 18
        19 => [14, 15, 16, 17, 18, 19, 20, 21, 22], // Profissional 19
        20 => [14, 15, 16, 17, 18, 19, 20, 21, 22], // Profissional 20
        21 => [14, 15, 16, 17, 18, 19, 20, 21, 22], // Profissional 21
        22 => [23, 24, 25, 26, 29], // Profissional 22
        23 => [23, 24, 25, 26, 29], // Profissional 23
        24 => [23, 24, 25, 26, 29], // Profissional 24
        26 => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13], // Profissional 26
        27 => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13], // Profissional 27
        28 => [1, 2, 3, 4, 5, 6, 11, 12, 13], // Profissional 28
        29 => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13], // Profissional 29
    ];

    // Mapeamento de IDs de serviços para nomes
    $serviceNames = [
        1 => "Banho de Lua",
        2 => "Brow Lamination",
        3 => "Depilação meia perna",
        4 => "Depilação perna total",
        5 => "Axila",
        6 => "Buço",
        7 => "Virilha",
        8 => "Virilha biquíne",
        9 => "Virilha completa",
        10 => "Virilha estilizada",
        11 => "Sobrancelha masculina e feminina",
        12 => "Micro pigmentação",
        13 => "Limpeza de pele",
        14 => "Corte",
        15 => "Hidratação",
        16 => "Selante",
        17 => "Progressiva",
        18 => "Tintura",
        19 => "Plástica dos fios",
        20 => "Escova",
        21 => "Penteados",
        22 => "Mega Hair",
        23 => "Esmaltação",
        24 => "Unha em gel",
        25 => "Fibra de vidro",
        26 => "Limpeza de unha",
        27 => "Maquiagens",
        28 => "Maquiagem para noiva",
        29 => "Blindagem de unha",
    ];

    // Verifica se o profissional existe no mapeamento
    if (array_key_exists($prof_id, $servicesMap)) {
        $services = [];
        foreach ($servicesMap[$prof_id] as $serviceId) {
            // Adiciona o serviço ao array com seu nome
            $services[] = ['id' => $serviceId, 'name' => $serviceNames[$serviceId]];
        }
        echo json_encode($services);
    } else {
        echo json_encode([]); // Retorna um array vazio se não houver serviços
    }
    exit; // Encerra o script após retornar os dados
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/feedback.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <title>Feedback</title>
    <script>
    function fetchServices(professionalId) {
        if (professionalId) {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "?prof_id=" + professionalId, true);
            xhr.onload = function() {
                if (this.status === 200) {
                    const services = JSON.parse(this.responseText);
                    const servSelect = document.getElementById('serv');
                    servSelect.innerHTML = '<option value="">Selecione um Serviço</option>'; // Reset options
                    services.forEach(service => {
                        servSelect.innerHTML += `<option value="${service.id}">${service.name}</option>`;
                    });
                }
            };
            xhr.send();
        } else {
            document.getElementById('serv').innerHTML = '<option value="">Selecione um Serviço</option>'; // Reset options
        }
    }
    </script>
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
                            <li><a href="index.php">home</a></li>
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
    <div class="main-login">
        <div class="card-login">
            <h1>Feedback</h1>
            <form id="formulario" action="feedback-cliente.php" method="post">
                <label for="class">Classificação:</label><br>
                <div class="estrelas">
                    <input type="radio" name="estrela" id="estrela_1" value="1">
                    <label for="estrela_1">★</label>
                    <input type="radio" name="estrela" id="estrela_2" value="2">
                    <label for="estrela_2">★</label>
                    <input type="radio" name="estrela" id="estrela_3" value="3">
                    <label for="estrela_3">★</label>
                    <input type="radio" name="estrela" id="estrela_4" value="4">
                    <label for="estrela_4">★</label>
                    <input type="radio" name="estrela" id="estrela_5" value="5">
                    <label for="estrela_5">★</label>
                </div>
                <br><br>

                <label for="opcoes">Profissional:</label>
                <select id="prof" name="prof" required onchange="fetchServices(this.value)">
                    <option value="">Selecione um Profissional</option>
                    <option value="16">Julia Goulart</option>
                    <option value="17">Kaleb Rocha</option>
                    <option value="18">Fabiana C. dos Santos</option>
                    <option value="19">Dayene C. Gomes</option>
                    <option value="20">Matheus Antonelli</option>
                    <option value="21">Silvia S. Martins</option>
                    <option value="22">Viviane C. de Souza</option>
                    <option value="23">Giovanna Fernandes</option>
                    <option value="24">Gabriella C. Tanaka</option>
                    <option value="26">Daniela L. Satiro</option>
                    <option value="27">Nicolas Paschoal</option>
                    <option value="28">Rafaela C. Brito</option>
                    <option value="29">Sophia C. da Silva Alves</option>
                </select>
            
                <label for="serv">Serviços:</label>
                <select name="serv" id="serv" required>
                    <option value="">Selecione um Serviço</option>
                </select>

                <br>
                <label for="mensagem">Mensagem:</label>
                <br>
                <input type="text" id="mensagem" name="mensagem" placeholder="Digite sua mensagem" required>
                <br>
                <input type="submit" value="Enviar"> 
            </form>
        </div>
    </div>
</body>
</html>