<%@page language="java" import="java.sql.*" %>
        <% 
            // Variaveis 
            String lnome = request.getParameter("lnome");
            String lsenha = request.getParameter("lsenha");

            String banco    = "login_page";
            String endereco = "jdbc:mysql://localhost:3306/" + banco ;
            String usuario  = "root";
            String senha    = "" ;
        
            String driver   = "com.mysql.jdbc.Driver" ;
        
            //Carregar o driver na memória
            Class.forName( driver ) ;
        
            //criar a variavel para conectar com o banco de dados
        
            //abrir a conexao com o banco
            
            Connection conexao = DriverManager.getConnection(endereco,usuario,senha) ;

            String sql = "select * from users";
            PreparedStatement stm = conexao.prepareStatement(sql);
            
            ResultSet dados = stm.executeQuery();

            public int getresult( )
            dados.getString("login");
            dados.getString("password");
        

            %>