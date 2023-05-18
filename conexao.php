<?php
//conexao com o Banco de dados
	$host = 'localhost';
	$usuario = 'root';
	$senha = '';
	$database = 'hotel_db';
	
	date_default_timezone_set("America/Manaus");
	
	$mysqli = new mysqli($host, $usuario, $senha, $database);

	if($mysqli->error){
		die("Falha ao conectar ao banco de dados: " . $mysqli->error);
	}


?>
