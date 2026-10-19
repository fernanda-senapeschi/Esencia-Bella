<?php

session_start(); // Inicia a sessão

// Verifica se o email está definido na sessão
$logado = isset($_SESSION['email']) ? $_SESSION['email'] : null;

include_once('config.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- /Google fonts -->
    <title>Home</title>
</head>
<body>
    <header>

        <div class="home">

            <section class="logo">
                <a href="home.html"> <img src="imagens/Esencia Bella Logo.png" alt="Logotipo do site"></a>   
            </section>

            <section class="menu">
                <div class="fixo">
                    <nav>
                        <ul>
                            <li class="color"><a href="index.php">home</a></li>
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

    <div class="foto-maior">
        <img src="imagens/home/salao.png" alt="fotomaior">
    </div>

    <div class="main">

        <div class="esquerda">
        <p>O salão de beleza Esencia Bella é um estabelecimento criado dedicado ao cuidado da aparência das mulheres e o bem-estar dos clientes, oferecendo uma variedade de serviços, além de um atendimento de qualidade e um ambiente acolhedor com ótimas risadas.</p>
            <button class="btn"><a href="equipe.php">Conhecer</a></button>
    </div>

        <div class="direita">
            <img src="imagens/home/m.png" alt="1">
            <img src="imagens/home/e.png" alt="2">
            <img src="imagens/home/mq.png" alt="3">
        </div>

    </div>

</html>