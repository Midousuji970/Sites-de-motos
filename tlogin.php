<?php
include_once('conexao.php');

$login = $_POST['lnome'];
$senha = $_POST['lsenha'];
$query = "";
$query = "SELECT * FROM usuario WHERE email ='{$login}' && senha1 = '{$senha}'";
mysqli_query($conexao, $query);
$rows = mysqli_affected_rows($conexao);
if($rows > 0){
    header("Location: painel.php");
} else {
    header("Location: loginError.php");
}


?>