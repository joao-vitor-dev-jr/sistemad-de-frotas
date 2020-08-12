<?php
session_start();
include("conexao.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" rel="stylesheet" src="../js/jquery-3.4.1.min.js"></script>	
    <script type="text/javascript" rel="stylesheet" src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/form-css.css">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



	<title>SCF</title>
</head>
</html>
<body>
	<div class="">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<header>
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
						<a class="navbar-brand" href="#">Ola, <?php echo $_SESSION['nome']; ?></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="barra">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="veiculos.php">Veiculos</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="garagem.php">Garagem</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../controller/ope-usuario.php">Novo Usuário</a>
								</li>
							</ul>
							<ul class="navbar-nav navbar-right">	
								<li class="nav-item">
									
									<a class="nav-link" href="logout.php">log-off</a>
								</li>
							</ul>
						</div>
					</nav>
				</header>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<br>
				<div class="container">
					<nav>
						<ul class="sub-menu">
							<a href="Veiculos/cadastroVeiculos.php"><li>Cadastro Novo Veículo</li></a>
							<br>
							<a href="Veiculos/consultaVeiculos.php"><li>Consultar Veículo</li></a>
						</ul>
					</nav>
					<section>
						<h1>Cadastro de Veiculos</h1>
						<hr><br><br>
					<div class="form-group">
						<form class="input-log" method="POST" action="Veiculos/incluirVeiculos.php">
							<label>Placa:</label>
                            <br>
                            <input class="form-control" type="text" name="placa" class="campo" maxlength="50" required autofocus >
                            <br>
                            <label>Modelo:</label>
                            <br>
                            <input class="form-control" type="text" name="modelo" class="campo" maxlength="50" required >
                            <br>
                            <label>Cor:</label>
                            <br>
                            <input class="form-control" type="text" name="cor" class="campo" maxlength="50">
                            <br>
                            <label>Marca:</label>
                            <br>
                            <input class="form-control" type="text" name="marca" class="campo" maxlength="50" required >
                            <br><br>
                            <input type="submit" value="salvar" class="btn btn-success">
                            <input type="reset" value="limpar" class="btn" border="1">
                            <br>
                            <br>
						</form>
					</div>	
					</section>
				</div>
			</div>
		</div>
	</div>
</body>
</html>