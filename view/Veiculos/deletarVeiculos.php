<?php
session_start();
include_once("conexao.php");

$ID_VEICULO = filter_input(INPUT_GET, 'ID_VEICULO');
//verificar se realmente foi recuperado um parametro


//executar comando sql
$deletar = mysqli_query($conexao, " DELETE FROM carros WHERE id ='$ID_VEICULO'") or die();
mysqli_close($conexao);


//redirecionar para listar
header("Location: consultaVeiculos.php");
?>