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
    <title>Equipe - Esteticista</title>
</head>
<body>

    <header>
    
    <div class="container">
        <button class="voltar" id="backButton"><i class="bi bi-arrow-return-left"></i></button>
    </div>
    <script src="js/scrit.js"></script>

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

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/esteticista/daniela.png" alt="Limpeza">
        </div>

        <div class="direita-txt">
            <h2>esteticista</h2>
            <h1>Daniela Lima Satiro</h1>
            <p>Daniela Lima Satiro, temos orgulho em dizer que faz parte da nossa aquipe aqui do salão Esencia Bella.
                formada e em busca de sua pos graduação, o que a torna uma profissional por completo, ela e animada e um amor de pessoa
                o que cativa as clientes e sempre trazendo sempre novas clientes!</p>
    
        </div>
    </div>

    <div class="main">

        <div class="esquerda-img">
            <img src="imagens/esteticista/sophia.png" alt="">
        </div>

        <div class="direita-txt">
            <h2>esteticista</h2>
            <h1>Sophia Cristina da Silva Alves</h1>
            <p>Especialista na area Sophia Cristina da Silva Alves, e uma das melhores esteticista da cidade.
                fez faculdade em Campinas e veio para a cidade aonde seus pais nasceram para trabalhar. 
                Dedicação, simpatia, carisma, essas palavras são a definação da nossa profissional Sophia.</p>
           
        </div>

        
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/esteticista/nicolas.png" alt="Limpeza">
        </div>

        <div class="direita-txt">
            <h2>esteticista</h2>
            <h1>Nicolas Paschoal Almeida</h1>
            <p>Nicolas Paschoal Almeida o queridinho do nosso salão, o nosso profissional mais antigo da equipe. Nicolas 
                com seu carisma e seu humor sempre cuidados e amoroso com nossos clientes.
                se formou em 3 cursos da area e sempre foi apaixonado pela área.</p>
          
        </div>
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/esteticista/Rafa.png" alt="Limpeza">
        </div>

        <div class="direita-txt">
            <h2>esteticista</h2>
            <h1>Rafaela Campos</h1>
            <p>Rafaela Campos, abandonou a faculdade de Literatura, para ir atrás de seu sonho.
                De lá para cá, a esteticista se formou em 2 faculdades de estética diferente.
                sempre ligada nas redes sociais, onde busca inspirações e novidades a suas clientes.
                Para Rafa, um bom ambiente e otimos profissionais são o essencial para um espaço de qualidade a seus clientes!</p>
          
        </div>
    </div>




</body>
</html>


