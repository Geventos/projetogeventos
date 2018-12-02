<?php
 	session_start();
	if(!empty($_SESSION['id_usuario'])){
	    require_once("classes/DAOUsuario.php");
	    require_once("classes/DAOEvento.php");	
	    $id_evento = $_GET['id_evento']; 
	    $con = (new DAOUsuario())->ListarInscrito($id_evento);
	    $evento = (new DAOEvento())->Exibir($id_evento);
	}else{
		header("Location: login.php");
	}
	include_once("sessao.php");    
?>
<!DOCTYPE html>
<head>
	<title>SisGEv | Gerar Crachá <?php echo $evento['nome']?></title>
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
					<h2 align="center">Gerar Crachá | <?php echo $evento['nome']?></h2>
				</div>
				<div class="panel panel-widget forms-panel">
					<div class="form-title">
						<div class="row">
							<div class="col-sm-12">
								<div class="col-md-10">
									<p><a href="#"><i class="fa fa-plus-square"></i></i></a> Gerar Crachá</p>
								</div>
							
							</div>
						</div>
					</div>
					<div class="bs-docs-example wow fadeInUp animated" data-wow-delay=".5s">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Gerar</th>
								</tr>
							</thead>
							<tbody>
								<tr>

									<?php while ($linhas = mysqli_fetch_array($con)){?>
									<td align="center"><?php echo $linhas["nome_participante"]; ?></td>
									<td align="center"><a class="fa fa-plus-square" href="imprimirCracha.php?id_participante=<?php echo $linhas[0];?>" title="Gerar Crachá"  target="_blank"></a></td>
								</tr>
								<?php } ?>
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