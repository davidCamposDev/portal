<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel administrativo</title>
    <?php require('inc/links.php') ?>

    <style>
		div.login-form{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 400px;
		}
	</style>

</head>
<body calss="bg-light">
<div class="login-form text-center rounded bg-white shadow overflow-none">
		
		<form method="POST">
		<h4 class="bg-dark text-white py-3">PAINEL ADMINISTRATIVO</h4>	
		<div class="p-4">
			<div class="mb-3">
    			<input name="usuario" required type="text" class="form-control shadow-none text-center" placeholder="Usuario">
  			  </div>
  			<div class="mb-4">
    			<input name="admin_senha" required type="password" class="form-control shadow-none text-center" placeholder="Senha">
  			</div>
  			<button name="login" type="submit" class="btn text-white bg-dark custom-bg shadow-none">LOGIN</button>
 
		</div>
	</form>

    <?php require('inc/scripts.php') ?>
</div>
</body>
</html>   