<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
            <div class="container-fluid">
              <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">NOVOTEL</a>
              <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="quartos.php">Quartos</a>
                  </li>
				  <li class="nav-item">
                    <a class="nav-link me-2" href="reservas.php">Minha reservas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="contato.php">Contate-nos</a>
                  </li>
				  
                  
                </ul>
                <div class="d-flex" role="Pesquisar">
				<?php if (isset($_SESSION['email_user'])): ?>
                        <div class="nav-logout">
                            <div class="user-info">
                                <label>
                                    <?php echo "Olá, " . $_SESSION['nome_user']; ?>
								<a href="sair.php">Sair</a>
									
                                </label>
                            </div>
                        </div>
						<?php else: ?>
                  <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel">Login	</button>
                  <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModel">Registre-se	</button>
				  <?php endif; ?>
                </div>
              </div>
            </div>
</nav>

<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form id="form_login" name="form_login" class="form_login" method="post" action="valida.php">
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-circle fs-3 me-2">LOGIN</i>
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
        	<div class="mb-3">
    			<label class="form-label">E-mail</label>
    			<input type="email" class="form-control shadow-none" id="email_user" name="email_user" required autofocus>
  			  </div>
  			<div class="mb-4">
    			<label class="form-label">Senha</label>
    			<input type="password" class="form-control shadow-none" id="senha_user" name="senha_user" placeholder="Senha">
  			</div>
  			<div class="d-flex align-items-center justify-content-between mb-2">
  				<button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
  			</div>
      		</div>
      		<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      		</div>
    	</form>
      
    </div>
  </div>
</div>

<div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	
    	<form method="post" action="registro.php">
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-lines-fill fs-3 me-2">Registro de Usuario</i>
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
      			<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Nota: Os seus dados devem corresponder ao seu documento de identificação (RG, CPF ,passaporte, carta de motorista, etc.) que será exigido durante o check-in.
    			</span>
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Nome Completo</label>
    					<input type="text" class="form-control shadow-none" name="nome_user" required>
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">Email</label>
    					<input type="email" class="form-control shadow-none" name="email_user" placeholder="usuario@gmail.com" required>
    				</div>
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Telefone</label>
    					<input type="text" class="form-control shadow-none" name="telefone">
    				</div>
					<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">RG</label>
    					<input type="Text" class="form-control shadow-none" name="rg_user" required>
    				</div>
    				<div class="col-md-4 ps-0">
    					<label class="form-label">Rua</label>
    					<input type="Text" class="form-control shadow-none" name="rua">
    				</div>
					<div class="col-md-4 ps-0">
    					<label class="form-label">Bairro</label>
    					<input type="Text" class="form-control shadow-none" name="bairro">
    				</div>
					<div class="col-md-4 ps-0">
    					<label class="form-label">Cidade</label>
    					<input type="Text" class="form-control shadow-none" name="cidade">
    				</div>
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Senha</label>
    					<input type="password" class="form-control shadow-none" name="senha_user" required>
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">Confirmar Senha</label>
    					<input type="password" class="form-control shadow-none" name="senha_user" required>
    				</div>
    				<div class="text-end my-1">
    					<button type="submit" class="btn btn-dark shadow-none" name="EnviarCadUser">Registre-se</button>
    				</div>
    			</div>
    		</div>	
        	
    	</form>
      
    </div>
  </div>
</div>
	
</div>

