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
          <div class="carousel-item active" data-bs-interval="1000">
            <img src="imagens/carrosel/1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="imagens/carrosel/2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="imagens/carrosel/3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <!--Fim do carrosel-->
      <!--formulario carrosel-->
    <div class="FormularioDoCarrosel container availability-form">
 	<div class="row">
 		<div class="col-lg-12 bg-white shadow p-4 rounded">
 			<h5 class="col-lg-3">Disponibilidade de Check-in</h5>
 			<form>
 				<div class="row align-items-end justify-content-center">
        
         <div class="col-lg-2 mb-2">
 						<label class="form-label" style="font-weight: 500;">Estado</label>
 						<select class="form-select shadow-none">
             <option value="Selecione">Selecione</option>
              <option value="Amazonas">Amazonas</option>
  						<option value="RiodeJaneiro">Rio de Janeiro</option>
  						<option value="SaoPaulo">São Paulo</option>
            </select>
 					</div>

 					<div class="col-lg-2 mb-2">
 						<label class="form-label" style="font-weight: 500;">Data de Entrada</label>
 						<input type="date" class="form-control shadow-none">
 					</div>

 					<div class="col-lg-2 mb-2">
 						<label class="form-label" style="font-weight: 500;">Data de Saida</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					
          <div class="col-lg-2 mb-2">
 						<label class="form-label" style="font-weight: 500;">Adultos</label>
 						<select class="form-select shadow-none">
  					
  						<option value="1">um</option>
  						<option value="2">Dois</option>
  						<option value="3">Três</option>
						</select>
 					</div>
 					
          <div class="col-lg-2 mb-2">
 						<label class="form-label" style="font-weight: 500;">Crianças</label>
 						<select class="form-select shadow-none">
  						
  						<option value="1">Uma</option>
  						<option value="2">Duas</option>
  						<option value="3">Três</option>
						</select>
 					</div>
 					
          <div class="col-lg-1 mb-lg-2 mt-2">
 						<button type="submit" class="btn btn-outline-success">Submit</button>
 					</div>

 				</div>
 			</form>
 		</div>
 	</div>
    </main>
<!--Fim do Main-->
<!--Quartos-->
<article class="conteudo-principal">
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Quartos</h2>
 <div class="container">
 	<div class="row">
<!--Quarto 1-->
 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="imagens/quarto1.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Suite simples</h5>
			    <h6 class="mb-4">R$1000 por noite</h6>
			    <div class="sobre mb-4">
			    	<h6 class="mb-1">Sobre</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Camas
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Banheiro
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Vista para o Mar
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Sofa
    				</span>
			    </div>
			    <div class="instalacao mb-4">
			    	<h6 class="mb-1">Instalação</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Televisão
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Ar Condicionado
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Café da Manhã
    				</span>
    			</div>

    			<div class="pessoas mb-4">
			    	<h6 class="mb-1">Hóspedes</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Adultos
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Crianças
    				</span>
    			</div>	
    				<div class="avaliacao mb-4">

    					<h6 class="mb-1">Avaliação</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Conferir</a>
    				</div>
			  </div>
			</div>
 		</div>
<!--Quarto 2-->
 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="imagens/quarto3.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Suite minimalista</h5>
			    <h6 class="mb-4">R$1000 por noite </h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Sobre</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Cama
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Banheiro
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Vista para o mar
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Sofa
    				</span>
			    </div>
			    <div class="instalacao mb-4">
			    	<h6 class="mb-1">Instalação</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Televisão
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Ar Condicionado
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Aquecedor
    				</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Academia
    				</span>
          </div>
    				<div class="pessoas mb-4">
			    	<h6 class="mb-1">Hóspedes</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Adultos
    				</span>
    				
    				</div>	
    				<div class="avaliacao mb-4">

    					<h6 class="mb-1">Avaliação</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">Conferir</a>
    				</div>
			  </div>
			</div>
 		</div>
<!--Quarto 3-->
 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="imagens/quarto4.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Suite Master</h5>
			    <h6 class="mb-4">R$3000 por noite </h6>
			    <div class="sobre mb-4">
			    	<h6 class="mb-1">Sobre</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		cama de casal
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Banheiro
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		vista para o mar
    				</span>
			    </div>
			    <div class="instalacao mb-4">
			    	<h6 class="mb-1">instalação</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Televisão
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Ar Condicionado
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Café da Manhã
    				</span>
          </div>
    				<div class="pessoas mb-4">
			    	<h6 class="mb-1">Hóspedes</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Adultos
    				</span>
    				</div>
    					
    				<div class="avaliacao mb-4">

    					<h6 class="mb-1">Avaliação</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">Conferir</a>
    				</div>
			  </div>
			</div>
 		</div>


 		<div class="col-lg-12 text-center mt-5">
 			<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Mais quartos</a>
 		</div>
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