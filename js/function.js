

function lyn(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " 0123456789qwertyuiopasdfghjklñzxcvbnmQWERTYUIOPÁSDFGHJKLÑZXCVBNM";
    especiales = [8,37,39,46];
 
    tecla_especial = false
    for(var i in especiales){
 if(key == especiales[i]){
     tecla_especial = true;
     break;
        } 
    }
 
    if(letras.indexOf(tecla)==-1 && !tecla_especial)
        return false;
}


    function image(){

        var logo =document.getElementById('logo');
        var archivoTipo = logo.value;
        var archivojpg =/(.jpg|.png|.JPG|.PNG)$/i;

        if(!archivojpg.exec(archivoTipo)){
            alert('Tipo de archivo no Permitido');
            logo.value='';
            return false;
        }
        else{

            return true;

        }
    
    }


function sn(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " 0123456789";
    especiales = [8,37,39,46];
 
    tecla_especial = false
    for(var i in especiales){
 if(key == especiales[i]){
     tecla_especial = true;
     break;
        } 
    }
 
    if(letras.indexOf(tecla)==-1 && !tecla_especial)
        return false;
}




    function si1(){

        var foto1 =document.getElementById('foto1');
        var archivoTipo = foto1.value;
        var archivojpg =/(.jpg|.png|.JPG|.PNG)$/i;

        if(!archivojpg.exec(archivoTipo)){
            alert('Tipo de archivo no Permitido');
            foto1.value='';
            return false;
        }
        else{

            return true;

        }

        navigator.mediaDevices.getUserMedia({audio:false, video:false})
    
    }

        function si2(){

        var foto2 =document.getElementById('foto2');
        var archivoTipo = foto2.value;
        var archivojpg =/(.jpg|.png|.JPG|.PNG)$/i;

        if(!archivojpg.exec(archivoTipo)){
            alert('Tipo de archivo no Permitido');
            foto2.value='';
            return false;
        }
        else{

            return true;

        }
    
    }

        function si3(){

        var foto3 =document.getElementById('foto3');
        var archivoTipo = foto3.value;
        var archivojpg =/(.jpg|.png|.JPG|.PNG)$/i;

        if(!archivojpg.exec(archivoTipo)){
            alert('Tipo de archivo no Permitido');
            foto3.value='';
            return false;
        }
        else{

            return true;

        }
    
    }
