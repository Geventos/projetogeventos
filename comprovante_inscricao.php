<html>
<head></head>
<body>
<fieldset>
 <?php
	$cx = new Conexao();
	$consultaevento = "select nome from evento where id_evento = " . $_GET['$id_evento'];
	$con = mysqli_query($cx->getBanco(), $consultaevento);
	echo "<p>$consultaevento</p>";
	$linha = mysqli_fetch_array($con);
	$consultainscrito = "select nome from participante where id_participante = ". $_GET['$idinscrito']";
	$coninscrito = mysqli_query($cx->getBanco(), $consultainscrito);
	$linha2 = mysqli_fetch_array($coninscrito);
 ?>
 <h1>Comprovante de Inscrição do evento <?php $linha[0] ?> </h1>
 <p class='center sub-titulo'>
 </p>
 <p>Você está inscrito no evento <strong> <?php $linha[0] ?> <strong></p>
 <p>
 <p class='direita'>Caicó, <?php $_GET['$datahora'] ?> </p>

<?php
 include("mpdf60/mpdf.php");
 $mpdf=new mPDF(); 
 $mpdf->SetDisplayMode('fullpage');
 $css = file_get_contents("css/mpdf/style.css");
 $mpdf->WriteHTML($css,1);
 $mpdf->WriteHTML($html);
 $mpdf->Output();
?>
</body>
</html>