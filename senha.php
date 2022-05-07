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
    <form method="POST">
                <label><b>E-mail:</b></label>
                <input type="email" maxlength="50" name="email" size="50" required>
                <br>
                <button type='submit' class="btn1">Recuperar Senha</button> 
                <input type="hidden" name="env" value="form">
            </form>
            <?php echo verifica_dados($conexao);
            
            $usuario = "root";
            $senha = "";
            $database = "login_page";
            $host = "localhost";

            $con = new mysqli($host, $usuario, $senha, $database);

            if(!$con){      
                print "falha na conexao com o banco de dados";
            }

            
            function verifica_dados($con){
                if(isset($_POST['env']) && $_POST['env'] == 'form'){
                    $email = addslashes($_POST['email']);
                    $sql = $con->prepare("SELECT * FROM usuario WHERE email = ?");
                    $sql->bind_param("s", $email);
                    $sql->execute();
                    $get = $sql->get_result();
                    $total = $get->num_rows;
                    if($total > 0){
                        $dados = $get->fetch_assoc();
                        enviar_email($con, $dados['senha1']);
                    }else{
                        echo ("<h1>E-mail não registrado!</h1>");
                    }
                }
                
                }
                function enviar_email($con, $email){
                    echo ("<h1>Sua senha: <br>$email</h1>");
            
            }
              
            ?>

    </main>
    </body>
</html>