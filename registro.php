<?php
ob_start();
include_once 'conexao.php';

if (isset($_POST['EnviarCadUser'])) {
    $nome_user = trim($_POST['nome_user']);
    $rg_user = trim($_POST['rg_user']);
    $email_user = trim($_POST['email_user']);
    $senha_user = trim($_POST['senha_user']);
    $cidade = trim($_POST['cidade']);
    $rua = trim($_POST['rua']);
    $bairro = trim($_POST['bairro']);
    $telefone = trim($_POST['telefone']);

    $query_verifica_rg = "SELECT COUNT(*) AS total FROM usuario WHERE rg_user = ?";
    $verifica_rg = $mysqli->prepare($query_verifica_rg);
    $verifica_rg->bind_param('s', $rg_user);
    $verifica_rg->execute();
    $verifica_rg->bind_result($total);
    $verifica_rg->fetch();
    $verifica_rg->close();

    if ($total > 0) {
        echo "<script>alert('Usuário já cadastrado'); window.location.href = 'index.php';</script>";
        
    } else {
        $tipo_login = 0;
        $query_usuario = "INSERT INTO usuario (nome_user, senha_user, email_user, rg_user, cidade, rua, bairro, telefone, tipo_login) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $cad_usuario = $mysqli->prepare($query_usuario);
        $cad_usuario->bind_param('sssssssss', $nome_user, $senha_user, $email_user, $rg_user, $cidade, $rua, $bairro, $telefone, $tipo_login);
        $cad_usuario->execute();

        if ($cad_usuario->affected_rows) {
            echo "<script>alert('Usuário cadastrado com sucesso!'); window.location.href = 'index.php';</script>";
        } else {
            echo "<p style='color: #f00;'>Erro ao cadastrar usuário!</p>";
        }
        $cad_usuario->close();
    }
}
?>
