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
    <link rel="stylesheet" href="css/profissionais.css">
    <link rel="stylesheet" href="css/header.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- /Google fonts -->
    <title>Equipe - Manicure</title>
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

    <div class="container">
        <button class="voltar" id="backButton"><i class="bi bi-arrow-return-left"></i></button>
    </div>
    <script src="js/scrit.js"></script>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/manicure/viviane.png" alt="Limpeza">
        </div>

        <div class="direita-txt">
            <h2>manicure</h2>
            <h1>Viviane Cristine de Souza</h1>
            <p>Viviane Cristine de Souza manicure e podologa, se especializou em 3 curso, trabalhou em 2 salões famosos na cidade.
                viviane e carismatica, dedicada tem uma coleção de clientes que amam ela, e nos da equipe tambem!
                Ligada nas redes sociais, aonde divulga seus trabalhos e busca inspirações para sempre trazer atualidade e o que 
                as clientes amam.</p>
        </div>
    </div>

    <div class="main">

        <div class="esquerda-img">
            <img src="imagens/manicure/giovanna.png" alt="">
        </div>
        
        <div class="direita-txt">
            <h2>manicure</h2>
            <h1>Giovanna Fernandes</h1>
            <p>Giovanna Fernandes uma manicure, se formou em 2 cursos da área,
                especialista em esmaltação e nas unhas em gel.
                Giovanna desde criança sempre gostou e brincou de manicure, ela e uma pessoa extrovertida, 
                engraçada e comunicativa, com certeza te tiraria varias risadas.
                Uma manicure formada e capaz de oferecer serviços de alta qualidade, 
                atendendo todas as expectativas.</p>
            
        </div>

        
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/manicure/gabriela.png" alt="Limpeza">
        </div>

        <div class="direita-txt">
            <h2>manicure</h2>
            <h1>Gabriella Cardoso Tanaka</h1>
            <p>Nossa mais recente manicure da equipe Gabriella Cardoso Tanaka, uma jovem que se formou em São Paulo e veio para São carlos
                afim de trabalhar.
                Carismatica, animada, que faz todos ao seu redor se encatarem por ela.
                Junto a Viviane elas movimentam as redes sociais, postando seus trabalhos e sempre interagindo com suas clientes.</p>
        </div>
    </div>




</body>
</html>


