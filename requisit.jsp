<%@page language="java" import="java.sql.*"%>
<%
    // Cria as variaveis e armazena as informações digitadas pelo usuário
    String vmarca  = request.getParameter("txtmarca");
    String vauto = request.getParameter("txtauto");
    String vmodelo = request.getParameter("txtmodelo");
    int vano = Integer.parseInt( request.getParameter("txtano") ) ;
    int vpass = Integer.parseInt( request.getParameter("txtpass") ) ;
    //variaveis para acessar o banco de dados
    String banco    = "requisicao";
    String endereco = "jdbc:mysql://localhost:3306/" + banco;
    String usuario  = "root";
    String senha    = "" ;

    String driver   = "com.mysql.jdbc.Driver" ;

    //Carregar o driver na memória
    Class.forName( driver ) ;

    //abrir a conexao com o banco
    Connection conexao = DriverManager.getConnection(endereco,usuario,senha) ;

    String sql = "insert into autos (marca,auto,modelo,ano,passa)values(?,?,?,?,?)" ;

    PreparedStatement stm = conexao.prepareStatement(sql);
    stm.setString(1,vmarca) ;
    stm.setString(2,vauto) ;
    stm.setString(3,vmodelo) ;
    stm.setInt(4,vano) ;
    stm.setInt(5,vpass) ;

    stm.executeUpdate();
    
    String redirectURL = "re-obrigado.html";
    response.sendRedirect(redirectURL);

%>