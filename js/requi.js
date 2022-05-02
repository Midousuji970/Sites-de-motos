const form = document.getElementById("requisicao");
function verificar(){
    var rMarca,rAuto,rAno,rModelo,rPass;

    rMarca = document.requisicao.txtmarca.value;
    rAuto = document.requisicao.txtauto.value;
    rModelo = document.requisicao.txtmodelo.value;
    rAno = document.requisicao.txtano.value;
    rPass = document.requisicao.txtpass.value;

    if(rMarca.length  == 0){
        document.requisicao.txtmarca.style.background='#ff6961';
        document.requisicao.txtmarca.focus();
        return false;
    }
    if(rAuto.length  == 0){
        document.requisicao.txtauto.style.background='#ff6961';
        document.requisicao.txtauto.focus();
        return false;
    }
    if(rModelo.length  == 0){
        document.requisicao.txtmodelo.style.background='#ff6961';
        document.requisicao.txtmodelo.focus();
        return false;
    }
    if( isNaN(rAno) || rAno.length  == 0){
        document.requisicao.txtano.style.background='#ff6961';
        document.requisicao.txtano.focus();
        return false;
    }
    if( isNaN(rPass) ||rPass.length  == 0){
        document.requisicao.txtpass.style.background='#ff6961';
        document.requisicao.txtpass.focus();
        return false;
    }
    document.requisicao.submit();

}