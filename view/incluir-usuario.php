<?php
session_start();
include_once("conexao.php");

//recupera os registro
$NOME = $_POST["nome"];
$SENHA = $_POST["senha"];



//caso registro esteja ok
if(empty($erro)){

   $inserir = mysqli_query($conexao,"INSERT INTO usuarios (nome, senha) values ('$NOME', '$SENHA')");

    mysqli_close($conexao);
    header("Location:novousuario.php");
    exit();

}else{
    //caso registro errado
    //redireciona para incluir.php
    header("Location:novousuario.php?erro=$erro");
    exit();
}

?>