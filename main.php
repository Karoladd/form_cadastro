<?php
session_start();
include_once("conexao.php");


$cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$datan = filter_input(INPUT_POST,'data',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$telefone= filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
$genero = filter_input(INPUT_POST,'genero',FILTER_SANITIZE_STRING);


$cadastro_usuario = "INSERT INTO usuarios(cpf,nome,datan,email,telefone,genero) VALUES ('$cpf','$nome','$datan','$email','$telefone','$genero')";
$resultado_usuario = mysqli_query($conn,$cadastro_usuario);


if(mysqli_insert_id($conn)){
    
    $_SESSION['msg'] = "<p style='color:green'> Usuário CADASTRADO com sucesso!</p>";
    header("Location: index.php");

} else {
    
    $_SESSION['msg'] = "<p style='color:red'> Usuário NÃO CADASTRADO </p>";
    header("Location: index.php");

}

if(empty($cpf))
{
    $_SESSION['mensagem-de-erro'] = 'O CPF não pode ser vazio, por favor preencha-o novamente';
    header("Location: index.php");
    return;
}

if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente';
    header("Location: index.php");
    return;
}
else if(strlen($nome) < 3)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 2 caracteres, por favor preencha-o novamente';
    header("Location:index.php");
    return;
}
else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres, por favor preencha-o novamente';
    header("Location:index.php");
    return;

}










