<?php
session_start();
include("conexao.php");

$corrida = mysqli_query($conexao, "SELECT * FROM corrida;");

mysqli_close($conexao);
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
							<a href="garagem.php"><li>Carros na Garagem</li></a>
						</ul>
					</nav>
					<br><br><br>
					<section>
						<h1>Veiculos em Corrida</h1>
						<hr><br><br>
						<table border="1">
				<tr>
					<td>PLACA</td>
					<td>MODELO</td>
					<td>COR</td>
					<td>MARCA</td>
				</tr>
				<?php foreach ($corrida as $dados): ?>
					<tr>	
						<td><?=$dados["placa"]?></td>
						<td><?=$dados["modelo"]?></td>
						<td><?=$dados["cor"]?></td>
						<td><?=$dados["marca"]?></td>
						
						<td><a href="javascript: if(confirm('Deseja deletar este veículo ?')) Location.href='Garagem/deletarCorrida.php?ID_VEICULO=<?=$dados["id"]?>'">Deletar</a></td>
						<td><a href="Garagem/devolverVeiculo.php?ID_VEICULO=<?=$dados["id"]?>">Mandar Garagem</a></td>

					</tr>
				<?php endforeach ?>
			</table>
					</section>
				</div>
			</div>
		</div>
	</div>
</body>
</html>