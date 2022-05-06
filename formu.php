<?php
include_once('conexao.php');

$nome = $_POST['txtnome'];
$user = $_POST['txtlogin'];
$pass1 = $_POST['txtsenha'];
$pass2 = $_POST['txtsenha2'];
$email = $_POST['txtemail'];
$cidade = $_POST['txtcidade'];

$query = "SELECT * FROM usuario WHERE login = '".$user."' && email = '".$email."'";
mysqli_query($conexao, $query);
$rows = mysqli_affected_rows($conexao);
if($rows > 0){
    header("Location: cadastro2.html");
}else{



$query = "INSERT INTO usuario (username, login, senha, senha2, email, cidade) VALUES ('".$nome."','".$user."','".$pass1."','".$pass2."','".$email."','".$cidade."') ";
mysqli_query($conexao, $query);
$rows = mysqli_affected_rows($conexao);

if($rows > 0){
    echo("Sucesso ao se cadastra");
}else{
    echo("Houve algum erro interno");
}

}
?>

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
    </body>
</html>