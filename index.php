<?php require('registro.php');?>
<?php
require('conexao.php');
$select_quarto = mysqli_query($mysqli, "SELECT * FROM quarto ORDER BY cod_quarto ASC");
?>	
<?php
if (!isset($_SESSION)) {
    session_start();
}
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
    
<!--Inicio do main-->
<main> 
    <div id="carrosel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="4000">
            <img src="imagens/carrosel/1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="imagens/carrosel/2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="6000">
            <img src="imagens/carrosel/3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <!--Fim do carrosel-->
    </main>
<!--Fim do Main-->
<!--Quartos-->
<article class="conteudo-principal">
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Quartos</h2>
    <div class="container">
        <div class="row">
            <?php
            $count = 0; // Variável para controlar a contagem de quartos

            while ($dados_quarto = mysqli_fetch_assoc($select_quarto)) {
                if ($count >= 3) {
                    break; // Limite de 3 quartos alcançado, interrompe o loop
                }

                $img_quarto = $dados_quarto['img_quarto'];
                $caminho_imagem = 'imagens/quartos_up/' . $img_quarto;
            ?>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="<?php echo $caminho_imagem; ?>" alt="Imagem do Quarto" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dados_quarto['tipo_quarto']; ?></h5>
                        <h6 class="mb-4">R$ <?php echo $dados_quarto['preco']; ?> Por Noite</h6>
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
                            <span class=" text-start badge rounded-pill bg-light text-dark text-wrap">
                                Rua: <?php echo $dados_quarto['rua']; ?>,
                                Bairro: <?php echo $dados_quarto['bairro']; ?>,
                                Cidade: <?php echo $dados_quarto['cidade']; ?>
                            </span>
                        </div>
                    </div>
                    <div class="text-center mb-4">
                        <a href="alugar.php?id=<?php echo $dados_quarto['cod_quarto']; ?>" class="btn btn-sm btn-outline-dark shadow-none">Reservar</a>
                    </div>
                </div>
            </div>
            <?php
                $count++;
            }
            ?>

        </div>
        
        <div class="col-lg-12 text-center mt-5">
            <a href="quartos.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Mais quartos</a>
        </div>
    </div>
</article>


<!--Fim dos Quartos-->
      <!--Rodapé-->
        <?php require('incorporar/footer.php'); ?>

        <!--Javascrip do css-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"></script>


      </body>
</html>