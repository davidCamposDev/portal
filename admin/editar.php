<?php
require('validacao_adm.php');
require('../conexao.php');
require('index_adm.php');

$cod_quarto = $_GET['cod_quarto'];

$select_quarto = mysqli_query($mysqli, "SELECT * FROM quarto WHERE cod_quarto = $cod_quarto");

if (mysqli_num_rows($select_quarto) > 0) {
    $dados_quarto = mysqli_fetch_assoc($select_quarto);
} else {
    echo "<script> alert ('NÃO EXISTEM QUARTOS CADASTRADOS!');</script>";
    echo "<script> window.location.href='cad_quarto.php';</script>";
}
?>

<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="modal-content">
        <div class="mb-4">
            <h2 class="modal-title">Atualização de Quarto</h2>
        </div>
        <div class="container-fluid">
            <form id="form_atualizar" name="form_atualizar" class="form_atualizar" method="post" action="salvar.php" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Código do Quarto</label>
                        <input class="form-control" type="text" name="cod_quarto" id="cod_quarto" required placeholder="Código do Quarto" value="<?php echo $dados_quarto['cod_quarto']; ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tipo do Quarto</label>
                        <input class="form-control" type="text" name="tipo_quarto" id="tipo_quarto" required placeholder="Tipo do Quarto" value="<?php echo $dados_quarto['tipo_quarto']; ?>" required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Descrição</label>
                        <input class="form-control" type="text" name="descricao" id="descricao" required placeholder="Descrição" value="<?php echo $dados_quarto['descricao']; ?>" required autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Serviços</label>
                        <input class="form-control" type="text" name="servicos" id="servicos" required placeholder="Serviços" value="<?php echo $dados_quarto['servicos']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Rua</label>
                        <input class="form-control" type="text" name="rua" id="rua" required placeholder="Rua" value="<?php echo $dados_quarto['rua']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Bairro</label>
                        <input class="form-control" type="text" name="bairro" id="bairro" required placeholder="Bairro" value="<?php echo $dados_quarto['bairro']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Cidade</label>
                        <input class="form-control" type="text" name="cidade" id="cidade" required placeholder="Cidade" value="<?php echo $dados_quarto['cidade']; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="form-label">Preço</label>
                    <div class="input-group col-md-6">
                        <span class="input-group-text">R$</span>
                        <input class="form-control" type="text" name="preco" id="preco" required placeholder="Preço" oninput="formatarDecimal(this)" value="<?php echo $dados_quarto['preco']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Imagem do Quarto</label>
                        <input type="file" class="form-control" name="img_quarto" id="img_quarto" value="<?php echo $dados_quarto['img_quarto']; ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" value="Atualizar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="../js/main.js"></script>
