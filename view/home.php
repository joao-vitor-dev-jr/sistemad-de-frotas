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
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>SCF</title>
</head>
</html>
<body>
	<div class="">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
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
				<h1>BEM-VINDO AO SISTEMA DE CONTROLE DE FROTAS</h1>
				<h1>Sobre</h1>
				<p>...Suspendisse congue interdum risus, quis fermentum ligula aliquet vel. Cras mattis, lectus tempor varius ullamcorper, elit mauris dignissim massa, vitae tempus lorem neque a nisl. Ut pellentesque at nunc sit amet rutrum. Mauris ac felis quam. Fusce ut massa id mauris mollis pellentesque id at orci. Suspendisse quis laoreet lectus, ut pharetra quam. Mauris quis lacus mauris. Sed at nibh felis. Integer posuere dictum leo, ac dictum arcu mattis vitae. Duis quis lacus eu quam aliquet venenatis vel sed nunc. Sed aliquet fringilla est in rutrum. Phasellus a tempor nisl.</p>
				<p>Fusce at lacinia nisl. In libero tortor, tempus non mattis sed, feugiat in neque. Integer quis justo eget risus fermentum elementum quis id elit. Aliquam feugiat, mi sit amet porttitor porta, neque est pretium lectus, ut lacinia nibh lectus vitae est. Integer in lobortis metus. Nulla maximus dolor at erat cursus, a sollicitudin libero elementum. Aliquam vel elit nunc. Donec et purus auctor, facilisis libero nec, tempor nisi. Pellentesque dignissim mi non mauris sodales, vitae consequat ante malesuada. Curabitur eget aliquet nunc, vel luctus metus. Vivamus scelerisque erat risus, in molestie diam ultricies a.</p>
				<p>In ornare posuere odio a imperdiet. Cras rhoncus pretium dapibus. Praesent tempor mi id tortor auctor malesuada. Morbi quis finibus urna. In sit amet dapibus libero. Proin vel nisi tempus, viverra neque quis, tempus odio. Vestibulum suscipit tellus a neque vehicula viverra. Integer vitae tellus lacus.</p>
				<p>Curabitur nec quam nisi. Donec enim est, euismod vitae orci a, vehicula ullamcorper enim. Aliquam dui felis, sagittis vitae rutrum ut, ultricies vitae urna. Mauris hendrerit facilisis libero at dapibus. Fusce elementum, leo vitae dignissim fermentum, dolor turpis pharetra turpis, ut ultrices ante erat sed urna. Morbi tempor metus id nunc tincidunt, eu maximus odio varius. Ut hendrerit ligula ut vulputate finibus. Fusce eu scelerisque libero. Integer vestibulum pretium lorem, vel scelerisque mauris molestie ac. Nulla iaculis sem non nisl malesuada, convallis efficitur turpis rutrum. Phasellus in risus non dolor fringilla pellentesque eget at nibh. Etiam lacus dolor, semper sed vulputate vitae, rhoncus at ipsum. Etiam tristique, dui at maximus sodales, risus quam varius diam, vitae efficitur ex diam a augue. Duis vel lectus dignissim, sagittis lacus quis, tincidunt orci. Suspendisse lectus tortor, pretium in orci nec, semper suscipit purus. Donec posuere lacinia dui ac congue.</p>
				<p>Morbi bibendum porttitor tellus vitae iaculis. Duis ullamcorper vel mi eget commodo. Vestibulum eu malesuada orci. Donec varius dui sem, nec vestibulum nunc porttitor et. Maecenas sagittis vel diam eu porta. Proin scelerisque sollicitudin enim, at tempus mauris iaculis vel. Nunc ultrices massa malesuada turpis fermentum ultrices. Ut posuere ultrices venenatis.</p>
				<br>
				<footer class="footer">
					<div class="icon-bar2">
						<a href="home.php"><i class="fa fa-arrow-up"></i>Voltar ao topo</a>
					</div>
				</footer>
			</div>
		</div>
	</div>
</body>