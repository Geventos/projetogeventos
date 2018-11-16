<!DOCTYPE html>
<head>
	<title>SisGEv | Permissões</title>
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
					<h2 align="center">Permissões de Usuário</h2>
				</div>
				<div class="panel panel-widget forms-panel">
					<div class="form-title">
						<div class="row">
							<div class="col-sm-12">
								<div class="col-md-10">
									<p><a href="#"><i class=""></i></i></a> Conceder Permissões</p>
								</div>
								
							</div>
						</div>
					</div>
					<div class="bs-docs-example wow fadeInUp animated" data-wow-delay=".5s">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Tipo de permissão</th>
									<th>Email do usuário</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td align="center"><select>
										<option>Selecione</option>
										<option id="1">Organizador</option>
										<option id="2">Sub-Organizador</option>
									</select>
								</td>
								
								<td align="center">
									<input type="email" name="Email do Usuário" placeholder="Digite o email do usuário" >
								</td>

								<td align="center">
								<form action="" >
									<button accesskey= type="submit" class="btn btn-primary btn-block" title="Gerar Crachá do Evento."><i class=""></i> Salvar</button>
								</form>
								</td>
									
								</tr>
							</tbody>
							
						</table>
					</div>
					
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