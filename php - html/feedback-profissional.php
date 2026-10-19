<?php

session_start(); // Inicia a sessão

// Verifica se o email está definido na sessão
$logado = isset($_SESSION['email']) ? $_SESSION['email'] : null;

include_once('config.php');

$senhaSecreta = "esenciabella";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senhadigitada = $_POST['senha'];

    if ($senhadigitada === $senhaSecreta) {
        // Consulta para selecionar todos os feedbacks
        $sql = "SELECT * FROM Feedback";
        $resultFeedProf = $conexao->query($sql);
    } else {
        echo "<h1>Senha Incorreta!</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/feedback-erro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <title>Feedback - Profissional</title>
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
                <br>
                <label for="mensagem">Senha:</label>
                <br>
                <input type="password" id="mensagem" name="senha" placeholder="Digite a senha" required>
                <br>
                <input type="submit" value="Enviar"> 
            </form>

            <?php if(isset($resultFeedProf) && $resultFeedProf->num_rows >0) : ?>
                <h2>Mensagens</h2>
                <ul>
                    <?php while($row = $resultFeedProf->feetch_assoc()) : ?>
                    <li>
                        <strong>Nome: </strong> <?php echo $row["ID_PROFISSIONAL"];?>
                    </li>
                </ul>
            
        </div>
    </div>
</body>
</html>