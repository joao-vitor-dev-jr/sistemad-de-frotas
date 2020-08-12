<?php
session_start();
include("conexao.php");

$ID_VEICULO = filter_input(INPUT_GET, 'ID_VEICULO');
//verificar se realmente foi recuperado um parametro

//executar comando sql
$garagem = mysqli_query($conexao, " INSERT INTO garagem (id, placa, marca, modelo, cor) SELECT id, placa, marca, modelo, cor FROM carros WHERE id ='$ID_VEICULO'") or die();
mysqli_close($conexao);


header("Location: consultaVeiculos.php");
?>