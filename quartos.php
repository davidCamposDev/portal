<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novotel</title>
    <!--Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
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
  <div class="row">
   <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">
     <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2">FILTRO</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filtro">
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">Disponibilidade de Check-in</h5>
        <label class="form-label">Data de Entrada</label>
        <input type="date" class="form-control shadow-none mb-3">
        <label class="form-label">Data de Saida</label>
        <input type="date" class="form-control shadow-none mb-3">
        <label class="form-label" style="font-size: 18px;">Estado</label>
 		<select class="form-select shadow-none">
            <option value="Selecione">Selecione</option>
            <option value="Amazonas">Amazonas</option>
  		    <option value="RiodeJaneiro">Rio de Janeiro</option>
  		    <option value="SaoPaulo">São Paulo</option>
        </select>
      </div>
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">Instalação</h5>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f1">Wi-fi</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f2">Ar condicionado</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f3">Televisão</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f4">Café da manhã</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f5">Aquecedor</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f6">Academia</label>
        </div>
      </div>
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">Hóspedes</h5>
        <div class="d-flex">
          <div class="me-2">
          <label class="form-label">Adultos</label>
          <input type="number" class="form-control shadow-none">
        </div>
        <div>
          <label class="form-label">Crianças</label>
          <input type="number" class="form-control shadow-none">
        </div>
        </div>
      </div>
    </div>
  </div>
</nav>
</div>

<!--Quartos-->
<div class="col-lg-9 col-md-12 px-4">
  <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="imagens/quarto1.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Suite Simples</h5>
      <div class="sobreQuarto mb-4">
            <h6 class="mb-1">Sobre o Quarto</h6>
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
          <div class="instalacao mb-3">
            <h6 class="mb-1">Instalação</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wi-fi
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
          <div class="pessoas">
            <h6 class="mb-1">Hóspedes</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Adultos
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Crianças
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">R$ 1000 por noite </h6>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Reservar</a>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="imagens/quarto3.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Suite Minimalista</h5>
      <div class="sobreQuarto mb-4">
            <h6 class="mb-1">sobre o Quarto</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Cama
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Banheiro
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Vista para o Mar
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Sofa
            </span>
          </div>
          <div class="instalacao mb-3">
            <h6 class="mb-1">Instalação</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wi-fi
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
          <div class="Hospedes">
            <h6 class="mb-1">Hóspedes</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Adultos
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">R$ 1000 por noite </h6>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Reservar</a>
    </div>
  </div>
</div>
<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="imagens/quarto4.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Suite Master</h5>
      <div class="sobreQuarto mb-4">
            <h6 class="mb-1">sobre o Quarto</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Cama de Casal
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Banheiro
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Vista para o Mar
            </span>
          </div>
          <div class="instalacao mb-3">
            <h6 class="mb-1">instalação</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wi-fi
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
          <div class="Hospedes">
            <h6 class="mb-1">Hóspedes</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
              2 Adultos
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">R$ 3000 por noite</h6>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Reservar</a>
    </div>
  </div>
</div>
</div>


  </div>
</div>

</main>

<?php require('incorporar/footer.php'); ?>
<!--Javascrip do css-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"></script>
</body>
</html>