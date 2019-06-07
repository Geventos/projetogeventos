<?php  
    require_once("classes/DAOEvento.php");
    //$id_evento = $_GET['id_evento'];
    $linha = (new DAOEvento())->Exibir(3);
?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-3-122x122.jpg" type="image/x-icon">
  <meta name="description" content="">
  
  <title>GEv | Evento - <?php echo $linha['nome']?></title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <?php
    require_once("menutopo.php");
  ?>

<section class="engine"><a href="https://mobirise.info/v">html templates</a></section><section class="services2 cid-rrDR542VLx" id="services2-v">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 60%;">
                    <img src="assets/images/mbr-676x451.jpg" alt="Mobirise" title="">
                </div>
                <div class="align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2"><?php echo $linha['nome']?></h2>
                    <div class="mbr-section-text">
                        <p class="mbr-text text1 pt-2 mbr-light mbr-fonts-style display-7">
                            <?php echo $linha['sobre'];?><br><br><strong>LOCAL: </strong>Centro de Tecnologia / UFRN<br><strong>DATA:</strong><?php echo $linha['data_ini'];?><br><strong>HORÁRIO:</strong> 08h00<br></p>
                        
                    </div>
                    <!--Btn-->
                    <div class="mbr-section-btn pt-3 align-left"><a href="https://mobirise.co" class="btn btn-secondary display-4">Inscrição</a></div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>