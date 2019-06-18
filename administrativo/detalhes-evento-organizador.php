<?php
	session_start();
	if(!empty($_SESSION['id_usuario'])){
		require_once("classes/DAOEvento.php");
		require_once("classes/Evento.php");
		$evento = (new DAOEvento())->Exibir($_GET['id_evento']);
	}else{
		header("Location: login.php");
	}
	include_once("sessao.php");
?>
<!DOCTYPE html>
<head>
	<title>SisGEv | Evento - <?php echo $evento['nome']?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<?php
	include("links.php");
	include("scripts.php");
	?>
</head>
<body class="dashboard-page">
	<!--MENU e TOPO-->
	<?php
	include("menu.php");
	include("topo.php");
	?>
	<!--FIM MENU e TOPO-->
	<div class="main-grid">
		<div class="agile-grids">
			<!-- grids -->
			<div class="grids">
				<div class="progressbar-heading grids-heading">
					<h2>Evento | <?php echo $evento['nome']?></h2>
				</div>
				
			</div>
			<div class="panel panel-widget forms-panel">
				<div class="form-title">
					<div class="row">
						<div class="col-sm-12">
							<div class="col-md-2">
								<input onclick="window.location='index';" type="button" class="btn btn-primary btn-block" value="Home">
							</div>
							<div class="col-md-2">
								<form action="">		
									<input onclick="window.location='gerar-cracha.php?id_evento=<?php echo $evento['id_evento']; ?>';" type="button" class="btn btn-primary btn-block" value="Participantes">
								</form>			
							</div>
							<div class="col-md-2">
								<form action="permissoes.php">
									<button type="submit" class="btn btn-primary btn-block" title="Gerenciar Permissões."><i class=""></i> Permissões</button>	
									</form>				
							</div>
							<div class="col-md-2">
								<input onclick="window.location='validar-presenca.php?id_evento=<?php echo $evento['id_evento']; ?>';" type="button" class="btn btn-primary btn-block" value="Check-in">			
							</div>
							<div class="col-md-2">
								<input onclick="window.location='editar-evento.php?id_evento=<?php echo $evento['id_evento']; ?>';" type="button" class="btn btn-primary btn-block" value="Editar Evento">	
							</div>
						</div>
					</div>
				</div>
				
				<div class="forms">
					<div class="inline-form widget-shadow">
						<div class="form-body">
							<form action="#" method="post">
								<div class="row">
									<div class="col-sm-8">
										<label for="nomeevento">
											Name:*
										</label>
										<input type="text" name="nomeevento" class="form-control" id="nomeevento" value="<?php echo $evento['nome']?>" disabled>
									</div>
									<div class="col-sm-2">
										<label for="datainicio">
											Data Inicio:*
										</label>
										<input type="text" name="datainicio" class="form-control" id="datainicio" value="<?php echo date ("d/m/Y", strtotime($evento['data_ini']));?>" disabled>
									</div>
									<div class="col-sm-2">
										<label for="datafim">
											Data fim:
										</label>
										<input type="test" name="datafim" class="form-control" id="datafim" value="<?php echo date ("d/m/Y", strtotime($evento['data_fim']));?>" disabled>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-8">
										<label for="sobreevento">
											Sobre o Evento:
										</label>
										<textarea class="form-control" name = "sobre" id="sobreevento" disabled><?php echo $evento['sobre'];?></textarea>
									</div>
									<div class="col-sm-4">
										<label for="contatos">
											Contatos:
										</label>
										<textarea class="form-control" name="contatos" id="contatos" disabled><?php echo $evento['contatos'];?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="programacao">
											Programação:
										</label>
										<textarea class="form-control" id="programacao" name="programacao" disabled><?php echo $evento['programacao'];?></textarea>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- //grids -->
		</div>
	</div>
	<!-- Rodapé -->
	<?php
	include("rodape.php");
	?>
	<!-- Fim Rodapé -->
</section>
</body>
</html>
