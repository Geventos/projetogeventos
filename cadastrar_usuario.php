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
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Cadastrar Administrador
                    </h2>
                </div>
                <div class="body">
                	<?php if(isset($_GET['mensagem'])) {
	            		echo $_GET['mensagem'];
	            	} ?>
                    <form action="php/adicionar_administrador.php" method="post">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" id="nome" name="nome" class="form-control"/>
                                <label class="form-label">Nome</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" id="email" name="email" class="form-control"/>
                                <label class="form-label">Email</label>
                            </div>
                        </div>
                        
                        <br>

                        <input type="submit" value="Salvar" class="btn btn-primary m-t-15 waves-effect" /> 
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!-- Rodapé -->
        <?php
            include("rodape.php");
        ?>      
        <!-- Fim Rodapé -->
    </section>
    <script src="js/bootstrap.js"></script>
    <script src="js/proton.js"></script>
</body>
</html>