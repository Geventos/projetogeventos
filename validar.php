<?php 
	require_once("classes/Conexao.php");
	require_once("classes/DAOEvento.php");
	$idevento = $_GET['id_evento'];
	$idi = $_GET['id_inscrito'];
	$cx = new Conexao();
	$dao = new DAOEvento($cx);
	$dao->ValidarPresenca($idevento, $idi);
?>