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
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/portal";

	$url = "http://".$host_ip."/porta1";

	$url_admin = "http://".$host_ip."/portal/admin";
?>
