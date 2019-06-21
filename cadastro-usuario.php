<!DOCTYPE html>
<html >
    <head>
        <title>SisGEv | Cadastro de Usuário</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <meta name="description" content="">
        <?php require_once("linksfe.php"); ?>
    </head>
    <body>
        <?php require_once("menutopo.php"); ?>
        <section class="mbr-section form1 cid-r5ll0QmIUj" id="form1-8">
            <div class="container">
                <div class="col-md-12 multi-horizontal">
                    <div class="row row-sm-offset">
                        <div class="col-md-12 multi-horizontal">
                            <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">Cadastro de Usuário</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <form method="post" action="cadastrousuario.php">
                    <div class="row justify-content-center">
                        <div class="media-container-column col-lg-12">
                            <div class="row row-sm-offset">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7" for="nome">Nome</label>
                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe o seu nome completo">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm-offset">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7" for="email">E-mail</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Informe um e-mail válido">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm-offset">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7" for="senha">Senha</label>
                                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Informe um senha para acesso">
                                    </div>
                                </div>
                            </div>

                            
                            <div class="row row-sm-offset">
                                <div class="col-lg-2.5" >
                                    <button type="reset" class="btn btn-primary">LIMPAR</button>
                                </div>
                                <div class="col-lg-2.5">
                                    <input onclick="window.location='login.php';" type="button" class="btn btn-primary btn-block" value="SALVAR">
                                
                                </div>
                            </div>                            
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <?php require_once("rodapesite.php"); ?>
        <script src="assets/web/assets/jquery/jquery.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/tether/tether.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/smoothscroll/smooth-scroll.js"></script>
        <script src="assets/dropdown/js/script.min.js"></script>
        <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
        <script src="assets/theme/js/script.js"></script>
        <script src="assets/formoid/formoid.min.js"></script>
    </body>
</html>
<?php
    if($_POST){
        require_once("classes/Usuario.php");
        require_once("classes/DAOUsuario.php");
        $usuario = new Usuario($_POST['nome'], $_POST['senha'], $_POST['email']);
        $dao = (new DAOUsuario())->criar($usuario);        
    }
?>