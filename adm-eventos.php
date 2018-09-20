<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
					<div class="bs-docs-example wow fadeInUp animated" data-wow-delay=".5s">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Data Inicio</th>
									<th>Data Fim</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>XVIII EPOPET - ENCONTRO POTIGUAR DOS GRUPOS PET</td>
									<td align="center">19/09/2018</td>
									<td align="center">19/09/2018</td>
									<td><a href="#" title="Ver Detalhes do Evento"><i class="fa fa-search"></i></a></td>
								</tr>
								<tr>
									<td>I SEMINÁRIO DE DIREITO DIGITAL - NEDDIG </td>
									<td align="center">20/09/2018</td>
									<td align="center">20/09/2018</td>
									<td><a href="#" title="Ver Detalhes do Evento"><i class="fa fa-search"></i></a></td>
								</tr>
							</tbody>
						</table>
						<hr>
						<nav align="center">
							<ul class="pagination pagination-lg">
								<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
							</ul>
						</nav>
						</hr>
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