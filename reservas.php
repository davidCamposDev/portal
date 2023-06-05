<?php
include('validacao_res.php');
require('conexao.php');

// Verificar se o usuário está logado
if (!isset($_SESSION['rg_user'])) {
    // Redirecionar o usuário para a página de login
    header("Location: login.php");
    exit();
}

// Obtém o CPF do usuário logado
$rg_user = $_SESSION['rg_user'];

// Consulta o banco de dados para obter as informações dos carros alugados pelo usuário
$query = "SELECT v.tipo_quarto, v.servicos, v.descricao, v.preco, v.img_quarto, a.data_entrada, a.data_saida, a.registro_aluguel
          FROM quarto v
          INNER JOIN reservas a ON v.cod_quarto = a.cod_quarto
          WHERE a.rg_user = '$rg_user'";

$result = mysqli_query($mysqli, $query);

// Verificar se o usuário tem carros alugados
if (mysqli_num_rows($result) > 0) {
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Reservas</title>
    <!--Boostrap-->
    <?php require("incorporar/links.php");?>
    <!--Meu Css-->
    <link rel="stylesheet" href="./CSS/estilo.css">
    </head>

    <body>
        <?php require('incorporar/header.php'); ?>

        <div class="container">
            <h1 class="mt-4">Minhas Reservas</h1>

            <?php
            // Loop para exibir os detalhes de cada reserva
            while ($dados_quarto = mysqli_fetch_assoc($result)) {
                $tipo_quarto = $dados_quarto['tipo_quarto'];
                $servicos = $dados_quarto['servicos'];
                $descricao = $dados_quarto['descricao'];
                $preco = $dados_quarto['preco'];
                $img_quarto = $dados_quarto['img_quarto'];
                $data_entrada = $dados_quarto['data_entrada'];
                $data_saida = $dados_quarto['data_saida'];
                $registro_aluguel = $dados_quarto['registro_aluguel'];
                $caminho_imagem = 'imagens/quartos_up/' . $img_quarto;

                // Calcular o tempo restante até a data de término do aluguel
                $tempo_restante = strtotime($data_saida) - strtotime($data_entrada);
                $dias_restantes = ceil($tempo_restante / (60 * 60 * 24));

                // Verificar se o tempo restante é menor ou igual a zero
                if ($dias_restantes < 0) {
                    // Excluir o registro do carro alugado no banco de dados
                    $query_excluir = "DELETE FROM aluga WHERE registro_aluguel = '$registro_aluguel'";
                    mysqli_query($mysqli, $query_excluir);

                    // Continue para o próximo carro alugado (pula a exibição na página)
                    continue;
                }
                ?>

                <div class="card mb-4">
                    <div class="row g-0">
                        <div class="col-md-5">
                        <img src="<?php echo $caminho_imagem; ?>" alt="Imagem do Quarto" class="img-fluid rounded">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $tipo_quarto; ?></h5>
                                <p class="card-text"><?php echo $descricao; ?></p>
                                <p class="card-text">Serviços: <?php echo $servicos; ?></p>
                                <p class="card-text">Preço: R$ <?php echo $preco; ?></p>
                                <p class="card-text">Estadia de : <?php echo $dias_restantes; ?> Dias</p>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

    <?php
} else {
    // O usuário não possui carros alugados
    require("index.php");
    echo "<script> alert ('ERRO: VOCÊ NAO POSSUI UM QUARTO RESERVADO.');</script>";
    echo "Você não possui nenhuma reserva de quarto no momento.";
}
?>
