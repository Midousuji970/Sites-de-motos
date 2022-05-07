const form = document.getElementById("requisi");
function verificar2(){
    var rMarca,rAno,rModelo,rPass;

    rMarca = document.requisi.txtmarca.value;
    rModelo = document.requisi.txtmodelo.value;
    rAno = document.requisi.txtano.value;
    rPass = document.requisi.txtpass.value;

    if(rMarca.length == 0){
        document.requisi.txtmarca.style.background='#ff6961';
        document.requisi.txtmarca.focus();
        return false;
    }
    if(rModelo.length == 0){
        document.requisi.txtmodelo.style.background='#ff6961';
        document.requisi.txtmodelo.focus();
        return false;
    }
    if( isNaN(rAno) || rAno.length == 0){
        document.requisi.txtano.style.background='#ff6961';
        document.requisi.txtano.focus();
        return false;
    }
    if( isNaN(rPass) || rPass.length == 0){
        document.requisi.txtpass.style.background='#ff6961';
        document.requisi.txtpass.focus();
        return false;
    }
    document.requisi.submit();
}