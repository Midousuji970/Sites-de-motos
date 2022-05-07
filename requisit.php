<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            Auto Balance
        </title>
        <link rel="stylesheet" type="text/css" href="css/main.css?=v5">
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
        <main class='textcenter'>
<?php
include_once('conexao.php');
$marca = $_GET['txtmarca'];
$automovel = $_GET['txtauto'];
$modelo = $_GET['txtmodelo'];
$ano = $_GET['txtano'];
$passa = $_GET['txtpass'];
$query = '';
$sql_cadastro=mysqli_query($conexao ," INSERT INTO auto (marca, automovel, modelo, ano, passa) VALUES ('$marca','$automovel','$modelo','$ano','$passa')" );
$rows = mysqli_affected_rows($conexao);

if($rows > 0){
    echo '<script>alert("Requisição Concluida!")</script>';
   
}else{
    echo("Houve algum erro interno");
}
?>
<a href="index.html" class="textcenter"><h1>>Obrigado por nos ajudar!<<br>>Veja nosso catalago de automoveis!<</h1></a>
</main>
    </body>
</html>