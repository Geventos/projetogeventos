<?php  
    require_once("administrativo/classes/DAOEvento.php");
    //$id_evento = $_GET['id_evento'];
    $eventos = (new DAOEvento())->listar();
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
  
  <title>Home</title>
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

<section class="engine"><a href="https://mobirise.info/q">free responsive web templates</a></section><section class="features18 popup-btn-cards cid-rrD8uCQwQw" id="features18-5">

    

    
    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-1">
            Eventos</h2>
        
        <div class="media-container-row pt-5 ">
          <?php while ($evento = mysqli_fetch_array($eventos)){?>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper ">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center"><a href="detalhesevento.php?id_evento=<?php echo $evento[0];?>" class="btn btn-primary display-4">Detalhes</a></div>
                        <img src="assets/images/mbr-676x451.jpg" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7"><?php echo $evento ["nome"]; ?></h4>
                        <p class="mbr-text mbr-fonts-style align-left display-7"><?php echo $evento ["sobre"]; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?> 
            </div>

            
        </div>
    </div>
</section>
<?php require_once("rodapesite.php") ?>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/mbr-popup-btns/mbr-popup-btns.js"></script>
  <script src="assets/theme/js/script.js"></script>  
</body>
</html>