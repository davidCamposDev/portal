<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['rg_user'])) {

    session_destroy();

    unset($_SESSION['rg_user']);
    unset($_SESSION['email_user']);

    echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";

    echo "<script> window.location.href='../index.php';</script>";

}

if ($_SESSION['tipo_login'] <> 1) {

    echo "<script> alert('ERRO: VOCÊ NÃO TEM PERMISSÃO PARA ACESSAR ESTA PÁGINA!'); window.location.href='../index.php';</script>";

    exit;

}

?>