<?php 
session_start();
include_once("conexao.php");

$ID_VEICULO = filter_input(INPUT_GET, 'ID_VEICULO');
//verificar se realmente foi recuperado um parametro


//executar comando sql
$deletar = " DELETE FROM corrida WHERE id ='$ID_VEICULO'");
$sql = mysqli_query($deletar) or die();

mysqli_close($conexao);


//redirecionar para listar
if($sql){
<script type="text/javascript">
 	alert("carro deletado com sucesso! ");
 	location.href="../corrida.php";
 </script>
}else{
	<script type="text/javascript">
 	alert("carro nao foi deletado ");
 	location.href="../corrida.php";
 </script>
}

 ?>
