<?php 
$servidor = "localhost";	//estabelecendo a conexão
$usuario = "root";			//com o banco Mysql.
$senha = "";
$dbname = "scf";

//cirar conexao
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
if (!$conexao) {
	echo "sem conexao de dados";
	// condicional para verificar se existe ou foi
	// feita a conexão com o banco.
}


 ?>