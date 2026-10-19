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
    <link rel="stylesheet" href="css/servicos.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://stachpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

 
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- /Google fonts -->
    <title>Serviço</title>
    <script>
        function redirectToLogin(link) {
            <?php if (!$logado): ?>
                window.location.href = 'login.php'; // Redireciona para a página de login
            <?php else: ?>
                window.location.href = link; // Redireciona para o link do botão
            <?php endif; ?>
        }
    </script>
</head>
<body>
    <header>
    <button id="scrollToTopBtn" onclick="scrollToTop()"><i class="bi bi-arrow-up-circle"></i></button>

    <script src="js/sub.js"></script>
     
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
 
 
<div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/axila.png" alt="Axila">
        </div>
 
        <div class="direita-txt">
            <h1>Axila</h1>
            <h2>esteticista</h2>
            <p>É um procedimento comum que visa remover os pelos dessa região, e pode ser realizada de diversas maneiras, utilizando cera quente ou fria.</p>
            <button class="btn" onclick="redirectToLogin('axila.php')">Agendar</button>
        </div>
    </div>
    
    
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/banho de lua.png" alt="Banho de lua">
        </div>
 
        <div class="direita-txt">
            <h1>Banho de lua</h1>
            <h2>esteticista</h2>
            <p>O banho de lua é uma técnica que combina a descoloração dos pelos com a esfoliação e hidratação da pele. É um método que não apenas clareia os pelos, mas também remove células mortas, deixando a pele mais macia e hidratada.</p>
            <button class="btn" onclick="redirectToLogin('bl.php')">Agendar</button>
        </div>
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/blindagem.jpg" alt="Banho de lua">
        </div>
 
        <div class="direita-txt">
            <h1>Blindagem de unha</h1>
            <h2>manicure</h2>
            <p>A blindagem de unhas é uma técnica que utiliza camadas de gel ou acrílico para proteger e fortalecer as unhas naturais, prevenindo quebras e descamações. Este procedimento, também conhecido como "banho de gel", oferece uma durabilidade do esmalte de 15 a 25 dias, tornando se ideal para quem busca praticidade e beleza sem necessidade de manutenção frequente.</p>
            <button class="btn" onclick="redirectToLogin('blindagem.php')">Agendar</button>
        </div>
    </div>
 
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/brow lamination.png" alt="brow lamination">
        </div>
 
        <div class="direita-txt">
            <h1>Brow lamination </h1>
            <h2>esteticista</h2>
            <p>O brow lamination é um método que visa alinhar e dar volume aos fios das sobrancelhas, criando um acabamento laminado.</p>
            <button class="btn" onclick="redirectToLogin('brow.php')">Agendar</button>
        </div>
    </div>
 
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/buco.png" alt="Buço">
        </div>
 
        <div class="direita-txt">
            <h1>Buço</h1>
            <h2>esteticista</h2>
            <p>É um procedimento estético que visa remover os pelos da região acima dos lábios, utilizando cera quente ou a técnica da linha.</p>
            <button class="btn" onclick="redirectToLogin('buco.php')">Agendar</button>
        </div>
    </div>
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/corte.png" alt="Corte">
        </div>
 
        <div class="direita-txt">
            <h1>Corte</h1>
            <h2>cabeleireiro</h2>
            <p>É um procedimento estético fundamental que visa modificar o comprimento, a forma e o estilo dos fios.</p>
            <button class="btn" onclick="redirectToLogin('corte.php')">Agendar</button>
        </div>
    </div>
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/depilacao meia perna.png" alt="Depilação meia perna">
        </div>
 
        <div class="direita-txt">
            <h1>Depilação Meia perna</h1>
            <h2>esteticista</h2>
            <p>É um procedimento estético que visa remover os pelos da parte inferior das pernas, geralmente até a altura do joelho, utilizando cera quente ou fria.</p>
            <button class="btn" onclick="redirectToLogin('dmp.php')">Agendar</button>
        </div>
    </div>
 
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/depilacao perna total.png" alt="Depilação perna total">
        </div>
       
        <div class="direita-txt">
            <h1>Depilação Perna total</h1>
            <h2>esteticista</h2>
            <p>É um procedimento estético que remove todos os pelos das pernas, desde a área do calcanhar até a dobra superior da coxa, utilizando cera quente ou fria. </p>
            <button class="btn" onclick="redirectToLogin('dpt.php')">Agendar</button>
        </div>
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/escova.png" alt="Cabelo escovado">
        </div>
       
        <div class="direita-txt">
            <h1>Escova</h1>
            <h2>cabeleireiro</h2>
            <p>É um procedimento estético que visa alisar os cabelos, reduzindo o volume e o frizz, ao mesmo tempo em que proporciona brilho e maciez. Este tratamento é bastante procurado por pessoas que desejam um efeito liso e passageiro em seus fios.</p>
            <button class="btn" onclick="redirectToLogin('escova.php')">Agendar</button>
        </div>
    </div>
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/esmaltação.png" alt="Esmaltação">
        </div>
 
        <div class="direita-txt">
            <h1>Esmaltação</h1>
            <h2>manicure</h2>
            <p>É o processo de aplicação de esmalte nas unhas, que pode ser feito de várias maneiras e com diferentes tipos de produtos. Este procedimento é popular por sua capacidade de embelezar as unhas, permitindo que as pessoas expressem sua personalidade e estilo.</p>
            <button class="btn" onclick="redirectToLogin('esmaltacao.php')">Agendar</button>
        </div>
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/fibra de vidro.png" alt="Unha de fibra de vidro">
        </div>
 
        <div class="direita-txt">
            <h1>Fibra de vidro</h1>
            <h2>manicure</h2>
            <p>A fibra de vidro é feita a partir da aglomeração de filamentos de vidro, que são altamente flexíveis e não rígidos. Quando combinada com resinas, como a resina poliéster ou epóxi, forma um composto conhecido como Polímero Reforçado com Fibra de Vidro (PRFV). Este material é amplamente utilizado em diversas indústrias devido às suas características excepcionais.</p>            
            <button class="btn" onclick="redirectToLogin('fv.php')">Agendar</button>
        </div>
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/hidratação.png" alt="Cabelo hidratado">
        </div>
 
        <div class="direita-txt">
            <h1>Hidratação</h1>
            <h2>cabeleireiro</h2>
            <p>É um procedimento essencial para manter a saúde e a beleza dos cabelos. Este tratamento visa repor a umidade e os nutrientes perdidos devido a fatores como exposição ao sol, uso de ferramentas térmicas e produtos químicos. Fortalece os fios, evita o ressecamento, reduz o frizz, aumento da maciez e o brilho capilar e também reduz a porosidade dos fios.</p>
            <button class="btn" onclick="redirectToLogin('hidratacao.php')">Agendar</button>
        </div>
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/limpeza de pele.png" alt="Limpeza de pele">
        </div>
 
        <div class="direita-txt">
            <h1>Limpeza de pele</h1>
            <h2>esteticista</h2>
            <p>Uma limpeza de pele profunda é um tratamento estético que vis remover impurezas, células mortas, cravos, espinhas e excesso de oleosidade da pele, especialmente do rosto. Esse procedimento ajuda a desobstruir os poros, deixando a pele mais limpa, clara e saudável.</p>
            <button class="btn" onclick="redirectToLogin('limpeza-pele.php')">Agendar</button>
        </div>
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/limpeza de unha.jpg" alt="Limpeza de pele">
        </div>
 
        <div class="direita-txt">
            <h1>Limpeza de unha</h1>
            <h2>esteticista</h2>
            <p>A limpeza das unhas é uma prática simples, mas essencial para garantir não apenas a beleza das mãos, mas também a saúde geral. Ao seguir essas etapas e cuidados, você pode manter suas unhas limpas e saudáveis, prevenindo problemas futuros e garantindo uma aparência sempre impecável.</p>
            <button class="btn" onclick="redirectToLogin('limpeza-unha.php')">Agendar</button>
        </div>
    </div>
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/maquiagem noiva.png" alt="Maquiagem para noiva">
        </div>
       
        <div class="direita-txt">
             <h1>Maquiagem para noiva</h1>
            <h2>maquiador</h2>
            <p>É um aspecto crucial para muitas mulheres no dia do casamento, pois busca realçar a beleza natural da noiva, garantindo que ela se sinta confiante e radiante.</p>
            <button class="btn" onclick="redirectToLogin('noiva.php')">Agendar</button>
        </div>
    </div>
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/maquiagem leve.png" alt="Maquiagem leve">
        </div>
 
        <div class="direita-txt">
            <h1>Maquiagens</h1>
            <h2>maquiador</h2>
            <p>É uma prática estética que envolve a aplicação de produtos cosméticos para realçar a beleza, corrigir imperfeições e expressar estilos pessoais. Ela pode variar desde um look natural até um visual mais dramático, dependendo da ocasião e da preferência individual.</p>
            <button class="btn" onclick="redirectToLogin('make.php')">Agendar</button>
        </div>
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/megahair.png" alt="Mega hair">
        </div>
 
        <div class="direita-txt">
            <h1>Mega Hair</h1>
            <h2>cabeleireiro</h2>
            <p>É uma técnica de alongamento capilar que permite aumentar o comprimento e o volume dos cabelos de forma rápida e eficaz. Essa prática é bastante popular entre pessoas que desejam mudar o visual sem esperar pelo crescimento natural dos fios.</p>
            <button class="btn" onclick="redirectToLogin('megah.php')">Agendar</button>
        </div>
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/micro.png" alt="Micro pigmentação">
        </div>
 
        <div class="direita-txt">
            <h1>Micro pigmentação</h1>
            <h2>esteticista</h2>
            <p>Um contorno é feito com pigmento ao redor da sobrancelha, que é esfumado para um efeito suave e sombreado. Indicado para quem tem poucas falhas; resulta em sobrancelhas sempre bem definidas.</p>
            <button class="btn" onclick="redirectToLogin('microp.php')">Agendar</button>
        </div>
    </div>
 
    
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/penteado.png" alt="Penteado">
        </div>
 
        <div class="direita-txt">
            <h1>Penteados</h1>
            <h2>cabeleireiro</h2>
            <p>Referem-se ao estilo ou arranjo dado aos cabelos por meio de diferentes técnicas e ferramentas, como pentes e escovas modeladoras. Eles podem variar amplamente em complexidade e estilo, desde opções simples para o dia a dia até penteados elaborados para ocasiões especiais.</p>
            <button class="btn" onclick="redirectToLogin('penteados.php')">Agendar</button>
        </div>
    </div>
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/plastica.png" alt="Plástica dos fios">
        </div>
       
        <div class="direita-txt">
            <h1>Plástica dos fios</h1>
            <h2>cabeleireiro</h2>
            <p>Também conhecida como plástica capilar, é um tratamento estético que visa restaurar a saúde e a aparência dos cabelos danificados. Este procedimento é especialmente indicado para cabelos que passaram por processos químicos, como coloração, alisamento ou descoloração, e que estão ressecados, quebradiços ou sem vida.</p>
            <button class="btn" onclick="redirectToLogin('pf.php')">Agendar</button>
        </div>
    </div>
 
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/progressiva.png" alt="Progressiva">
        </div>
 
        <div class="direita-txt">
            <h1>Progressiva</h1>
            <h2>cabeleireiro</h2>
            <p>É um tratamento químico que visa alisar os cabelos, reduzindo o volume e o frizz, além de proporcionar brilho e maciez. Este procedimento tem se tornado cada vez mais popular, especialmente entre pessoas com cabelos ondulados ou cacheados que buscam um efeito liso e duradouro.</p>
            <button class="btn" onclick="redirectToLogin('progressiva.php')">Agendar</button>
        </div>
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/selante.png" alt="Selante">
        </div>
 
        <div class="direita-txt">
            <h1>Selante</h1>
            <h2>cabeleireiro</h2>
            <p>O selante capilar utiliza produtos à base de queratina e outros ingredientes nutritivos para fechar as cutículas dos fios, resultando em cabelos mais alinhados e saudáveis. Embora o selante não tenha como objetivo alisar os fios permanentemente, ele pode proporcionar um efeito liso temporário ao reduzir o volume.</p>
            <button class="btn" onclick="redirectToLogin('selante.php')">Agendar</button>
        </div>
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/sobrancelha.png" alt="Sobrancelha feminina e masculina">
        </div>
 
        <div class="direita-txt">
            <h1>Sobrancelha feminina e masculina</h1>
            <h2>esteticista</h2>
            <p>Envolve várias técnicas que visam modelar, corrigir e embelezar as sobrancelhas, proporcionando um olhar mais expressivo e harmonioso.</p>
            <button class="btn" onclick="redirectToLogin('sobrancelha.php')">Agendar</button>
        </div>
    </div>
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/tintura.png" alt="Tintura">
        </div>
 
        <div class="direita-txt">
            <h1>Tintura</h1>
            <h2>cabeleireiro</h2>
            <p>É um procedimento estético que visa mudar a cor dos cabelos, podendo ser utilizado tanto para cobrir fios brancos quanto para alterar a tonalidade natural.</p>
            <button class="btn" onclick="redirectToLogin('tintura.php')">Agendar</button>
        </div>
    </div>


    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/unha em gel.png" alt="Unha em gel">
        </div>
       
        <div class="direita-txt">
            <h1>Unha em gel</h1>
            <h2>manicure</h2>
            <p>As unhas em gel são feitas a partir de um gel que é aplicado sobre as unhas naturais ou extensões. O processo envolve a aplicação do gel em camadas, que são curadas sob uma luz UV ou LED, resultando em uma superfície dura e brilhante.</p>
            <button class="btn" onclick="redirectToLogin('gel.php')">Agendar</button>
        </div>
    </div>

    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/depilação virilha.png" alt="Depilação virilha">
        </div>
       
        <div class="direita-txt">
            <h1>Virilha</h1>
            <h2>esteticista</h2>
            <p>É um procedimento estético que remove os pelos da região íntima, apenas na parte frontal; A cera quente é aplicada na pele e removida rapidamente, retirando os pelos pela raiz. Resultados duradouros (cerca de 20 a 25 dias) e menos risco de pelos encravados.</p>
            <button class="btn" onclick="redirectToLogin('virilha.php')">Agendar</button>
        </div>
 
    </div>
 
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/biquini.png" alt="Depilação virilha biquíni">
        </div>
 
        <div class="direita-txt">
            <h1>Virilha biquíni</h1>
            <h2>esteticista</h2>
            <p>Remove apenas os pelos ao redor da virilha, sem se aprofundar, e da parte traseira</p>
            <button class="btn" onclick="redirectToLogin('biquini.php')">Agendar</button>
        </div>
    </div>
 
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/depilação virilha.png" alt="Depilação virilha completa">
        </div>
 
        <div class="direita-txt">
            <h1>Virilha completa</h1>
            <h2>esteticista</h2>
            <p>Remove todos os pelos da região íntima, tanto na parte frontal quanto na traseira.</p>
            <button class="btn" onclick="redirectToLogin('vc.php')">Agendar</button>
        </div>
    </div>
 
 
    <div class="main">
        <div class="esquerda-img">
            <img src="imagens/servicos/estilizada.png" alt="Depilação virilha estilizada">
        </div>
 
        <div class="direita-txt">
            <h1>Virilha estilizada</h1>
            <h2>esteticista</h2>
            <p>Permite a remoção dos pelos com um formato específico escolhido pela cliente, mantendo alguns pelos na região.</p>
            <button class="btn" onclick="redirectToLogin('vest.php')">Agendar</button>
        </div>
    </div>
</div>
 
</body>
</html>