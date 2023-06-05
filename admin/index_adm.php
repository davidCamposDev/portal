<?php require('validacao_adm.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel administrativo</title>
    <?php require('inc/links.php') ?>

	<script>

        function confirmar_exclusao(cod_quarto) {

            var resposta = confirm("Deseja continuar com a exclusão?");

            if (resposta == true) {

                window.location.href = "excluir.php?cod_quarto=" + cod_quarto;
            }
        }
    </script>

</head>
<body calss="bg-light">		
	<div class="barra_topo">


    <div class="barra_topo_n2">

        <nav>

			<nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
            <div class="container-fluid">
              <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index_adm.php">NOVOTEL Administrador</a>
              <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="cad_quarto.php">Cadastrar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="exibir.php">Exibir</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="admin_reservas.php">Reservas</a>
                  </li>

				          <li class="nav-item" >
                    <a class="nav-link me-2" href="../sair.php">Sair</a>
                  </li>
                </ul>
              </div>

              <label for="">
              <?php echo "Seja bem-vindo, " . $_SESSION['nome_user']; ?>
              </label>

            </div>
		</nav>


    </div>

 
	</div>
	</form>

    <?php require('inc/scripts.php') ?>
</body>
</html>   