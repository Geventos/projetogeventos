<?php
	session_start();
	if(!empty($_SESSION['id_usuario'])){
		require_once("classes/DAOEvento.php");
		$id_evento = $_GET['id_evento'];		
		$evento = (new DAOEvento())->Exibir($id_evento);
		$consultavalidado = (new DAOEvento())->Validado($id_evento);
	}else{
		header("Location: login.php");
	}
	include_once("sessao.php");  
?>
<!DOCTYPE html>
<head>
	<title>SisGEv | Validar Presença - <?php echo $evento['nome']?></title>
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
					<h2>Validar Presença | <?php echo $evento['nome']?></h2>
				</div>
				<div class="panel panel-widget forms-panel">
					<div class="forms">
						<div class="inline-form widget-shadow">
							<div class="form-body">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-6">
											<!-- Validar Inicio -->
											<video id="preview"></video>
											<script>
												let scanner = new Instascan.Scanner(
													{
														video: document.getElementById('preview')
													}
												);
												scanner.addListener('scan', function(content) {
													alert('Escaneou o conteudo: ' + content);
													window.open(content, "_blank");
													window.location='validar.php?id_evento=1&id_inscrito=' + content + '';
												});
												Instascan.Camera.getCameras().then(cameras =>
												{
													if(cameras.length > 0){
														scanner.start(cameras[1]);
													} else {
														console.error("Não existe câmera no dispositivo!");
													}
												});
											</script>
											<!-- Fim -->
										</div>
										<div class="col-md-6">
											<h3 style="text-align: center;">Ultimos Validados</h3>
											<br>
											<?php require_once("tabelavalidacao.php"); ?>
										</div>
									</div>
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