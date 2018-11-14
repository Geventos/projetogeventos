<?php
    require_once("classes/Conexao.php");
    require_once("classes/DAOEvento.php");
    $idevento = $_GET['id_evento'];
    $cx = new Conexao();
    $dao = new DAOEvento($cx);
    $dao->Deletar($idevento);        
?>