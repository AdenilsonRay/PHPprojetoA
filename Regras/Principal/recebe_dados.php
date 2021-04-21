
<?php
//Chama e executa a conexao
include_once '../../BDA/conexaoPhp.php';

//Acessa dados na variavel global
$codigo= filter_input(INPUT_GET,"codigo",FILTER_DEFAULT);
$nome=filter_input(INPUT_GET,"nome",FILTER_DEFAULT);
$endereco=filter_input(INPUT_GET,"endereco",FILTER_DEFAULT);
$estado=filter_input(INPUT_GET,"estado",FILTER_DEFAULT);
$data=filter_input(INPUT_GET,"data",FILTER_DEFAULT);
$categoria=filter_input(INPUT_GET,"categoria",FILTER_DEFAULT);
$cpf=filter_input(INPUT_GET,"cpf",FILTER_DEFAULT);
$login=filter_input(INPUT_GET,"login",FILTER_DEFAULT);
$senha=filter_input(INPUT_GET,"senha",FILTER_DEFAULT);
$sexo=filter_input(INPUT_GET,"sexo",FILTER_DEFAULT);

//Validando campos
$camposOK = true;

//Nome
if ($nome=='') {
    echo 'Informe o Nome. <BR>';
    $camposOK=false;
}

//Endereco
if ($endereco=='') {
    echo 'Informe o Endereço. <BR>';
    $camposOK=false;
}

//Estado
if ($estado=='') {
    echo 'Informe o Estado. <BR>';
    $camposOK=false;
}

//Data
if (strlen($data)==10) {
    $dia=substr($data,8,2);
    $mes= substr($data,5,2);
    $ano=substr($data,0,4);
    $dt='$dia-$mes-$ano';

    //Valida se e uma data
    if (!checkdate($mes,$dia,$ano)) {
        echo'Informe a data. <BR>';
        $camposOK=false;
    }
}else{
    echo 'Informe a data. <BR>';
    $camposOK=false;
}

//Categoria
if ($categoria=='') {
    echo 'Informe a categoria. <BR>';
    $camposOK=false;
}

//Cpf
if ($cpf=='') {
    echo 'Informe o CPF. <BR>';
    $canmposOK=false;
}

//Login
if ($login=='') {
    echo 'Informe o login. <BR>';
    $camposOK=false;
}

//Senha
if ($senha=='') {
    echo 'Informe a senha. <BR>';
    $camposOK=false;
}

//Sexo
if ($sexo=='') {
    echo 'Informe o sexo. <BR>';
    $camposOK=false;
}

if($camposOK){
    $sql="INSERT INTO clientes(nome,cpf,endereco,estados,dNasc,sexo,login,senha,categoria) 
                        values('$nome','$cpf','$endereco','$estado','$data','$sexo','$login','$senha','$categoria')";

    if (mysqli_query($conect,$sql)) {
        echo 'Inclusão realizada';
    }else{
        echo 'Erro:'.$sql."<br>". mysqli_error($conect);
    }
}








