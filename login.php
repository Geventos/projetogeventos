<?php
session_start();
?>
<!DOCTYPE html>
<html >
  <head>
    <!-- Site made with Mobirise Website Builder v4.8.1, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/1jojl1fomkx9wypfbe43d6kivkbrbzomr...ewxs1m3emoajtlsirj.pdf-122x73.png" type="image/x-icon">
    <meta name="description" content="Website Builder Description">
    <title>SisGEv | Login</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">    
  </head>
  <body>
    <?php  include("menufe.php");?>
    <section class="engine"><a href="https://mobiri.se/c">website builder</a></section><section class="cid-qVb72QGGYL mbr-fullscreen mbr-parallax-background" id="header15-17">    
    <div class="mbr-overlay" style="opacity: 0.5; background-color: #979485;"></div>
    <div class="container align-right">
      <div class="row">
        <div class="mbr-white col-lg-8 col-md-7 content-container" style="top: 50px ">
          <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1" align="center" style="color: #354053">LOGIN</h1>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="form-container">
            <form class="mbr-form" action="validaracesso.php" method="post" data-form-title="Mobirise Form">
              <div class="msg" style="color: red">
                <?php
                    if(isset($_SESSION['msg'])){
                    echo "<b>".$_SESSION['msg']."</b>";
                    unset($_SESSION['msg']);
                    }
                    ?>
                    <br>
              </div>
              <div data-for="email">
                <div class="form-group">
                  <input type="email" class="form-control px-3" name="email" placeholder="e-mail" id="email">
                </div>
              </div>              
              <div data-for="senha">
                <div class="form-group">
                  <input type="password" class="form-control px-3" name="senha" placeholder="senha" id="senha">
                </div>
              </div>
              <div class="row">                
                  <div class=col-lg-6">
                    <a align="right">PROBLEMAS COM LOGIN?</a>
                  </div>
                  <div class=col-lg-8 style="position: absolute; left: -40px; top: 200px;">
                    <span class="input-group-btn">
                      <input onclick="window.location='cadastrousuario.php';" type="button" class="btn btn-form btn-danger display-4" value="CADASTRAR">
                    </span>
                  </div>
                  <div class=col-lg-8 style="position: absolute; left: 150px; top: 200px;">
                    <span class="input-group-btn">
                      <input type="submit" class="btn btn-form btn-danger display-4" name="btnlogin" value="ENTRAR">
                    </span>
                  </div>
                </div>             
            </form>
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
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/formoid/formoid.min.js"></script>
<input name="animation" type="hidden">
</body>
</html>