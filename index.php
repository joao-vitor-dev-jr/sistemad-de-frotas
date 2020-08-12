<<?php 
session_start();
include_once("conexao.php");


?>
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	<script type="text/javascript" rel="stylesheet" src="js/jquery-3.4.1.min.js"></script>	
    <script type="text/javascript" rel="stylesheet" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<meta charset="utf-8">
		<title>SCF</title>
	</head>
	<body>
		<header class="header">
			<h1>Sistema de Controle de Frotas</h1>
			<div class="foto"></div>
		</header>

		<form method="POST" action="Controller/ope.php" name="logar" class="login-form">
		<h1>Login</h1>

			<div class="txtb">
			<input type="text" name="login" id="usuario">
			<span data-placeholder="Username"></span>
			</div>

			<div class="txtb">
			<input type="password" name="senha" id="senha">
			<span data-placeholder="Password"></span>
			</div>

			<input type="submit" class="logbtn" value="Login">


		</form>
		<script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>
	</body>
	</html>