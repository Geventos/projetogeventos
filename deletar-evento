<?php
    require_once("classes/Conexao.php");
    require_once("classes/DALEvento.php");
    $idevento = $_GET['id_evento'];
    $cx = new Conexao();
    $dal = new DALEvento($cx);
    $dal->Deletar($idevento);        
?>