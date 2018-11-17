<?php
	session_start();
	if(!empty($_SESSION['id_usuario'])){  
		require_once("classes/Conexao.php");
		require_once("classes/DAOEvento.php");
		$cx = new Conexao();
		$id_evento  = $_GET['id_evento'];
		$consulta = "SELECT * FROM evento WHERE id_evento = $id_evento limit 1";
		$con = mysqli_query($cx->getBanco(), $consulta);
		$linha = mysqli_fetch_assoc($con);
	}else{
	header("Location: login.php");
	}
	include_once("sessao.php");
?>
<!DOCTYPE html>
<head>
	<title>SisGEv | Evento - <?php echo $linha['nome']?></title>
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
					<h2>Evento | <?php echo $linha['nome']?></h2>
				</div>
				<div class="panel panel-widget forms-panel">
					<div class="forms">
						<div class="inline-form widget-shadow">
							<div class="form-body">
								<form action="#" method="post">
									<div class="row">
										<div class="col-sm-8">
											<label for="nomeevento">
												Name:*
											</label>
											<input type="text" name="nomeevento" class="form-control" id="nomeevento" value="<?php echo $linha['nome']?>">
										</div>
										<div class="col-sm-2">
											<label for="datainicio">
												Data Inicio:*
											</label>
											<input type="date" name="datainicio" class="form-control" id="datainicio" value="<?php echo date ("Y-m-d", strtotime($linha['data_ini']));?>">
										</div>
										<div class="col-sm-2">
											<label for="datafim">
												Data fim:
											</label>
											<input type="date" name="datafim" class="form-control" id="datafim" value="<?php echo date ("Y-m-d", strtotime($linha['data_fim']));?>">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-8">
											<label for="sobre">
												Sobre o Evento:
											</label>
											<textarea class="form-control" name="sobre" id="sobre"><?php echo $linha['sobre'];?></textarea>
										</div>
										<div class="col-sm-4">
											<label for="contatos">
												Contatos:
											</label>
											<textarea class="form-control" name="contatos" id="contatos"><?php echo $linha['contatos'];?></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label for="programacao">
												Programação:
											</label>
											<textarea class="form-control" name="programacao" id="programacao"><?php echo $linha['programacao'];?></textarea>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col-sm-12">
											<div class="col-xs-2">
												<button type="submit" class="btn btn-primary btn-block">SALVAR</button>
											</div>
											<div class="col-xs-2">
												<button type="submit" class="btn btn-primary btn-block">CANCELAR</button>
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
	include("rodape.php");
	?>
	<!-- Fim Rodapé -->
</section>
</body>
</html>
<?php
	if($_POST){
		require_once("classes/Evento.php");
	    require_once("classes/Conexao.php");
	    require_once("classes/DAOEvento.php");
	    $evento = new Evento($_POST['nomeevento'], $_POST['sobre'], $_POST['datainicio'], $_POST['datafim'], $_POST['programacao'], $_POST['contatos']);
	    $cx = new Conexao();
	    $dao = new DAOEvento($cx);
	    $dao->Atualizar($evento, $id_evento); 	           
	}
?>