<?php
session_start();
include ("conexao.php");

mysqli_close($conexao);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/form-css.css">

    <title>SCF</title>
</head>
</html>
<body>
	<div class="">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<header>

                    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                        <a class="navbar-brand" href="#">Ola, <?php echo $_SESSION['nome']; ?></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="veiculos.php">Veiculos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="garagem.php">Garagem</a>
                                </li>
                                <li class="nav-item">
                                    
                                    <a class="nav-link" href="logout.php">log-off</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <br>
                <div class="container">
                    <section>
                        <h1>Cadastro de Veiculos</h1>
                        <hr><br><br>

                        <form class="input-log" method="POST" action="editar-Veiculo.php">
                            <label>Placa:</label>
                            <br>
                            <input class="form-control" type="text" name="PLACA" class="campo" maxlength="50" required autofocus >
                            <br>
                            <label>Modelo:</label>
                            <br>
                            <input class="form-control" type="text" name="MODELO" class="campo" maxlength="50" required >
                            <br>
                            <label>Cor:</label>
                            <br>
                            <input class="form-control" type="text" name="COR" class="campo" maxlength="50">
                            <br>
                            <label>Marca:</label>
                            <br>
                            <input class="form-control" type="text" name="MARCA" class="campo" maxlength="50" required >
                            <br>
                            <input type="submit" value="salvar" class="btn btn-success">
                            <input type="reset" value="limpar" class="btn">
                            <br>
                            <br>
                        </form>
                    </section>
                </div>
            </body>
            </html>