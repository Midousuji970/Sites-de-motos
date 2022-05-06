<?php

$usuario = "root";
$senha = "";
$database = "login_page";
$host = "localhost";

$conexao = mysqli_connect($host, $usuario, $senha, $database);

if(!$conexao){
    print "falha na conexao com o banco de dados";
}

?>