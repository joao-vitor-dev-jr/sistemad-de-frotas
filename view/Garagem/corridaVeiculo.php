<?php
session_start();
include("conexao.php");

$ID_VEICULO = filter_input(INPUT_GET, 'ID_VEICULO');
//verificar se realmente foi recuperado um parametro

//executar comando sql
$garagem = mysqli_query($conexao, " INSERT INTO corrida (id, placa, marca, modelo, cor) SELECT id, placa, marca, modelo, cor FROM garagem WHERE id ='$ID_VEICULO'") or die();


$row = mysqli_num_rows($garagem);

if($row == 1){
	$delete = mysqli_query($conexao, "DELETE FROM garagem WHERE id = '$ID_VEICULO' ") or die();

	mysqli_close($conexao);
}
mysqli_close($conexao);

header("Location: ../garagem.php");

?>