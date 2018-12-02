<?php 
	require_once("classes/Conn.php");
	require_once("classes/DAOEvento.php");
	$idevento = $_GET['id_evento'];
	$idi = $_GET['id_inscrito'];
	$cx = Conn::getInstance();
	$dao = new DAOEvento($cx);
	$dao->ValidarPresenca($idevento, $idi);
?>