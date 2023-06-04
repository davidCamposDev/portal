<?php

//proteger a sessao caso tente acessar as pagians sem estar logado.
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['rg_user'])){
    include('index.php');
    echo "<script> alert ('ERRO: VOCÊ NÃO ESTA LOGADO.');</script>";
    die("---Você precisa logar para acessar as informações dessa página!");


}


?>