<?php
include_once('conexao.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Auto Balance
        </title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="js/login.js" defer></script>
    </head>
    <body>
        <header>
            <a href="index.html"><h1 class="h1-nav">Auto Balance</h1></a>
            <nav>
                <ul class="nav_links">
                    <li><a href='index.html'>Home</a></li>
                    <li><a href="quem-somos.html">Quem Somos</a></li>
                    <li><a href="requisicao.html">Requisição</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </header>
        <main class="falhaLogin">
            <h1>Falha ao fazer login!</h1>
            <a href="login.php"><h1>>Clique aqui<</h1></a><h1>Para tentar novamente!</h1>
        </main>
    </body>
</html>