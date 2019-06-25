<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lista de produtos da tabela produtos">
	<title>Novo cadastro</title>

	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<?php
	echo '<pre>';
		print_r($livro);
	echo '</pre>';
	?>

	<div class="container">
		<div class="row">
			
			<h1>Atualizar livro</h1>
			<ol class="breadcrumb">
				<li><a href="/">Inicio</a></li>
				<li class="active">Atualizar livro</li>
			</ol>

			<!--formulario de novo cadastro-->
			<form action="/livros/salvar" name="form_add" method="post">
				
				<!--input text EXEMPLAR do livro-->
				<div class="row">
					<div class="col-md-8">
						<label>Exemplar</label>
						<input type="text" name="nome" value="<?php echo $livro->exemplar?>" class="form-control">
					</div>
				</div>

				<!--input text AUTOR do livro-->
				<div class="row">
					<div class="col-md-8">
						<label>Autor</label>
						<input type="text" name="nome" value="<?php echo $livro->autor?>" class="form-control">
					</div>
				</div>

				<!--Select livro disponivel ou nao-->
				<div class="row">
					<div class="col-md-2">
						<label>Disponivel</label>
						<select name="disponivel" class="form-control">
							<option value="1" <?php echo ($livro->disponivel == 1? 'selected="selected"' : '')?>>Sim</option>
							<option value="2" <?php echo ($livro->disponivel == 2? 'selected="selected"' : '')?>>Não</option>
						</select>
					</div>
				</div>
				<br/>

				<div class="row">
					<div class="col-md-2">
						<!--serve pra alterar pelo id-->
						<input type="hidden" name="id" value="<?php echo $livro->id?>">
						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</div>
				</div>

			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/bootstrap/jsp/bootstrap.min.js"></script>

</body>
</html>