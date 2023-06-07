<?php
require('conexao.php');

// Verificar se o registro do aluguel foi passado como parâmetro
if (isset($_GET['registro'])) {
    // Obter o registro do aluguel da URL
    $registro_aluguel = $_GET['registro'];

    // Excluir o registro do aluguel do banco de dados
    $query_excluir = "DELETE FROM reservas WHERE registro_aluguel = '$registro_aluguel'";
    mysqli_query($mysqli, $query_excluir);

    // Redirecionar de volta para a página de Minhas Reservas
    echo "<script> alert('Saida Confirmada!'); </script>";
    echo "<script> window.location.href='reservas.php'; </script>";
    exit();
}
?>
