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
    <link rel="stylesheet" href="css/sob.css">


    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- /Google fonts -->

    <title>Sobre nós</title>
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
                            <li class="color"><a href="sobrenos.php">sobre nós</a></li>
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

    <div class="sobrenos">
        <div>
            <p class="sobre">Email</p>
            <p>esenciabella.contato@gmail.com</p>
        </div>
        
        <div>
            <p class="sobre">Instagram</p>
            <p> <a href="https://www.instagram.com/ese.nciabella/"> @ese.nciabella</a></p>
        </div>
    
        <div>
            <p class="sobre">Endereço</p>
            <p> Rua Padre Teixeira <br>
                N° 1501 <br>
                Jardin Bethania
            </p>
        </div>
    
        <div>
            <p class="sobre">Telefone</p>
            <p> (16) 3416-9972</p>
        </div>
        <footer>
            <p>Empresa responsável pela criação</p>
            <a href="high5tech.free.nf" target="_blank"><img src="imagens/empresa.png" alt=""></a>
        </footer>
    </div>
</body>
</html>