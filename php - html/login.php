<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="home">
            <section class="logo">
                <a href="index.php"> <img src="imagens/Esencia Bella Logo.png" alt="Logotipo do site"></a>   
            </section>
            <section class="menu">
                <nav>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li class="semq"><a href="sobrenos.php">SOBRE NÓS</a></li>
                        <li><a href="equipe.php">EQUIPE</a></li>
                        <li><a href="testagem.php">SERVIÇOS</a></li>
                        <li class="color"><a href="login.php">LOGIN</a ></li>
                    </ul>
                </nav>
            </section>
        </div>
        <hr>
    </header>

    <div class="main-login">
        <div class="card-login">
            <h1>Login</h1>
            <form action="dados-login.php " method="POST">
                <div class="textfi">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" required><br>
                </div>
                <div class="textfi">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha" required><br>
                </div>
                <p>Não tem uma conta?<br><a href="cadastro.php">Cadastre-se</a></p>
                <input type="submit" name="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>
</html>