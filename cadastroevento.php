<!DOCTYPE html>
<head>
	<title>SisGEv | Cadastro de Evento</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<?php
        require_once("links.php");
    ?>
	<script src="js/jquery2.0.3.min.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/jquery.cookie.js"></script>
	<script src="js/screenfull.js"></script>
	<script>
	$(function () {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
		if (!screenfull.enabled) {
			return false;
		}
		
		$('#toggle').click(function () {
			screenfull.toggle($('#container')[0]);
			});
	});
	</script>
</head>
<body class="dashboard-page">
	<!--MENU e TOPO-->
	<?php
        require_once("menu.php");
        require_once("topo.php");
    ?>
	<!--FIM MENU e TOPO-->
		<div class="main-grid">
			<div class="agile-grids">
				<!-- grids -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Cadastro de Evento</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="inline-form widget-shadow">
								<div class="form-title">
									<p>Os campos com (*) são obrigatórios o preenchimento.</p>
								</div>
								<div class="form-body">
									<form method="post" action="cadastroevento.php" >
										<div class="row">
											<div class="col-sm-8">
												<label for="nomeevento">
													Nome:*
												</label>
												<input type="text" name="nomeevento" class="form-control" id="nomeevento" placeholder="Nome do evento" required>
											</div>
											<div class="col-sm-2">
												<label for="datainicio">
													Data Inicio:*
												</label>
												<input type="date" name="datainicio" class="form-control" id="datainicio" required>
											</div>
											<div class="col-sm-2">
												<label for="datafim">
													Data fim:
												</label>
												<input type="date" name="datafim" class="form-control" id="datafim">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-8">												
												<label for="sobreevento">
													Sobre o Evento:
												</label>
												<textarea class="form-control" id="sobreevento" name="sobreevento" placeholder="Digite informações sobre o evento."></textarea>			
											</div>
											<div class="col-sm-4">												
												<label for="contatos">
													Contatos:
												</label>
												<textarea class="form-control" id="contatos" name="contatos" placeholder="Digite as informações de contatos do evento."></textarea>				
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">												
													<label for="programacao">
														Programação:
													</label>
													<textarea class="form-control" id="programacao" placeholder="Digite a programação do evento." name="programacao"></textarea>				
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-12">
												<div class="col-xs-2">
													<button type="submit" class="btn btn-primary btn-block">SALVAR</button>													
												</div>
												<div class="col-xs-2">						
													<button type="reset" class="btn btn-primary btn-block">LIMPAR</button>													
												</div>
											</div>
										</div>
									</hr>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //grids -->
			</div>
		</div>
		<!-- Rodapé -->
		<?php
        	require_once("rodape.php");
    	?>		
		<!-- Fim Rodapé -->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
</body>
</html>
<?php
    if($_POST){
    	require_once("classes/Evento.php");
    	require_once("classes/Conexao.php");
    	require_once("classes/DALEvento.php");
        $evento = new Evento($_POST['nomeevento'], $_POST['sobreevento'], $_POST['datainicio'], $_POST['datafim'], $_POST['programacao'], $_POST['contatos']);
        $cx = new Conexao();
        $dal = new DALEvento($cx);
        $dal->Criar($evento);        
    }
?>