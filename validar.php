<?php 
	require_once("classes/DAOEvento.php");
	$idevento = $_GET['id_evento'];
	$idi = $_GET['id_inscrito'];
	$dao = (new DAOEvento())->ValidarPresenca($idevento, $idi);
?>