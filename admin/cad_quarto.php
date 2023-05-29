<?php require('index_adm.php'); ?>
<?php require('validacao_adm.php'); ?>

<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="modal-content">
            <div class="mb-4">
                <h2 class="modal-title">Cadastro de Quarto</h2>
            </div>
            <div class="container-fluid">
                <form id="form_cadastrar" name="form_cadastrar" class="form_cadastrar" method="post" action="salvar.php" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Tipo do Quarto</label>
                            <input class="form-control" type="text" name="tipo_quarto" id="tipo_quarto" required placeholder="Tipo do Quarto">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Descrição</label>
                            <input class="form-control" type="text" name="descricao" id="descricao" num_rows="3" required placeholder="Descrição">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Serviços</label>
                            <input class="form-control" type="text" name="servicos" id="servicos" required placeholder="Serviços">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Rua</label>
                            <input class="form-control" type="text" name="rua" id="endereco" required placeholder="Rua">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Bairro</label>
                            <input class="form-control" type="text" name="bairro" id="endereco" required placeholder="Bairro">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Cidade</label>
                            <input class="form-control" type="text" name="cidade" id="endereco" required placeholder="Cidade">
                        </div>
                    </div>
                    <div class="row mb-3">
                    <label class="form-label">Preço</label>
                        <div class="input-group col-md-6">
                            <span class="input-group-text">R$</span>
                            <input class="form-control" type="text" name="preco" id="preco" required placeholder="Preço" oninput="formatarDecimal(this)">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Imagem do Quarto</label>
                            <input type="file" class="form-control" name="img_quarto" id="img_quarto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary" value="Cadastrar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>



    <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>
