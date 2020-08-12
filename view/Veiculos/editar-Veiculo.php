<?php
session_start();
include_once("conexao.php");
//recuperar o registro

//recupera os registro
$PLACA = $_POST["plca"];
$MODELO = $_POST["modelo"];
$COR = $_POST["cor"];
$MARCA = $_POST["marca"];
//RECUPERANDO O ID DO EDITAR
$ID_VEICULO = filter_input(INPUT_POST, 'id'); 


mysqli_query($conexao, "UPDATE carros set placa='$PLACA', modelo='$MODELO', cor='$COR', marca='$MARCA' where id = '$ID_VEICULO'");
mysqli_close($conexao);

header("Location: consultaVeiculos.php");
  ?>