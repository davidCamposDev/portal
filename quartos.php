<?php
require('conexao.php');
$select_quarto = mysqli_query($mysqli, "SELECT * FROM quarto ORDER BY cod_quarto ASC");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novotel</title>
    <!--Boostrap-->
    <?php require("incorporar/links.php");?>
    <!--Meu Css-->
    <link rel="stylesheet" href="./CSS/estilo.css">
</head>
<body>
    <!--Topo-->
    <?php require('incorporar/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Nossos Quartos</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <main class="container">
        <!--Filtro por cidade-->
        <div class="my-4">
            <h4 class="mb-3">Filtrar por cidade:</h4>
            <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="cidade" placeholder="Digite a cidade">
                    <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
                </div>
            </form>
        </div>

        <!--Quartos-->
        <?php
        $count = 0; // Variável para controlar a contagem de quartos

        while ($dados_quarto = mysqli_fetch_assoc($select_quarto)) {
            // Verifica se a cidade do quarto corresponde à cidade pesquisada (caso tenha sido enviada)
            $cidadePesquisada = isset($_GET['cidade']) ? $_GET['cidade'] : '';
            if ($cidadePesquisada !== '' && $dados_quarto['cidade'] !== $cidadePesquisada) {
                continue; // Pula para a próxima iteração do loop se a cidade não corresponder
            }

            $img_quarto = $dados_quarto['img_quarto'];
            $caminho_imagem = 'imagens/quartos_up/' . $img_quarto;
            ?>
            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center justify-content-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="<?php echo $caminho_imagem; ?>" alt="Imagem do Quarto" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3"> <?php echo $dados_quarto['tipo_quarto']; ?> </h5>
                        <div class="sobreQuarto mb-4">
                            <h6 class="mb-1">Descrição</h6>
                            <span class="text-start badge rounded-pill bg-light text-dark text-wrap">
                                <?php echo $dados_quarto['descricao']; ?> 
                            </span>
                        </div>
                        <div class="instalacao mb-3">
                            <h6 class="mb-1">Serviços</h6>
                            <span class="text-start badge rounded-pill bg-light text-dark text-wrap">
                                <?php echo $dados_quarto['servicos']; ?>
                            </span>
                        </div>
                        <div class="pessoas">
                            <h6 class="mb-1">Endereço</h6>
                            <span class="text-start badge rounded-pill bg-light text-dark text-wrap">
                                Rua: <?php echo $dados_quarto['rua']; ?>,
                                Bairro: <?php echo $dados_quarto['bairro']; ?>,
                                Cidade: <?php echo $dados_quarto['cidade']; ?>
                            </span>
                        </div>  
                    </div>
                    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                        <h6 class="mb-4"> R$ <?php echo $dados_quarto['preco']; ?> Por Noite </h6>
                        <a href="alugar.php?id=<?php echo $dados_quarto['cod_quarto']; ?>" class="btn btn-sm w-100 btn-outline-dark shadow-none">Reservar</a>
                    </div>
                </div>
            </div>
            <?php
            $count++;
        }

        // Verifica se não há nenhum quarto cadastrado
        if ($count === 0) {
            echo "<p>Não há quartos cadastrados.</p>";
        }
        ?>
    </main>

    <?php require('incorporar/footer.php'); ?>
    <!--Javascrip do css-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"></script>

</body>
</html>

