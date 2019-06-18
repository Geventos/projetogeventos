 <?php
 	session_start();
	if(!empty($_SESSION['id_usuario'])){
	    require_once("classes/DAOEvento.php");	    
	    $eventos = (new DAOEvento())->listar();
	}else{
		header("Location: ./login.php");
	}
	include_once("sessao.php");    
?>
<!DOCTYPE html>
<head>
	<title>SisGEv | Eventos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
					<h2>Eventos</h2>
				</div>
				<div class="panel panel-widget forms-panel">
					<div class="form-title">
						<h3 align="center">Meus eventos</h3>
						<div class="row">
							<div class="col-sm-12">
								<div class="col-md-10">
								</div>
							</div>
						</div>
					</div>
					<?php require_once("tabEventosBE.php"); ?>
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