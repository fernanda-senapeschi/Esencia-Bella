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
    <link rel="stylesheet" href="css/equipe.css">
    <link rel="stylesheet" href="css/header.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- /Google fonts -->
    <title>Equipe</title>
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


   

        <section class="hero-site">
            <div class="equipe">
            <div class="txt-hero">
                <h3>NOSSA EQUIPE</h3>    
                <p>Bem-vindos ao nosso salão, onde a magia acontece! Aqui, reunimos uma equipe de profissionais altamente qualificados, dedicados a transformar a aparência e a autoestima de cada cliente que nos visita.</p>  
                <hr>
            </div>
            </div>
        </section>
    </header>





<div class="fotos">

  <div class="polaroid">
    <img src="imagens/equipe/cabeleireiro.png" alt="imagem temática de cabeleireiro">
    <div class="caption">Cabeleireiro</div>
    <button class="btn"><a href="cabeleireiro.php">Ver aqui</a></button>

  </div>

  <div class="polaroid">
    <img src="imagens/equipe/esteticista.png" alt="imagem temática de esteticista">
    <div class="caption">Esteticista</div>
    <button class="btn"><a href="esteticista.php">Ver aqui</a></button>
  </div>

  <div class="polaroid">
    <img src="imagens/equipe/manicure.png" alt="imagem temática de manicure">
    <div class="caption">Manicure</div>
    <button class="btn"><a href="manicure.php">Ver aqui</a></button>
  </div>

  <div class="polaroid">
    <img src="imagens/equipe/maquiador.png" alt="imagem temática de cabeleireiro">
    <div class="caption">Maquiador</div>
    <button class="btn"><a href="maquiador.php">Ver aqui</a></button>
  </div>
</div>

<br><br><br>

</body>
</html>