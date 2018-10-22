 <?php        require_once("classes/Conexao.php");
                 require_once("classes/DALEvento.php");
                 $cx = new Conexao();
                 $consulta ="SELECT * FROM evento ORDER BY data_ini";
                    $con = mysqli_query($cx->getBanco(), $consulta);    
      ?>
<!DOCTYPE html>
<head>
	<title>SisGEv | Eventos</title>
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
					<h2>Eventos</h2>
				</div>
				<div class="panel panel-widget forms-panel">
					<div class="form-title">
						<div class="row">
							<div class="col-sm-12">
								<div class="col-md-10">
									<p><a href="#"><i class="fa fa-search"></i></a> Ver Detalhes do Evento.</p>
								</div>
								<div class="col-md-2">
									<button type="submit" class="btn btn-primary btn-block" title="Adicionar Novo Evento."><i class="fa fa-plus-circle"></i> Add Evento</button>
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