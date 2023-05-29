<?php
require('validacao_adm.php');
require('../conexao.php');

// VERIFICANDO DADOS PARA ATUALIZAR OU INSERIR
if (isset($_POST['cod_quarto'])) {
    $cod_quarto = $_POST['cod_quarto'];
    $tipo_quarto = $_POST['tipo_quarto'];
    $descricao = $_POST['descricao'];
    $servicos = $_POST['servicos'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $preco = $_POST['preco'];

    $img_quarto = $_FILES['img_quarto']['name'];
    $imagem_temp = $_FILES['img_quarto']['tmp_name'];

    $update_quarto = "UPDATE quarto SET tipo_quarto = ?, descricao = ?, servicos = ?, rua = ?, bairro = ?, cidade = ?, preco = ?, img_quarto = ? WHERE cod_quarto = ?";
    $stmt = $mysqli->prepare($update_quarto);
    $stmt->bind_param('ssssssssi', $tipo_quarto, $descricao, $servicos, $rua, $bairro, $cidade, $preco, $img_quarto, $cod_quarto);

    if ($stmt->execute()) {
        $stmt->close();

        $destino = '../img/uploads/' . $img_quarto;
        move_uploaded_file($imagem_temp, $destino);

        echo "<script> alert('QUARTO ATUALIZADO COM SUCESSO!');</script>";
        echo "<script> window.location.href='exibir.php';</script>";
        exit;
    } else {
        echo "<script> alert('ERRO: NÃO FOI POSSÍVEL ATUALIZAR O QUARTO.');</script>";
        echo "<script> window.location.href='cad_quarto.php';</script>";
        exit;
    }
} elseif (isset($_POST['servicos'])) {
    $tipo_quarto = $_POST['tipo_quarto'];
    $descricao = $_POST['descricao'];
    $servicos = $_POST['servicos'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $preco = $_POST['preco'];

    $img_quarto = $_FILES['img_quarto']['name'];
    $imagem_temp = $_FILES['img_quarto']['tmp_name'];

    $insert_quarto = "INSERT INTO quarto (tipo_quarto, descricao, servicos, rua, bairro, cidade, preco, img_quarto) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($insert_quarto);
    $stmt->bind_param('ssssssss', $tipo_quarto, $descricao, $servicos, $rua, $bairro, $cidade, $preco, $img_quarto);

    if ($stmt->execute()) {
        $stmt->close();

        $destino = '../imagens/quartos_up/' . $img_quarto;
        move_uploaded_file($imagem_temp, $destino);

        echo "<script> alert('QUARTO CADASTRADO COM SUCESSO!');</script>";
        echo "<script> window.location.href='exibir.php';</script>";
        exit;
    } else {
        echo "<script> alert('ERRO: NÃO FOI POSSÍVEL CADASTRAR O QUARTO.');</script>";
        echo "<script> window.location.href='cad_quarto.php';</script>";
        exit;
    }
}

$mysqli->close();
?>
