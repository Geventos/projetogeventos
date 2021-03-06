<?php
 	session_start();
	if(!empty($_SESSION['id_usuario'])){
	    require_once("classes/DAOEvento.php");	    
	    $eventos = (new DAOEvento())->listar();
	}else{
		header("Location: ../login");
	}
	include_once("sessao.php");    
?>
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
				<?php require_once("permissao-root.php"); ?>
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