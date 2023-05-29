<?php
require('validacao_adm.php');
require('../conexao.php');

$cod_quarto = $_GET['cod_quarto'];

$delete_quarto = "DELETE FROM quarto WHERE cod_quarto = $cod_quarto";

if (mysqli_query($mysqli, $delete_quarto)) {
    mysqli_close($mysqli);
    echo "<script> alert('QUARTO EXCLUÍDO COM SUCESSO!'); </script>";
    echo "<script> window.location.href='exibir.php'; </script>";
} else {
    echo "<script> alert('ERRO: NÃO FOI POSSÍVEL EXCLUIR O QUARTO.'); </script>";
    echo "<script> window.location.href='index-adm.php'; </script>";
    mysqli_close($mysqli);
}
?>