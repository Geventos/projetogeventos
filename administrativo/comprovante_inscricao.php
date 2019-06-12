<html>
<head></head>
<body>
<fieldset>
 <?php
 	include("classes/Conn.php");
 	include("classes/Inscrito.php");
 	include("classes/Evento.php");
	$cx = Conn::getInstance();
	$consultaevento = "select * from evento where id_evento = ". $_GET['id_evento'];
	$con = mysqli_query($cx->getBanco(), $consultaevento);
	echo "<p>$consultaevento</p>";
	$linha = mysqli_fetch_array($con, MYSQLI_NUM);
	$consultainscrito = "select * from inscricao where nome_participante = \"". $_GET['id_inscrito']."\"";
	$coninscrito = mysqli_query($cx->getBanco(), $consultainscrito);
	$linha2 = mysqli_fetch_array($coninscrito, MYSQLI_NUM);
	$ins = new Inscrito($linha2[1],$linha2[2],$linha2[3]);
	$eve = new Evento($linha[1], $linha[4],$linha[2],$linha[3],$linha[5],$linha[6]);


 ?>
 <h1> Olá <?php echo $ins->getNome() ?>, este é o seu comprovante de Inscrição do evento <?php echo $eve->getNome() ?> </h1>
 <p class='center sub-titulo'>
 </p>
 

<?php
require_once('TCPDF/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Our Code World');
$pdf->SetTitle('Example Write Html');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// add a page
$pdf->AddPage();

$html = '<h4>PDF Example</h4><br><p>Welcome to the Jungle</p>';
 
$pdf->writeHTML($html, true, false, true, false, '');
// add a page
$pdf->AddPage();

$html = '<h1>Hey</h1>';
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();
//Close and output PDF document
$pdf->Output('example_006.pdf', 'I');
?>
</body>
</html>