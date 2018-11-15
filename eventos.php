<?php        
require_once("classes/Conexao.php");
require_once("classes/DAOEvento.php");
$cx = new Conexao();
$consulta ="SELECT * FROM evento ORDER BY data_ini";
$con = mysqli_query($cx->getBanco(), $consulta);    
?>
<!DOCTYPE html>
<html >
  <head>
    <title>SisGEv | Eventos</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="description" content="Web Page Generator Description">
    <?php require_once("linksfe.php"); ?>
  </head>
  <body>
    <?php require_once("menufe.php"); ?>
    <section class="section-table cid-r5loR0dIRC" id="table1-f">
      <div class="container container-table">
        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Eventos</h2>
        <div class="table-wrapper">
          <div class="container">
            <div class="row search">              
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style">Buscar:</label>
                  <input class="form-control input-sm">
                </div> 
            </div>
          </div>
          <?php 
            require_once("tabEventosFE.php");
          ?>
        </div>
      </div>
    </section>
    <?php require_once("rodapefe.php"); ?>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/datatables/jquery.data-tables.min.js"></script>
    <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/theme/js/script.js"></script>
  </body>
</html>