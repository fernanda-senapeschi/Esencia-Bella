<?php 

if (isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $data_nasc = $_POST['data_nasc'];
    $senha = $_POST['confirmar_senha'];

    // Remover caracteres não numéricos (se houver)
    $celular = preg_replace('/\D/', '', $celular); // Remove tudo que não for número

    // Obter DDD e número de celular
    $ddd_celular = substr($celular, 0, 2);
    $num_celular = substr($celular, 2);

    // Inserir dados na tabela Cliente
    $result = mysqli_query($conexao, "INSERT INTO Cliente(EMAIL, DATA_NASC, NOME, CELULAR, DDD_CELULAR) 
    VALUES ('$email', '$data_nasc', '$nome', '$num_celular', '$ddd_celular')");

    // Verificar se a inserção foi bem-sucedida
    if ($result) {
        // Obter o ID do cliente recém-inserido
        $id_cliente = mysqli_insert_id($conexao);

        // Hash da senha
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        // Inserir dados na tabela Login
        $result_login = mysqli_query($conexao, "INSERT INTO Login(EMAIL, SENHA, FUNCAO, ID_CLIENTE) 
        VALUES ('$email','$senha_hash',0,$id_cliente)");

        // Verificar se a inserção na tabela Login foi bem-sucedida
        if ($result_login) {
            // Redireciona para outra página
            header("Location: login.php");
            exit(); // É uma boa prática usar exit após o redirecionamento
        } else {
            echo "Erro ao registrar no Login: " . mysqli_error($conexao);
        }
    } else {
        echo "Erro ao registrar no Cliente: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/cadastro.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- /Google fonts -->

    <title>Cadastro</title>
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


<div class="cadastro">
        
    <form action="cadastro.php" method="POST">
        <div class="formulario">

            <div class="card-login">
                <h1>Cadastro</h1>

                <div class="textfi">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" placeholder="Nome" required>
                </div>
            
                <div class="textfi">
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
            
                <div class="textfi">
                    <label for="celular">Celular:</label>
                    <input type="tel" name="celular" placeholder="(xx)(xxxxx-xxxx)" required>
                </div>
            
                <div class="textfi">
                    <label for="data">Data de aniversário:</label>
                    <input type="date" name="data_nasc" placeholder="Data de aniversário" required>
                </div>
            
                <div class="textfi">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>
            
                <div class="textfi">
                    <label for="senha">Confirmar senha:</label>
                    <input type="password" name="confirmar_senha" placeholder="Senha" required>
                </div>

                <input type="submit" name="submit" id="submit">
            </div>
        </div>
    </form>
    
</div>

</body>
</html>