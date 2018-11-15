<?php
	session_start();
	if(!empty($_SESSION['id_usuario'])){
	    require_once("classes/Conexao.php");
	    require_once("classes/DAOEvento.php");
	    $idevento = $_GET['id_evento'];
	    $cx = new Conexao();
	    $dao = new DAOEvento($cx);
	    $dao->Deletar($idevento);
	}else{
		header("Location: login.php");
	}
	include_once("sessao.php");    
?>