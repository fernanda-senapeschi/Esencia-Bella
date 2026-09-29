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
    <title>Equipe - Maquiagem</title>
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
            <img src="imagens/maquiador/fabiana.png" alt="Limpeza">
        </div>

        <div class="direita-txt">
            <h2>maquiadora</h2>
            <h1>Fabiana Cristina dos Santos</h1>
            <p>Fabiana Cristina dos Santos acaba de chegar à equipe do salão Esencia Bella, é maquiadora formada e já imprime seu estilo leve e natural nas produções de make do salão. 
                Destaque para os delineados coloridos e aquela pele glow de tirar o fôlego! 
            <br>Fabi vai do fashion às noivas com muito talento, pontualidade e uma trabalho impecável.</p>
       
        </div>
    </div>

    <div class="main">

        <div class="esquerda-img">
            <img src="imagens/maquiador/julia.png" alt="">
        </div>
        
        <div class="direita-txt">
            <h2>maquiadora</h2>
            <h1>Júlia Goulart de Souza</h1>
            <p>Trabalhando com o Celso Kamura desde 2011, Júlia Goulart de Souza onde atuou como assistente nos salões de Campinas e São Carlos e se destacou como um talento na maquiagem. 
                Há 2 anos, Julia não só se especializou na área maquiagem e design de sobrancelhas, como conquistou uma legião de clientes e fãs do seu trabalho.</p>
        
        </div>

       
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/maquiador/kaleb.png" alt="Limpeza">
        </div>

        <div class="direita-txt">
            <h2>maquiador</h2>
            <h1>Kaleb Rocha</h1>
            <p>Natural de Ibate, Kaleb Rocha descobriu seu talento em teatros, quando maquiava as bailarinas do grupo de dança do qual fazia parte. 
                Doce e simpático, o expert tem um olhar apurado e encanta as clientes com seu riso fácil e design preciso. 
                Pedro começou a escrever sua história como assistente e logo chamou atenção de um grande publico, que o nomeou maquiador da casa fazendo sucesso entre clientes e celebridades.</p>
          
        </div>
    </div>




</body>
</html>


