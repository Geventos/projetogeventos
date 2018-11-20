<?php
	session_start();
	if(!empty($_SESSION['id_usuario'])){
	    require_once("classes/DAOEvento.php");
	    $idevento = $_GET['id_evento'];
	    $dao = (new DAOEvento())->Deletar($idevento);
	}else{
		header("Location: login.php");
	}
	include_once("sessao.php");    
?>