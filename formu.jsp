<%@page language="java" import="java.sql.*"%>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Auto Balance
        </title>
        <link rel="stylesheet" type="text/css" href="\sites\css\main.css">
    </head>
    <body>
        <header class="cabeçario">
            <div class="logo"></div>
                <ul>
                    <li><a href='index.html'>Home</a></li>
                    <li><a href="quem-somos.html">Quem Somos?</a></li>
                    <li><a href="parceiros.html">Parceiros</a></li>
                    <li><a href="login.html">Login/Cadastro</a></li>
                </ul>
        </header>
    

<%
    // Cria as variaveis e armazena as informações digitadas pelo usuário
    String vnome  = request.getParameter("txtnome");
    String vlogin = request.getParameter("txtlogin");
    String vsenhaum = request.getParameter("txtsenha");
    String vsenhadois = request.getParameter("txtsenha2");
    String vemail = request.getParameter("txtemail");
    String vcidade = request.getParameter("txtcidade");

    //variaveis para acessar o banco de dados
    String banco    = "cadastro";
    String endereco = "jdbc:mysql://localhost:3306/" + banco;
    String usuario  = "root";
    String senha    = "" ;

    String driver   = "com.mysql.jdbc.Driver" ;

    //Carregar o driver na memória
    Class.forName( driver ) ;

    //abrir a conexao com o banco
    Connection conexao = DriverManager.getConnection(endereco,usuario,senha) ;

    String sql = "insert into alunos (nome,login,senha1,senha2,email,cidade)values(?,?,?,?,?,?)" ;

    PreparedStatement stm = conexao.prepareStatement(sql);
    stm.setString(1,vnome) ;
    stm.setString(2,vlogin) ;
    stm.setString(3,vsenhaum) ;
    stm.setString(4,vsenhadois) ;
    stm.setString(5,vemail) ;
    stm.setString(6,vcidade) ;

    stm.executeUpdate();

%>
    </body>
</html>

