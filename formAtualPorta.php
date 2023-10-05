	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Atualizar Porta</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|Inconsolata">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<style>
		.font2 {
		font-family: "Merriweather", sans-serif;
		}
		.font1 {
		font-family: "Inconsolata", sans-serif;
		}
		.centro{
		margin-left: 900px;
		}
	
		.logo1{
		margin-left: 200px;
		}
		.logo2{
		margin-right: 100px;
		}
	</style>
	</head>
	<body>
	
		<?php
	include "conecta.php";
	$id = $_GET['id'];
	$sql = "SELECT * FROM porta WHERE id=$id";
	$resultado = mysqli_query($conexao, $sql);
	$linha = mysqli_fetch_array($resultado);
	mysqli_close($conexao);
		?>
	
	
	
	<div class="navbar-fixed">
		<nav>
		<div class="nav-wrapper brown font2">
			<a href="#!" class="brand-logo logo1">TudoPortas.com</a>
			<ul class="right hide-on-med-and-down logo2">
			<li><a href="crudPorta.php">Portas</a></li>
			
			<li><a href="crudMac.php">Maçanetas</a></li>
			</ul>
		</div>
		</nav>
	</div>
	
	
	
	<br><br><br><br><br>
	<i class="material-icons prefix large centro">door_front</i><br>
	<section class="container">
			<div class="row">
			<h3 class="center-align font2"> Atualizar Porta </h3><br>
				<article class="col s6 offset-s3">
				<form method="POST" action="atualizarPorta.php">
						
						<input type="hidden" name="id" value="<?php echo $linha['id']?>">
							
							<div class="input-field">
								<i class="material-icons prefix">palette</i>
								<label for="Cor">Cor </label>
								<input type="text" name="cor" value="<?php echo $linha['cor']; ?>" required>
							</div>
		
							<div class="input-field">
								<i class="material-icons prefix ">create</i>
								<label for="modelo">Modelo</label>
								<input type="text" name="modelo" value="<?php echo $linha['modelo']; ?>" required>
							</div>
		
				<div class="input-field">
								<i class="material-icons prefix">attach_money</i>
								<label for="valor">valor</label>
								<input type="number" name="valor"  value="<?php echo $linha['valor']; ?>" required>
							</div>
		
						
							<p class="center-align">
								<button class="waves-effect waves-light btn brown" type="submit"><i class="material-icons right">send</i> Atualizar </button>
							</p>
		
						</form>
	
				</article>
			</div>
		</section>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
	</body>
	</html>