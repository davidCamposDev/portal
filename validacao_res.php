<?php

//proteger a sessao caso tente acessar as pagians sem estar logado.
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['rg_user'])){
    include('incorporar/header.php');
    die("---Você precisa logar para acessar as informações dessa página!---<p><br><br><a href=\"index.php\">Entrar</a></p>");


}


?>