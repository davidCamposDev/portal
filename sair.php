<?php 
// Iniciar a sessão
session_start();

// Limpar todas as variáveis de sessão
$_SESSION = array();

// Destruir a sessão
session_destroy();

// Redirecionar para a página de login ou qualquer outra página desejada
header("Location: index.php");
exit();

?>