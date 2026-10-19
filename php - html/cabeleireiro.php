<?php
session_start(); // Inicia a sessão

// Verifica se o email está definido na sessão
$logado = isset($_SESSION['email']) ? $_SESSION['email'] : null;

// Incluindo o arquivo de configuração
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- /Google fonts -->
    <title>Equipe - Cabeleireiro</title>
</head>
<body>
    <header>

    
    
        <div class="home">
            <section class="logo">
                <a href="index.php"><img src="imagens/Esencia Bella Logo.png" alt="Logotipo do site"></a>   
            </section>

            <section class="menu">
                <div class="fixo">
                    <nav>
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li class="semq"><a href="sobrenos.php">sobre nós</a></li>
                            <li class="color"><a href="equipe.php">equipe</a></li>
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
            <img src="imagens/cabeleireiro/dayene.png" alt="Limpeza">
        </div>

        <div class="direita-txt">
            <h2>cabeleireira</h2>
            <h1>Dayene Candido Gomes</h1>
            <p>Dayene Candido Gomes, abandonou a faculdade de Matemática, para auxiliar a mãe, cabeleireira e proprietária de um salão de beleza. 
                De lá para cá, a hairstylist se encantou pela profissão e nunca mais parou. 
                Apaixonada por loiros, a expert domina as técnicas de clareamento e de saudabilidade do fios, e está sempre antenada nas redes sociais, onde busca inspirações para as suas criações. 
                Para Dayene, compreender o desejo da cliente e traduzi-lo de forma precisa é uma maneira de empreender felicidade.</p> <br>
                      
        </div>
    </div>

    <div class="main">

        <div class="esquerda-img">
            <img src="imagens/cabeleireiro/matheus.png" alt="">
        </div>

        <div class="direita-txt">
            <h2>cabeleireiro</h2>
            <h1>Matheus Antonelli da Silva</h1>
            <p>Matheus Santos de Oliveira, Artista Wella, apaixonado por beleza, se aperfeiçoou nas técnicas de make pela 
                Escola Madre, em São Paulo, e trabalhou ao lado do Beauty Artist Max Weber por 3 anos, trabalhou tambem em desfiles de SPFW.
                Com destaque para seus cortes precisos e modernos, seu styling contemporâneo  e uma coloração criativa que se destaca na nova geração de haistylist.
                Matheus também assina a beleza de influencers, atrizes e cantoras como a Vanessa da Mata, Duda Beat, 
                Marina Sena, Cynthia Luz, Patricia Poeta, Jesuita Barbosa.</p> <br>
            
        </div>

        
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/cabeleireiro/silvia.png" alt="Limpeza">
        </div>

        <div class="direita-txt">
            <h2>cabeleireira</h2>
            <h1>Silvia Santana</h1>
            <p>Silvia Santana martins é uma profissional que nos enchemos de orgulho ao dizer que se formou na escola CKamura. 
                Profissional dedicada, atenciosa e discreta, conquista cada vez mais clientes com sua coloração precisa e seus 
                cortes geométricos. Um destaque entre nossos profissionais quando o assunto é escova, seja ela lisa, 
                com volume ou modelada.</p> <br>
            
        </div>
    </div>




</body>
</html>



