<?php
	ob_start();
	session_start();
	header('Content-type: text/html; charset=utf-8');

    require '../config.php';
    require '../model/db.class.php';
    require '../model/regiao.class.php';
    require '../model/estado.class.php';
    require '../model/cidade.class.php';
	require '../model/controller.class.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,600" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fonts/octicons.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<script type="text/javascript" src="js/app.js"></script>
	<title>Demo</title>
</head>
<body>

<!-- modal localizacao -->
	<div id="modal" class="modal">
		<div class="modal-content">
			<div class="localizacao">
				<div class="row">
					<div class="col-12">
						<h2>seja bem vindo</h2>
						<p>Por favor, escolha o estado de seu interesse</p>
						<ul>
							<li>
								<a href="index.php?regiao=2&estado=SP&marca=terras">
									<div class="sigla">SP</div>
									<div class="estado">São Paulo</div>
								</a>
							</li>
							<li>
								<a href="index.php?regiao=2&marca=terras&scroll=yes">
									<div class="sigla">MG</div>
									<div class="estado">Minas Gerais</div>
								</a>
							</li>
							<li>
								<a href="index.php?regiao=4&estado=BA&marca=terras">
									<div class="sigla">BA</div>
									<div class="estado">Bahia</div>
								</a>
							</li>
							<li>
								<a href="index.php?regiao=4&estado=CE&marca=terras">
									<div class="sigla">CE</div>
									<div class="estado">Ceará</div>
								</a>
							</li>
							<li>
								<a href="index.php?regiao=5&estado=GO&marca=terras">
									<div class="sigla">GO</div>
									<div class="estado">Goiás</div>
								</a>
							</li>
							<li>
								<a href="index.php?scroll=yes">
									<div class="sigla last">+</div>
									<div class="estado">Outros <br>Estados</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /modal localizacao -->

	<section>
		<!-- selecao -->
		<div class="select-empreendimento" id="empreendimentos">
			<div class="wrapper">
				<div class="row">
					<div class="col-12">
						<div class="head">
							<h2>Escolha seu empreendimento</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="selecao right">
							<div class="icon"><img src="img/icon-select-map.png" alt=""></div>
							<div class="label">Selecione</div>
							<select name="" id="regiao">
							<option value="">sua região</option>
								<?php
									foreach($listaRegiao as $linha):
										echo '<option value="'.$linha->id.'">'.$linha->name.'</option>';
									endforeach;
								?>
							</select>
						</div>
					</div>
					<div class="col-6">
						<div class="selecao estado left">
							<div class="icon"><img src="img/icon-select-local.png" alt=""></div>
							<div class="label">Selecione</div>
							<select class="dois" name="" id="estado">
							<option value="">seu estado</option>
								<?php
									foreach($listaEstado as $linha):
										echo '<option value="'.$linha->id.'">'.$linha->nome.'</option>';
									endforeach;
								?>
							</select>
						</div>
					</div>
					<div class="col-6">
						<div class="selecao estado left">
							<div class="icon"><img src="img/icon-select-local.png" alt=""></div>
							<div class="label">Selecione</div>
							<select class="dois" name="" id="estado">
							<option value="">sua cidade</option>
								<?php
									foreach($listaCidade as $linha):
										echo '<option value="'.$linha->id.'">'.$linha->nome.'</option>';
									endforeach;
								?>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- selecao -->
		
	
	</section>
	<footer>
		<div class="wrapper">
			<div class="row">
				<div class="col-12">
					<p>2017 Empresa S.A. • Todos os direitos reservados</p>
				</div>
			</div>
		</div>
	</footer>

	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			if (n > x.length) {slideIndex = 1}
			if (n < 1) {slideIndex = x.length}
			for (i = 0; i < x.length; i++) {
				 x[i].style.display = "none";
			}
			x[slideIndex-1].style.display = "block";
		}
	</script>

</body>
</html>
