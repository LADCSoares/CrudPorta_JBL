<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de Contacto</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <br><br><br>

<section class="container">
		<div class="row">
		<h3 class="center-align">  Atualizar </h3>
			<article class="col s6 offset-s3">
				<form method="POST" action="atualizarPorta.php">
                    
                <input type="hidden" name="id" value="<?php echo $linha['id']?>">
					
                    <div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="Cor">Cor </label>
						<input type="text" name="cor" value="<?php echo $linha['cor']; ?>" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix ">email</i>
						<label for="modelo">Modelo</label>
						<input type="text" name="modelo" value="<?php echo $linha['modelo']; ?>" required>
					</div>

          <div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="valor">valor</label>
						<input type="number" name="valor"  value="<?php echo $linha['valor']; ?>" required>
					</div>

				
					<p class="center-align">
						<button class="waves-effect waves-light btn #ffab00 amber accent-4" type="submit"><i class="material-icons right">send</i> Atualizar </button>
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