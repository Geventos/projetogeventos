<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  <title>Inscrição em Evento</title>
  <?php require_once("linksfe.php"); ?>
  
  
  
</head>
<body>
<?php require_once("menufe.php"); ?>
<section class="mbr-section form1 cid-r5ll0QmIUj" id="form1-8">
  <div class="col-md-9 multi-horizontal">
       <h3 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">[NOME EVENTO]</h3>
  </div>
  <div class="col-md-3 multi-horizontal">
  <form class="col-md-8" method="get">
    <div class="form-group col-md-12s">
    <input type="hidden" value="1" name="id_evento"/> 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="nome" class="form-control" name="id_inscrito" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Instituição</label>
      <input type="text" class="form-control" name="instituicao" placeholder="Instituição">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">CPF</label>
    <input type="text" class="form-control" name="cpf" placeholder="CPF">
  </div>
</div>
</div>
</div>
<button type="submit" class="btn btn-primary" style= "width: 50%px; height: 45%px" >Cancelar</button>
<button type="submit" class="btn btn-primary" style= "width: 55%px; height: 55%px" >Salvar</button>
<button type="submit" formmethod="get" formaction="./comprovante_inscricao.php" class="btn btn-primary" style= "width: 50%px; height: 45%px" >Gerar Comprovante</button>

</form> 
</div>
</section>

<?php require_once("rodapefe.php"); ?>
 </body>

 </html>