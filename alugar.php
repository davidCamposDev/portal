<?php
include('validacao_res.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <?php require("incorporar/links.php"); ?>
    <!-- Meu CSS -->
    <link rel="stylesheet" href="./CSS/estilo.css">

    <title>Detalhes do Quarto</title>
</head>

<body id="body-exibir">
    <?php require('incorporar/header.php'); ?>

<div class="container3">
    <?php
    require('conexao.php');

    if (isset($_GET['id'])) {
        $cod_quarto = $_GET['id'];
        $query = "SELECT * FROM quarto WHERE cod_quarto = $cod_quarto";
        $result = mysqli_query($mysqli, $query);

        if (mysqli_num_rows($result) > 0) {
            $dados_quarto = mysqli_fetch_assoc($result);
            $tipo_quarto = $dados_quarto['tipo_quarto'];
            $descricao = $dados_quarto['descricao'];
            $servicos = $dados_quarto['servicos'];
            $rua = $dados_quarto['rua'];
            $bairro = $dados_quarto['bairro'];
            $cidade = $dados_quarto['cidade'];
            $preco = $dados_quarto['preco'];
            $img_quarto = $dados_quarto['img_quarto'];
            $rg_user = $_SESSION['rg_user'];
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
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <?php echo $dados_quarto['descricao']; ?> 
                            </span>
                        </div>
                        <div class="instalacao mb-3">
                            <h6 class="mb-1">Serviços</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <?php echo $dados_quarto['servicos']; ?>
                            </span>
                        </div>
                        <div class="pessoas">
                            <h6 class="mb-1">Endereço</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Rua: <?php echo $dados_quarto['rua']; ?>,
                                Bairro: <?php echo $dados_quarto['bairro']; ?>,
                                Cidade: <?php echo $dados_quarto['cidade']; ?>
                            </span>
                        </div>  
                    </div>
                    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                        <h6 class="mb-4"> R$ <?php echo $dados_quarto['preco']; ?> </h6>
                        <button class='btn btn-outline-dark shadow-none' id='btnAlugar'>Alugar</button>
                    </div>
                </div>
            <form class="aluguel-form" id="aluguelForm" action="alugar_quarto.php?id=<?php echo $cod_quarto; ?>" method="POST">
                <div class="mb-3">
                    <label for="email_user" class="form-label">E-mail do usuário:</label>
                    <input type="email" class="form-control" id="email_user" name="email_user" required placeholder="usuario@example.com">
                </div>
                <div class="mb-3">
                    <label for="data_entrada" class="form-label">Data de Inicio da estadia:</label>
                    <input type="date" class="form-control" id="data_entrada" name="data_entrada" required>
                </div>
                <div class="mb-3">
                    <label for="data_saida" class="form-label">Data de término do estadia:</label>
                    <input type="date" class="form-control" id="data_saida" name="data_saida" required>
                </div>
                <input type="hidden" name="rg_user" value="<?php echo $rg_user; ?>">

                <div class="mb-3">
                    <p>Dados do cartão</p>
                </div>
                <div class="mb-3">
                    <label for="num_cartao" class="form-label">Número do cartão de crédito:</label>
                    <input type="text" class="form-control" id="num_cartao" name="num_cartao" required>
                </div>
                <div class="mb-3">
                    <label for="nome_cartao" class="form-label">Nome no cartão:</label>
                    <input type="text" class="form-control" id="nome_cartao" name="nome_cartao" required>
                </div>
                <div class="mb-3">
                    <label for="data_validade" class="form-label">Data de validade do cartão:</label>
                    <input type="text" class="form-control" id="data_validade" name="data_validade" required placeholder="MM/AA" maxlength="5" oninput="formatarDataValidade(event)">
                </div>
                <div class="mb-3">
                    <label for="codigo_seguranca" class="form-label">Código de segurança do cartão:</label>
                    <input type="text" class="form-control" id="codigo_seguranca" name="codigo_seguranca" maxlength="3" required>
                </div>
                <input type="submit" value="Alugar" class="btn btn-primary" id="submitAlugar">
                <h5>Isso é apenas uma simulação e não há processamento real do pagamento. Os dados fornecidos são apenas para fins de demonstração e não serão processados.</h5>
            </form>
    <?php
        } else {
            echo "Quarto não encontrado.";
        }
    } else {
        echo "Código do Quarto não fornecido.";
    }
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script>
        const btnAlugar = document.getElementById('btnAlugar');
        const aluguelForm = document.getElementById('aluguelForm');
        aluguelForm.style.display = 'none';
        btnAlugar.addEventListener('click', function(event) {
            event.preventDefault();
            aluguelForm.style.display = 'block';
            btnAlugar.style.display = 'none';
        });
        $(document).ready(function() {
            $('#num_cartao').inputmask('9999 9999 9999 9999');
        });
        function formatarDataValidade(event) {
            const input = event.target;
            let valor = input.value.replace(/\D/g, '');
            if (valor.length > 2) {
                valor = valor.replace(/(\d{2})(\d{2})/, '$1/$2');
            }
            input.value = valor;
        }
    </script>
</div>

<footer class="fixed-bottom">
    <div class="footer-bottom">
        <a href="https://www.instagram.com/campos.sxs/" target="_blank">
            <p>@campos.sxs - 2023</p>
        </a>
    </div>
</footer>

<!-- Scripts do Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>

</body>

</html>
