<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
	<title>SisGEv | Cadastro de Evento</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<?php
        include("links.php");
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
        include("menu.php");
        include("topo.php");
    ?>
    <section class="content">
            <div class="container-fluid">
	<div class="container-fluid">
                <!-- Widgets -->
                <!-- #END# Widgets -->
                <!-- Nav tabs -->
                
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="ultimos_atendimentos">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <div class="row clearfix">
                                        <div class="col-xs-12 col-sm-6">
                                            <i class="material-icons"> </i>
                                            <table>
                                            	<div class="table-responsive">
											        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
											            <thead>
											                <tr>
											                    <th colspan="2">Eventos que gerencio</th>
											                </tr>
											                <tr><td> Nome do Usuário Logado</td> <td> Nome do evento que o usuário logado gerencia</td>
											                </tr> 
											            </thead>
											            <tbody class="resultado">                
											            </tbody>
											        </table>
											    </div>
                                            </table>
                                        </div>
                                    </div>
                                </div>
           
                            </div>
                        </div>
                    </div>
                </div>              

		<?php
        	include("rodape.php");
    	?>		
		<!-- Fim Rodapé -->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
</body>
</html>