<%@page language="java" import="java.sql.*"%>
<%
    // Cria as variaveis e armazena as informações digitadas pelo usuário
    String vnome  = request.getParameter("txtnome");
    String vlogin = request.getParameter("txtlogin");
    String vsenhaum = request.getParameter("txtsenha");
    String vsenhadois = request.getParameter("txtsenha2");
    String vemail = request.getParameter("txtemail");
    String vcidade = request.getParameter("txtcidade");

    //variaveis para acessar o banco de dados
    String banco    = "login_page";
    String endereco = "jdbc:mysql://localhost:3306/" + banco;
    String usuario  = "root";
    String senha    = "" ;

    String driver   = "com.mysql.jdbc.Driver" ;

    //Carregar o driver na memória
    Class.forName( driver ) ;

    //abrir a conexao com o banco
    Connection conexao = DriverManager.getConnection(endereco,usuario,senha) ;

    String sql = "insert into users (username,login,password,password2,email,cidade)values(?,?,?,?,?,?)" ;

    PreparedStatement stm = conexao.prepareStatement(sql);
    stm.setString(1,vnome) ;
    stm.setString(2,vlogin) ;
    stm.setString(3,vsenhaum) ;
    stm.setString(4,vsenhadois) ;
    stm.setString(5,vemail) ;
    stm.setString(6,vcidade) ;

    stm.executeUpdate();
    
    String redirectURL = "login.html";
    response.sendRedirect(redirectURL);

%>

