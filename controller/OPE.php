<?php 
session_start();
include("../conexao.php");


if(empty($_POST['login']) || empty($_POST['senha'])) {
	header("location: ../index.php");
	exit();
}

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuarios where nome = '$login' and senha = '$senha' ";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
	$_SESSION['nome'] = $login;
header("Location: ../view/home.php");
exit();
}else{
header("Location: ../index.php");
}



 ?>