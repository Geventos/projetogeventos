<?php  
require_once("classes/Conexao.php");
require_once("classes/DALEvento.php");
$cx = new Conexao();
$codigo  = $_GET['id_evento'];
$consulta = "SELECT * FROM evento WHERE id_evento = $codigo limit 1";
$con = mysqli_query($cx->getBanco(), $consulta);
$linha = mysqli_fetch_assoc($con);
?>

<!DOCTYPE html>
<html >
    <head>
        <title>SisGEv | Evento - <?php echo $linha['nome']?> </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <meta name="description" content="">
        <?php require_once("linksfe.php"); ?>
    </head>
    <body>
        <?php require_once("menufe.php"); ?>
        <section class="mbr-section form1 cid-r5ll0QmIUj" id="form1-8">
            <div class="container">
                <div class="col-md-12 multi-horizontal">
                    <div class="row row-sm-offset">
                        <div class="col-md-9 multi-horizontal">
                            <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><?php echo $linha['nome']?></h2>
                            <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"><?php echo date ("d/m/Y", strtotime($linha['data_ini']));?> a <?php echo date ("d/m/Y", strtotime($linha['data_fim']));?> </h3>
                        </div>
                        <div class="col-md-3 multi-horizontal">
                            <div class="row row-sm-offset">
                                <button href="" type="submit" class="btn btn-primary">INSCRIÇÃO</button>
                            </div>
                            <div class="row row-sm-offset">
                                <button href="" type="submit" class="btn btn-primary">CERTIFICADO</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="media-container-column col-lg-12">
                        <div class="row row-sm-offset">
                            <div class="col-md-8 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7">Sobre o evento</label>
                                    <textarea type="text" class="form-control" rows="7" disabled> <?php echo $linha['sobre'];?></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7">Contatos</label>
                                    <textarea type="text" class="form-control" rows="7" disabled><?php echo $linha['contatos'];?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row row-sm-offset">
                            <div class="col-md-12 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7">Programaçao</label>
                                    <textarea type="text" class="form-control" rows="7" disabled><?php echo $linha['programacao'];?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once("rodapefe.php"); ?>
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