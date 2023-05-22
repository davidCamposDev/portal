<?php
//limpar buffer de redirecionamento
ob_start();

//incluir o arquivo com a conexao do banco de dados
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

    // Verificar se o Rg já está cadastrado no banco de dados
    $query_verifica_rg = "SELECT COUNT(*) AS total FROM usuario WHERE rg_user = ?";
    $verifica_rg = $mysqli->prepare($query_verifica_rg);
    $verifica_rg->bind_param('s', $rg_user);
    $verifica_rg->execute();
    $verifica_rg->bind_result($total);
    $verifica_rg->fetch();
    $verifica_rg->close();

    if ($total > 0) {
        echo "<p style='color: #f00;'>Rg já cadastrado!</p>";
    } else {
        // O rg não está cadastrado, prosseguir com o cadastro do usuário
        $tipo_login = 0;

        $query_usuario = ("INSERT INTO usuario (nome_user, senha_user, email_user, rg_user, cidade, rua, bairro, telefone, tipo_login) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        $cad_usuario = $mysqli->prepare($query_usuario);

        $cad_usuario->bind_param('sssssssss', $nome_user, $senha_user, $email_user, $rg_user, $cidade, $rua, $bairro, $telefone, $tipo_login);

        $cad_usuario->execute();

        if ($cad_usuario->affected_rows) {
            echo "<script> alert ('USUÁRIO CADASTRADO COM SUCESSO!');</script>";

            header("Location: index.php");
        } else {
            echo "<p style='color: #f00;'>Erro ao cadastrar usuário!</p>";
        }
        $cad_usuario->close();
    }

}
?>