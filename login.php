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
        <link rel="stylesheet" type="text/css" href="css/main.css?=v5">
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
        <main class="login_um">
            <form method="POST" action="tlogin.php">
                <label><b>E-mail:</b></label>
                <input type="text" maxlength="50" name="lnome" size="50">
                <br>
                <label><b>Senha:</b></label>
                <input type="password" minlength="8" name="lsenha" size="50">
                <br>
                <a href="senha.php" class="links">Lembrar Senha</a>
                <button type='submit' class="btn1">Login</button> 
            </form>
            <a href="cadastro.html" class="links">Cadastre-se</a>

        </main>
    </body>
</html>