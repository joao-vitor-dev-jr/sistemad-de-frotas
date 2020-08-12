<?php
session_start();
include("../conexao.php");

$login = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuarios where nome = 'admin' and senha = 'admin123' ";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
$_SESSION['nome'] == 'admin';
header("Location: ../view/novousuario.php");
exit();
}
else{
	header("Location: home.php");
}
?>