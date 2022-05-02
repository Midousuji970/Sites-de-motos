
const form = document.getElementById('formuCadastro');
function verificar(){
    var cNome,cLogin,cSenhaA,cSenhaB,cEmail,cCidade;
    cNome = document.formuCadastro.txtnome.value;
    cLogin = document.formuCadastro.txtlogin.value;
    cSenhaA = document.formuCadastro.txtsenha.value;
    cSenhaB = document.formuCadastro.txtsenha2.value;
    cEmail = document.formuCadastro.txtemail.value;
    cCidade = document.formuCadastro.txtcidade.value;

    if(cNome.length == 0){
        alert("Campo não preenchido - Nome!")   
        document.formuCadastro.txtnome.style.background='#ff6961';
        document.formuCadastro.txtnome.focus();
        return false;
    }

    if(cLogin.length == 0){
        alert("Campo não preenchido - Login!")   
        document.formuCadastro.txtlogin.style.background='#ff6961';
        document.formuCadastro.txtlogin.focus();
        return false;
    }
    if(cLogin == cNome){
        alert("Campo incorreto - Login!")
        document.formuCadastro.txtlogin.style.background='#ff6961';
        document.formuCadastro.txtlogin.focus();
        return false;
    }

    if(cSenhaA.length == 0){
        alert("Campo não preenchido - Senha!")
        document.formuCadastro.txtsenha.style.background='#ff6961';
        document.formuCadastro.txtsenha.focus();
        return false;
    }

    if(cSenhaB.length == 0){
        alert("Campo não preenchido - Confirmar Senha!")
        document.formuCadastro.txtsenha2.style.background='#ff6961';
        document.formuCadastro.txtsenha2.focus();
        return false;
    }

    if( cSenhaA !== cSenhaB){
        alert("Campos incorretos - Senhas!")
        document.formuCadastro.txtsenha.style.background='#ff6961';
        document.formuCadastro.txtsenha2.style.background='#ff6961';
        document.formuCadastro.txtsenha.focus();
        return false;
    }

    if( cEmail.indexOf('@') < 0 || cEmail.length == 0 ){
        alert("Campo não preenchido - E-mail!") 
        document.formuCadastro.txtemail.style.background='#ff6961';
        document.formuCadastro.txtemail.focus();
        return false;
    }
    if( cCidade.length == 0){
        alert("Campo não preencido - Cidade!")
        document.formuCadastro.txtcidade.style.background='#ff6961';
        document.formuCadastro.txtcidade.focus();
        return false;
    }

    document.formuCadastro.submit();
}