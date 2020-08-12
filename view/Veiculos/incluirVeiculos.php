<?php
session_start();
include_once("conexao.php");

//recupera os registro
$PLACA = $_POST["placa"];
$MODELO = $_POST["modelo"];
$COR = $_POST["cor"];
$MARCA = $_POST["marca"];


//caso registro esteja ok
if(empty($erro)){

    $inserir = mysqli_query($conexao,"INSERT INTO carros (placa, modelo, cor, marca) values ('$PLACA', '$MODELO', '$COR','$MARCA')");

    mysqli_close($conexao);
    header("Location: consultaVeiculos.php");
    exit();

}else{
    //caso registro errado
    //redireciona para incluir.php
    header("Location: cadastroVeiculos.php?erro=$erro");
    exit();
}

?>