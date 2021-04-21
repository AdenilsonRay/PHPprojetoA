function ValidarDados(){
    
    //Variaveis
    var nome = document.getElementById('nome');
    var endereco = document.getElementById('endereco');
    var estado = document.getElementById('estado');
    var data = document.getElementById('data');
    var categoria = document.getElementById('categoria');
    var cpf = document.getElementById('cpf');
    var login = document.getElementById('login');
    var senha = document.getElementById('senha');
    var confirma = document.getElementById('confirma');
    var sexo = document.getElementsByName('sexo');
    var resposta = document.getElementById('resposta');
    var divSexo = document.getElementById('divSexo');
    resposta.innerHTML='';
    
    if (nome.value==='') {
        resposta.innerHTML=' CORRIJA OS ITENS DESTACADOS! ';
        nome.classList.add('erro');
        nome.focus();
    }else
        nome.classList.remove('erro'); 
    
    if (endereco.value==='') {
        resposta.innerHTML=' CORRIJA OS ITENS DESTACADOS! ';
        endereco.classList.add('erro');
        endereco.focus();
    }else
        endereco.classList.remove('erro'); 
    
    if (estado.value==='') {
        resposta.innerHTML=' CORRIJA OS ITENS DESTACADOS! ';
        estado.classList.add('erro');
        estado.focus();
    }else
        estado.classList.remove('erro'); 
    
    if (data.value==='') {
        resposta.innerHTML=' CORRIJA OS ITENS DESTACADOS! ';
        data.classList.add('erro');
        data.focus();
    }else
        data.classList.remove('erro'); 
    
    if (categoria.value==='') {
        resposta.innerHTML=' CORRIJA OS ITENS DESTACADOS! ';
        categoria.classList.add('erro');
        categoria.focus();
    }else
        categoria.classList.remove('erro'); 
    
    if (cpf.value==='') {
        resposta.innerHTML=' CORRIJA OS ITENS DESTACADOS! ';
        cpf.classList.add('erro');
        cpf.focus();
    }else
        cpf.classList.remove('erro'); 
    
    if (login.value==='') {
        resposta.innerHTML=' CORRIJA OS ITENS DESTACADOS! ';
        login.classList.add('erro');
        login.focus();
    }else
        login.classList.remove('erro'); 
    
    if (senha.value==='') {
        resposta.innerHTML=' CORRIJA OS ITENS DESTACADOS! ';
        senha.classList.add('erro');
        senha.focus();
    }else
        senha.classList.remove('erro'); 
    
    if (confirma.value!==senha.value | confirm.value==='' | senha.value==='') {
        resposta.innerHTML=' CORRIJA OS ITENS DESTACADOS! ';
        confirma.classList.add('erro');
        confirma.focus();
    }else
        confirma.classList.remove('erro'); 
    
    if (sexo[0].checked===false & sexo[1].checked===false) {;
        resposta.innerHTML=' CORRIJA OS ITENS DESTACADOS! ';
        divSexo.classList.add('erro');
        sexo[0].focus();
    }else
        divSexo.classList.remove('erro'); 
    
}

function iniciar(){
    document.querySelector("input#inpCadastrar").addEventListener("click",ValidarDados);
    document.getElementById('nome').focus();
}


window.addEventListener("load",iniciar);




